<?php

namespace App\Http\Controllers;

use App\Models\Website;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('permission:website-create',['only' => ['create', 'store']]);
        $this->middleware('permission:website-read');
        $this->middleware('permission:website-update',['only' => ['edit', 'update']]);
        $this->middleware('permission:website-delete',['only' => ['destroy']]);

    }

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return 0;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

        return 0;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $website = Website::first();
         return view('website.edit' , compact('website'));
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
        // dd($request);
        $website = Website::first();
        if($website == null){
            $startWebsite = Website::create([
                'header_photo' => $request->header_photo,
                'header_title' => $request->header_title,
                'blog_header' => $request->blog_header,
                'blog_body' => $request->blog_body,
                'blog_button' => $request->blog_button,
                'blog_image' => $request->blog_image,
                'advertisement_image' => $request->advertisement_image,
                'created_by' => auth()->user()->id
            ]);
            if ($request->hasFile('header_photo')) {
                $startWebsite->addMediaFromRequest('header_photo')->toMediaCollection('header_photo');
            }
            if ($request->hasFile('blog_image')) {
                $startWebsite->addMediaFromRequest('blog_image')->toMediaCollection('blog_image');
            }
            if ($request->hasFile('advertisement_image')) {
                $startWebsite->addMediaFromRequest('advertisement_image')->toMediaCollection('advertisement_image');
            }
            return redirect()->back()->with('success' , 'Home Page Created Successfully');
        }else{
            $website->update($request->all());

            if ($request->hasFile('header_photo')) {
                $website->clearMediaCollection('header_photo');
                $website->addMediaFromRequest('header_photo')->toMediaCollection('header_photo');
            }
            if ($request->hasFile('blog_image')) {
                $website->clearMediaCollection('blog_image');
                $website->addMediaFromRequest('blog_image')->toMediaCollection('blog_image');
            }
            if ($request->hasFile('advertisement_image')) {
                $website->clearMediaCollection('advertisement_image');
                $website->addMediaFromRequest('advertisement_image')->toMediaCollection('advertisement_image');
            }
            return redirect()->back()->with('success' , 'Home Page Updated Successfully');
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {

        return 0;
    }
}
