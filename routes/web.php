<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\UsersController;

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
    //return view('welcome');
    return redirect("about");
});

Route::POST("users",[UsersController::class, 'getData']);

Route::view('login', 'users');

Route::view('home', 'home');

Route::view('noaccess', 'noaccess');

Route::view('about', 'about');
