<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\MembersController;
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

//



//Route::view('list', 'list');


Route::get('list', [MembersController::class,'show']);
