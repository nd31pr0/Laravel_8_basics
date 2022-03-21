<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\AddMember;
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

//Route::post('user', [UserAuth::class,'userlogin']);


//Route::view('login', 'login');


Route::view('add', 'add');
Route::post('addmember', [AddMember::class,'add']);
