<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testcontroller;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/candy' 
// );


// Route::controller(TestController::class)->group(function () {
//     Route::get('/listdata', 'test');
// });


Route::get('/id/{id}/name/{name}', [testcontroller::class, 'test']);



// Route::get('/', function () {
//     $articles = ['Article 1','Article 2','Article 3'];
//     return view('gfg', ['articles' => $articles]);
//  });