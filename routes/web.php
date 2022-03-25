<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\MemberController;
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


Route::get('list', [MemberController::class,'list']);
Route::get('delete/{id}', [MemberController::class,'delete']);
