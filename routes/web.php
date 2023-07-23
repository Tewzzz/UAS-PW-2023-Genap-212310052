<?php

use App\Models\Travel;
use App\Models\Kuliner;
use App\Models\Homestay;
use App\Models\Destinasi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\KulinerController;
use App\Http\Controllers\HomestayController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DestinasiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//guest & customer
Route::get('/', [HomeController::class, 'index']);
Route::get('/travel', function () {
    return view('users.travel.travel',[
        "data" => Travel::all()
    ]);
});
Route::get('/destinasi', function () {
    return view('users.destinasi.destinasi',[
        "data" => Destinasi::all()
    ]);
});

Route::get('/homestay', function () {
    return view('users.homestay.homestay',[
        "data" => Homestay::all()
    ]);
});

Route::get('/kuliner', function () {
    return view('users.kuliner.kuliner',[
        "data" => Kuliner::all()
    ]);
});



Route::get('/signin', [SignInController::class, 'index']);
Route::post('/signin', [SignInController::class, 'authenticate']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
Route::post('/logout', [SignInController::class, 'logout']);


// admin
Route::get('/booking', function () {
    return view('booking');
});

Route::get('/admin', function () {
    return view('admin.admindashboard');
})->middleware('auth');
Route::get('/order', function () {
    return view('admin.order');
})->middleware('auth');

Route::resource('/admin/kuliner', KulinerController::class)->middleware('auth');
Route::resource('/admin/travel', TravelController::class)->middleware('auth');
Route::resource('/admin/homestay', HomestayController::class)->middleware('auth');
Route::resource('/admin/destinasi', DestinasiController::class)->middleware('auth');
