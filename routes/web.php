<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/enquiry',[HomeController::class,'enquiry']);
Route::post('/enquiry',[HomeController::class,'enquiry']);

Route::get('/feedback',[HomeController::class,'feedback']);
Route::post('/feedback',[HomeController::class,'feedback']);