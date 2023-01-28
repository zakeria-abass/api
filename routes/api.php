<?php

use App\Http\Controllers\Api\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::get('/post',[PostController::class,'index'])->name('index');
Route::get('/post/{id}',[PostController::class,'show'])->name('show');

Route::post('/post',[PostController::class,'store'])->name('store');

Route::delete('/post/{id}',[PostController::class,'destroy'])->name('destroy');
Route::put('/post/{id}',[PostController::class,'update'])->name('update');
