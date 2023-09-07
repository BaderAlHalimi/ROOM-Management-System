<?php

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
Route::view('/hotel', 'dashboard.index');
Route::view('/guest', 'dashboard.guest');
Route::view('/deal', 'dashboard.deal');
Route::view('/calender', 'dashboard.calender');
Route::view('/front-desk', 'dashboard.front-desk');
