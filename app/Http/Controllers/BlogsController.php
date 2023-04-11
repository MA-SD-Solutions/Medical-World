<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Meta;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blogs = Blog::paginate(8);
        return view('blogs.index' , compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request->value);
        try{
            DB::beginTransaction();
            $blog = Blog::create([
                'title' => $request->title,
                'description' => $request->description,
                'created_by' => auth()->user()->id,
            ]);

            foreach($request->value as $value){
                Meta::create([
                    'key' => $request->key,
                    'value' => $value,
                    'blog_id' => $blog->id ,
                    'created_by' => auth()->user()->id
                ]);
            }
           

            if ($request->hasFile('blog_image')) {
                $blog->addMediaFromRequest('blog_image')->toMediaCollection('blog_image');
            }

            DB::commit();
            return redirect()->route('blogs.index')->with('success' , 'Blog Created Successfully');
        }catch(Exception $ex){
            return redirect()->back()->with('error' , $ex->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        try{
            $blog = Blog::findOrFail($id);
            if(!$blog){
              return redirect()->route('blogs.index')->with('error' , 'Blog Id Not Found');
            }else{
                return view('blogs.show' , compact('blog'));
            }
        }catch(Exception $ex){
            return redirect()->back()->with('error' , $ex->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        try{
            $blog = Blog::findOrFail($id);
            if(!$blog){
              return redirect()->route('blogs.index')->with('error' , 'Blog Id Not Found');
            }else{
                return view('blogs.edit' , compact('blog'));
            }
        }catch(Exception $ex){
            return redirect()->back()->with('error' , $ex->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        try{
            $blog = Blog::findOrFail($id);
            if(!$blog){
              return redirect()->route('blogs.index')->with('error' , 'Blog Id Not Found');
            }else{
               $blog->update($request->all());

               if ($request->hasFile('blog_image')) {
                $blog->addMediaFromRequest('blog_image')->toMediaCollection('blog_image');
            }
               return redirect()->route('blogs.index')->with('success' , 'Blog Updated Successfully');
            }
        }catch(Exception $ex){
            return redirect()->back()->with('error' , $ex->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try{
            $blog_id = Blog::findOrFail($id);
            if(!$blog_id){
              return redirect()->route('blogs.index')->with('error' , 'Blog Id Not Found');
            }else{
                $blog_id->delete();
                return redirect()->route('blogs.index')->with('success' , 'Blog Deleted Successfully');
            }
        }catch(Exception $ex){
            return redirect()->back()->with('error' , $ex->getMessage());
        }
    }
}
