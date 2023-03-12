<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Exception;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //

    // public function __construct()
    // {
    //     $this->middleware('service:website-create',['only' => ['create', 'store']]);
    //     $this->middleware('service:website-read');
    //     $this->middleware('service:website-update',['only' => ['edit', 'update']]);
    //     $this->middleware('service:website-delete',['only' => ['destroy']]);

    // }

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $services = Service::paginate(10);
      return view('services.index' , compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $service = Service::create([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'created_by' => auth()->user()->id,
            ]);

            if ($request->hasFile('service_image')) {
                $service->addMediaFromRequest('service_image')->toMediaCollection('service_image');
            }
            return redirect()->route('services.index')->with('success' , 'Service Created Successfully');
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
    public function show(Request $request)
    {

        try{
            $service = Service::findOrFail($request->id);
            if(!$service){
              return redirect()->route('services.index')->with('error' , 'Service Id Not Found');
            }else{

                return view('services.show' , compact('service'));

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
    public function edit(Request $request)
    {
        try{
            $service = Service::findOrFail($request->id);
            if(!$service){
              return redirect()->route('services.index')->with('error' , 'Service Id Not Found');
            }else{
                return view('services.edit' , compact('service'));
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
        try{
            $service = Service::findOrFail($request->id);
            if(!$service){
              return redirect()->route('services.index')->with('error' , 'Service Id Not Found');
            }else{
               $service->update($request->all());
               return redirect()->route('services.index')->with('success' , 'Service Updated Successfully');
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
        try{
            $service_id = Service::findOrFail($request->id);
            if(!$service_id){
              return redirect()->route('services.index')->with('error' , 'Service Id Not Found');
            }else{
                $service_id->delete();
                return redirect()->route('services.index')->with('success' , 'Service Deleted Successfully');
            }
        }catch(Exception $ex){
            return redirect()->back()->with('error' , $ex->getMessage());
        }
    }
}
