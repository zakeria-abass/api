<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\web\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {

   $posts= \App\Models\Post::get();
    return view('index',compact('posts'));
})->middleware(['auth', 'verified'])->name('dashboard');



Route::resource('post',PostController::class);
require __DIR__.'/auth.php';
