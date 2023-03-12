<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\PasswordResetRequestController;
use App\Http\Controllers\Api\ChangePasswordController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Middleware\EnsureTokenIsValid;


// use App\Http\Controllers\TodoController;

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login')->name('login');
    Route::post('register', 'register');

});
Route::post('/reset-password-request', [PasswordResetRequestController::class, 'sendPasswordResetEmail']);
Route::post('/check-OTP', [ChangePasswordController::class, 'passwordResetProcess']);
Route::post('/update-password', [ChangePasswordController::class, 'resetPassword']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => ['auth.jwt', 'api']], function () {

    Route::post('logout', [AuthController::class, 'logout']);

    //Profile
    Route::post('profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('edit-profile', [ProfileController::class, 'update'])->name('edit-profile');
    Route::post('profile-image', [ProfileController::class, 'ProfileImage'])->name('profile-image');
    Route::post('delete-profile', [ProfileController::class, 'destroy'])->name('delete');


});
