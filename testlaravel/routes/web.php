<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home2', function () {
    return view('startFile/home');
});

Route::get('/about2', function () {
    return view('startFile/aboutUs');
});

Route::get('/contact2', function () {
    return view('startFile/contactUS');
});

Route::get('/master',[TestController::class,'master']);
Route::get('/home',[TestController::class,'home']);
Route::get('/contact',[TestController::class,'contact']);
Route::get('/about',[TestController::class,'about']);


