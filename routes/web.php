<?php

use Illuminate\Support\Facades\Route;

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

// creating a direct route
// Route::get('/', function () {
//     return view('pages.index');
// });

//route with sending data. the page must have the var variable
// Route::get('/', function () {
//     return view('pages.index')->with('var', 'amrit');
// });

//route but going through controller
Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/service', 'App\Http\Controllers\PagesController@service');
//Route::get('/blog', 'App\Http\Controllers\PagesController@blog');





