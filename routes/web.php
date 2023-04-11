<?php

use App\Http\Controllers\AboutUsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Administration\RoleController;
use App\Http\Controllers\Administration\PermissionController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SystemController;
use App\Http\Controllers\WebsiteController;
use App\Http\Middleware\EnsureTokenIsValid;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::group(['middleware'=>['auth' , 'verified']], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::get('/profile', 'UserController@profile')->name('profile');
    Route::get('/editProfile/{id}', 'UserController@editProfile')->name('editProfile');
    Route::put('/updateProfile/{user}', 'UserController@updateProfile')->name('updateProfile');


    //Website (System)

    Route::get('/home', [SystemController::class , 'home'])->name('system.home');
    Route::get('/aboutUsPage', [SystemController::class , 'aboutUs'])->name('system.about_us');
    Route::get('/servicesPage', [SystemController::class , 'service'])->name('system.service');
    Route::get('/doctorsPage', [SystemController::class , 'doctor'])->name('system.doctor');
    Route::get('/singleDoctorPage/{id}', [SystemController::class , 'singleDoctor'])->name('system.singleDoctor');
    Route::get('/singleServicePage/{id}', [SystemController::class , 'singleService'])->name('system.singleService');
    Route::get('/productsPage', [SystemController::class , 'products'])->name('system.products');
    Route::get('/singleProduct/{id}', [SystemController::class , 'singleProduct'])->name('system.singleProduct');
    Route::get('/cart', [SystemController::class , 'cart'])->name('system.cart');
    Route::get('/contact', [SystemController::class , 'ContactUs'])->name('system.ContactUs');
    Route::get('/offersPage', [SystemController::class , 'offers'])->name('system.offers');
    Route::get('/galleryPage', [SystemController::class , 'gallery'])->name('system.gallery');
    Route::get('/blogsPage', [SystemController::class , 'blogs'])->name('system.blogs');
    Route::get('/blog_details_page/{id}', [SystemController::class , 'blogDetails'])->name('system.blogDetails');
    Route::get('/profile_page', [SystemController::class , 'profile'])->name('system.profile');
    Route::post('/edit_profile_page', [SystemController::class , 'edit_profile'])->name('system.edit_profile');
    Route::post('/edit_profile_image', [SystemController::class , 'changeProfileImage'])->name('system.changeProfileImage');

});
Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');
    Route::group(['middleware'=>['admin', 'auth' , 'verified']], function () {
    Route::post('addUser/store', [RegisteredUserController::class, 'store'])->name('storeUser');
    Route::get('addUser', [RegisteredUserController::class, 'create'])->name('addUser');
    Route::resource('users', UserController::class);

    // Roles Routes
    Route::get('roles',[RoleController::class,'index'])->name('index.roles');
    Route::get('roles/create',[RoleController::class,'create'])->name('roles.create');
    Route::post('roles/create',[RoleController::class,'store'])->name('roles.store');
    Route::get('roles/show/{roleId}',[RoleController::class,'show'])->name('roles.show');
    Route::get('roles/edit/{roleId}',[RoleController::class,'edit'])->name('roles.edit');
    Route::put('roles/edit/{roleId}',[RoleController::class,'update'])->name('roles.update');
    Route::delete('roles/destroy/{roleId}',[RoleController::class,'destroy'])->name('roles.destroy');


    // Permissions Routes
    Route::get('permissions',[PermissionController::class,'index'])->name('index.permissions');
    Route::get('permissions/create',[PermissionController::class,'create'])->name('permissions.create');
    Route::post('permissions/create',[PermissionController::class,'store'])->name('permissions.store');
    Route::get('permissions/show/{permissionId}',[PermissionController::class,'show'])->name('permissions.show');
    Route::get('permissions/edit/{permissionId}',[PermissionController::class,'edit'])->name('permissions.edit');
    Route::put('permissions/edit/{permissionId}',[PermissionController::class,'update'])->name('permissions.update');
    Route::delete('permissions/destroy/{permissionId}',[PermissionController::class,'destroy'])->name('permissions.destroy');

    //Website Routes
    Route::get('website',[WebsiteController::class,'edit'])->name('index.website');
    Route::post('websiteUpdate',[WebsiteController::class,'update'])->name('website.update');

    //aboutUs Routes
    Route::get('aboutUs',[AboutUsController::class,'edit'])->name('index.aboutUs');
    Route::post('aboutUsUpdate',[AboutUsController::class,'update'])->name('aboutUs.update');

    // products routes
    Route::get('products',[ProductController::class,'index'])->name('products.index');
    Route::get('create_product',[ProductController::class,'create'])->name('products.create');
    Route::post('store_product',[ProductController::class,'store'])->name('products.store');
    Route::delete('destroy_product/{id}',[ProductController::class,'destroy'])->name('products.destroy');
    Route::get('show_product/{id}',[ProductController::class,'show'])->name('products.show');
    Route::get('edit_product/{id}',[ProductController::class,'edit'])->name('products.edit');
    Route::put('update_product/{id}',[ProductController::class,'update'])->name('products.update');

    // Services routes
    Route::get('services',[ServiceController::class,'index'])->name('services.index');
    Route::get('create_service',[ServiceController::class,'create'])->name('services.create');
    Route::post('store_service',[ServiceController::class,'store'])->name('services.store');
    Route::delete('destroy_service/{id}',[ServiceController::class,'destroy'])->name('services.destroy');
    Route::get('show_service/{id}',[ServiceController::class,'show'])->name('services.show');
    Route::get('edit_service/{id}',[ServiceController::class,'edit'])->name('services.edit');
    Route::put('update_service/{id}',[ServiceController::class,'update'])->name('services.update');

    // Images routes (Gallary)
    Route::get('images',[ImageController::class,'index'])->name('images.index');
    Route::get('create_image',[ImageController::class,'create'])->name('images.create');
    Route::post('store_image',[ImageController::class,'store'])->name('images.store');
    Route::delete('destroy_image/{id}',[ImageController::class,'destroy'])->name('images.destroy');
    Route::get('edit_image/{id}',[ImageController::class,'edit'])->name('images.edit');
    Route::post('update_image/{id}',[ImageController::class,'update'])->name('images.update');

    // Carts routes
    Route::get('carts',[CartController::class,'index'])->name('carts.index');
    // Route::get('create_cart',[CartController::class,'create'])->name('carts.create');
    Route::post('store_cart',[CartController::class,'store'])->name('carts.store');
    Route::get('Cart_destroy/{id}',[CartController::class,'destroy'])->name('carts.destroy');

    //bill routes
    Route::get('bill',[BillController::class,'store'])->name('bill.store');

    //Contact routes
    Route::post('createContact',[ContactController::class,'store'])->name('contact.create');
    Route::get('Contacts',[ContactController::class,'index'])->name('contact.index');

    //offers routes
    Route::get('offers',[OfferController::class,'index'])->name('offers.index');
    Route::get('create_offer',[OfferController::class,'create'])->name('offers.create');
    Route::post('store_offer',[OfferController::class,'store'])->name('offers.store');
    Route::get('show_offer/{id}',[OfferController::class,'show'])->name('offers.show');
    // Route::get('offers',[OfferController::class,'edit'])->name('offers.edit');
    // Route::post('offers',[OfferController::class,'update'])->name('offers.update');
    Route::delete('delete_offer/{id}',[OfferController::class,'destroy'])->name('offers.destroy');

    //bills routes 
    Route::get('bills',[BillController::class,'index'])->name('bills.index');
    Route::get('show_bill/{id}',[BillController::class,'show'])->name('bills.show');

    //blogs routes
    Route::get('blogs',[BlogsController::class,'index'])->name('blogs.index');
    Route::get('create_blog',[BlogsController::class,'create'])->name('blogs.create');
    Route::post('store_blog',[BlogsController::class,'store'])->name('blogs.store');
    Route::get('show_blog/{id}',[BlogsController::class,'show'])->name('blogs.show');
    Route::get('edit_blog/{id}',[BlogsController::class,'edit'])->name('blogs.edit');
    Route::put('update_blog/{id}',[BlogsController::class,'update'])->name('blogs.update');
    Route::delete('destroy_blog/{id}',[BlogsController::class,'destroy'])->name('blogs.destroy');

});

Route::get('checkout',[CartController::class,'checkout'])->name('carts.checkout');

require __DIR__.'/auth.php';

