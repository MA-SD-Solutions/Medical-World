<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Exception;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('product:website-create',['only' => ['create', 'store']]);
    //     $this->middleware('product:website-read');
    //     $this->middleware('product:website-update',['only' => ['edit', 'update']]);
    //     $this->middleware('product:website-delete',['only' => ['destroy']]);

    // }

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Product::paginate(10);
      return view('products.index' , compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('products.create');
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
            $product = Product::create([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'created_by' => auth()->user()->id,
            ]);
            if ($request->hasFile('product_image')) {
                $product->addMediaFromRequest('product_image')->toMediaCollection('product_image');
            }
            return redirect()->route('products.index')->with('success' , 'Product Created Successfully');
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
            $product = Product::findOrFail($request->id);
            if(!$product){
              return redirect()->route('products.index')->with('error' , 'Product Id Not Found');
            }else{

                return view('products.show' , compact('product'));

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
            $product = Product::findOrFail($request->id);
            if(!$product){
              return redirect()->route('products.index')->with('error' , 'Product Id Not Found');
            }else{
                return view('products.edit' , compact('product'));
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
            $product = Product::findOrFail($request->id);
            if(!$product){
              return redirect()->route('products.index')->with('error' , 'Product Id Not Found');
            }else{
               $product->update($request->all());
               return redirect()->route('products.index')->with('success' , 'Product Updated Successfully');
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
            $product_id = Product::findOrFail($request->id);
            if(!$product_id){
              return redirect()->route('products.index')->with('error' , 'Product Id Not Found');
            }else{
                $product_id->delete();
                return redirect()->route('products.index')->with('success' , 'Product Deleted Successfully');
            }
        }catch(Exception $ex){
            return redirect()->back()->with('error' , $ex->getMessage());
        }
    }
}
