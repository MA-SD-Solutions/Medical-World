<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Image;
use App\Models\Service;
use Exception;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::paginate(10);
        return view('gallary.index' , compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::get();
        return view('gallary.create' , compact('services'));
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
        try{
            $image = Image::create([
                'type' => $request->type,
                'created_by' => auth()->user()->id
            ]);

            if ($request->hasFile('gallary_image')) {
                $image->addMediaFromRequest('gallary_image')->toMediaCollection('gallary_image');
            }

            $avatar = $image->getFirstMediaUrl('gallary_image');
            $image->name = $avatar;
            $image->save();

            return redirect()->route('images.index')->with('success' , 'Image Uploaded Successfully');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        try{
            $image = Image::findOrFail($request->id);
            $services = Service::get();
            if(!$image){
              return redirect()->route('images.index')->with('error' , 'Image Id Not Found');
            }else{
                return view('gallary.edit' , compact('image' , 'services'));
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
    public function update(Request $request)
    {
        //
        try{
            $image = Image::findOrFail($request->id);
            if(!$image){
              return redirect()->route('images.index')->with('error' , 'Image Id Not Found');
            }else{
               $image->update($request->all());
               return redirect()->route('images.index')->with('success' , 'Image Updated Successfully');
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
    public function destroy(Request $request)
    {
        //
        try{
            $image = Image::findOrFail($request->id);
            if(!$image){
              return redirect()->route('images.index')->with('error' , 'Image Id Not Found');
            }else{
                $image->delete();
                $image->clearMediaCollection('gallary_image');
                return redirect()->route('images.index')->with('success' , 'Image Deleted Successfully');
            }
        }catch(Exception $ex){
            return redirect()->back()->with('error' , $ex->getMessage());
        }

    }
}
