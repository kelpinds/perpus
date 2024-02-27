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
Route::get('/',[adminControlle::class,'index'])->middleware(admin::class);
Route::get('login',[adminControlle::class,'login']);
Route::post('login',[adminControlle::class,'ceklogin']);
Route::post('login',[adminControlle::class,'ceklogin']);
});