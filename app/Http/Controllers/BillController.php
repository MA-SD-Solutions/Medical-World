<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Bill_details;
use App\Models\Cart;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bills = Bill::with('billDetails')->paginate(10);
        // dd($bills);
        return view('bills.index' , compact('bills'));
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
    try {
        $carts = Cart::with('products')->with('offers')->with('services')->where('user_id', auth()->user()->id)->get();
        // dd($carts[0]->services[0]->name);
        DB::beginTransaction();

        $name = '';
        $price = '';

        $total_price = 0;
        foreach ($carts as $cart) {
            if ($cart->type == 'product') {
                $total_price += $cart->products[0]->price;
            }elseif ($cart->type == 'service') {
                $total_price += $cart->services[0]->price;
            }elseif ($cart->type == 'offer') {
                $total_price += $cart->offers[0]->price;
            }
        }
        $bill_id = Bill::insertGetId([
            'total_price'=>$total_price,
            'taxes'=> '0',
            'shipping_fees'=> '0',
            'user_id'=> auth()->user()->id,
            'created_by'=> auth()->user()->id,
        ]);
        // dd($carts);
        foreach ($carts as $cart) {
            $product_id = null;
            $service_id = null;
            $offer_id = null;
            if ($cart->type == 'product') {
                $name = $cart->products[0]->name;
                $price = $cart->products[0]->price;
                $product_id = $cart->product_id;
                // $total_price += $price;
            } elseif ($cart->type == 'service') {
                $name = $cart->services[0]->name;
                $price = $cart->services[0]->price;
                $service_id = $cart->service_id;
                // $total_price += $price;
            } elseif ($cart->type == 'offer') {
                $name = $cart->offers[0]->name;
                $price = $cart->offers[0]->value;
                $offer_id = $cart->offer_id;
                // $total_price += $price;
            }else{
                return redirect()->route('system.cart')->with('error' , 'Type Is not Exist');
            }

            Bill_details::create([
                'type' => $cart->type,
                'name' => $name,
                'price' => $price,
                'quantity' => $cart->quantity,
                'product_id' => $product_id,
                'service_id' => $service_id,
                'offer_id' => $offer_id,
                'bill' => $bill_id,
                'created_by' => auth()->user()->id,
            ]);
        }

        Cart::where('user_id', auth()->user()->id)->delete();

        DB::commit();
        return redirect()->route('system.home')->with('success' , 'Booked Successfully');
    }catch(Exception $ex){
        return redirect()->route('system.cart')->with('error' , $ex->getMessage());
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
        $bills = Bill_details::where('bill', $id)->get();
        // dd($bills);
        return view('bills.show' , compact('bills'));
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
