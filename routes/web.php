<?php

use App\Http\Controllers\adminControlle;
use App\Http\Middleware\admin;
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

Route::prefix('admin')->group(function(){
Route::get('login',[adminControlle::class,'login']);
Route::post('login',[adminControlle::class,'ceklogin']);


Route::get('layoutadmin',[adminControlle::class,'dassadmin']);


Route::get('regis',[adminControlle::class,'regis']);
Route::post('regis',[adminControlle::class,'simpanregis']);


Route::get('admin',[adminControlle::class,'admin']);
Route::get('tambahadmin',[adminControlle::class,'tambahadmin']);
Route::post('tambahadmin',[adminControlle::class,'tambahad']);
Route::get('editadmin/{id}',[adminControlle::class,'editadmin']);
Route::post('editadmin/{id}',[adminControlle::class,'editad']);
Route::get('hapusadmin/{id}',[adminControlle::class,'hapusadmin']);
 });