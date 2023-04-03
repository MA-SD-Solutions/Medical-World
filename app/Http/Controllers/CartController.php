<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Patient;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = Cart::with('users')->with('products')->orderBy('created_at')->paginate(10);
        return view('Cart.index' , compact('carts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cart.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productId = null;
        $serviceId = null;
        $offerId = null;
        try{
            if($request->product_id){
                $productId=$request->product_id;
            }
            if($request->service_id){
                $serviceId = $request->service_id;
            }
            if($request->offer_id){
                $offerId = $request->offer_id;
            }
            $cart = Cart::create([
                'product_id' => $productId,
                'service_id' => $serviceId,
                'offer_id' => $offerId,
                'user_id' => auth()->user()->id,
                'type' => $request->type,
                'name' => $request->name,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'created_by' => auth()->user()->id
            ]);

            // return redirect()->route('carts.index')->with('success' , 'Cart Added Successfully');
            return response()->json(['success ' => 'Added To Cart Successfully'], 200);
        }catch(Exception $ex){
            // return redirect()->back()->with('error' , $ex->getMessage());
            return response()->json(['error ' => $ex->getMessage()], 400);
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
    public function destroy(Request $request)
    {
        try{
            $cart_id = Cart::findOrFail($request->id);
            if(!$cart_id){
              return redirect()->route('carts.index')->with('error' , 'Cart Product Not Found');
            }else{
                $cart_id->delete();
                return redirect()->route('carts.index')->with('success' , 'Cart Product Deleted Successfully');
            }
        }catch(Exception $ex){
            return redirect()->back()->with('error' , $ex->getMessage());
        }
    }

    public function checkout(Request $request){
        $patient = Patient::where('user_id', auth()->user()->id)->first();
        $cart = Cart::where('user_id', auth()->user()->id)->get();

        return compact('patient' , 'cart');

    }
}
