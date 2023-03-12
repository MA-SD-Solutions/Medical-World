<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    //

    public function __construct()
    {
        // $this->middleware('permission:aboutUs-create',['only' => ['create', 'store']]);
        // $this->middleware('permission:aboutUs-read');
        // $this->middleware('permission:aboutUs-update',['only' => ['edit', 'update']]);
        // $this->middleware('permission:aboutUs-delete',['only' => ['destroy']]);

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
        $aboutUs = AboutUs::first();
         return view('aboutUs.edit', compact('aboutUs'));
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

        $aboutUs= AboutUs::first();

        if($aboutUs == null){
            AboutUs::create([
                'description' => $request->description,
                'created_by' => auth()->user()->id
            ]);
            return redirect()->back()->with('success','AboutUs Page Created Successfully');
        }else{
            $aboutUs->update($request->all());
            return redirect()->back()->with('success','AboutUs Page Edited Successfully');
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
