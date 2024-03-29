<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Blog;
use App\Models\Cart;
use App\Models\Doctor;
use App\Models\Image;
use App\Models\Offer;
use App\Models\Product;
use App\Models\Service;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function home(){
        return view('system.home');
    }

    public function aboutUs(){
        return view('system.about-us');
    }

    public function service(){
        $services = Service::get();
        return view('system.services', compact('services'));
    }

    public function doctor(){
        $doctors = Doctor::get();
        return view('system.doctors' , compact('doctors'));
    }

    public function singleDoctor($id){
        $doctor = Doctor::findOrFail($id);
        return view('system.single-doctor' , compact('doctor'));
    }

    public function singleService($id){
        $service = Service::findOrFail($id);
        return view('system.single-service' , compact('service'));
    }

    public function products(){
        $products = Product::get();
        return view('system.products', compact('products'));
    }

    public function singleProduct($id){
        $product = Product::findOrFail($id);
        return view('system.product-details' , compact('product'));
    }

    public function cart(){
        $carts = Cart::with('products')->with('offers')->with('services')->where('user_id' , auth()->user()->id )->get();
        // dd($carts[0]->products);
        $user = User::findOrFail(auth()->user()->id);
        return view('system.cart' , compact('carts' , 'user'));
    }

    public function ContactUs(){
        return view('system.contact');
    }

    public function offers(){
        $offers = Offer::get();
        return view('system.offers' , compact('offers'));
    }

    public function gallery(){
        $gallery = Image::get();
        return view('system.gallery' , compact('gallery'));
    }

    public function blogs(){
        $blogs = Blog::get();
        return view('system.blogs' , compact('blogs'));
    }
   
    public function blogDetails($id){
        $blog = Blog::where('id',$id)->first();
        // dd($blog);
        return view('system.blog-details', compact('blog'));
    }

    public function profile(){
        $user = User::find(auth()->user()->id)->first();
        $orders = Bill::with('billDetails')->where('user_id' , auth()->user()->id)->get();
        // dd($orders);
        return view('system.profile' , compact('user', 'orders'));
    }

    public function edit_profile(Request $request){
        try{
            // dd($request);
    
            $user = User::find(auth()->user()->id);
            $user->update($request->all());

            return redirect()->route('system.profile')->with('success' , 'Profile Edited Successfully');
        }catch(Exception $ex){
            return redirect()->back()->with('error' , $ex->getMessage());
        }
    }

    public function changeProfileImage(Request $request){
        $user = User::find(auth()->user()->id);
        $user->addMediaFromRequest('profile_image')->toMediaCollection('profile_image');

        return redirect()->back()->with('success' , 'Image changed Successfully');
    }
}
