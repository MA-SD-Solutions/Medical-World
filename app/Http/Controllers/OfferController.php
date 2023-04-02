<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Exception;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $offers = Offer::paginate(10);
        return view('offers.index', compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('offers.create');
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
            $offer = Offer::create([
                'name' => $request->name,
                'value' => $request->value,
                'oldValue' => $request->oldValue,
                'description' => $request->description,
                'created_by' => auth()->user()->id
            ]);

            if ($request->hasFile('offer_image')) {
                $offer->addMediaFromRequest('offer_image')->toMediaCollection('offer_image');
            }

            // $avatar = $offer->getFirstMediaUrl('offer_image');
            // $offer->name = $avatar;
            $offer->save();

            return redirect()->route('offers.index')->with('success' , 'Offer Made Successfully');
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
        $offer = Offer::findOrFail($id);
        return view('offers.show' , compact('offer'));
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
    }
}
