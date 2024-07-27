<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\websitecontroller;
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
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/addproducts', [websitecontroller::class, 'addproducts']);
Route::get('/products_table', [websitecontroller::class, 'products_table']);
Route::post('/add', [websitecontroller::class, 'add']);
Route::get('/edit/{id}', [websitecontroller::class,'edit']);
Route::get('/delete/{id}', [websitecontroller::class,'delete']);
