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

Route::get('/', function () {
    return view('index');
});
Route::get('/home', function () {return view('home');})->name('home');
Route::get('/room', function () {return view('room');})->name('room');
Route::get('/gallery', function () {return view('gallery');})->name('gallery');
Route::get('/dinning', function () {return view('dinning');})->name('dinning');
Route::get('/about', function () {return view('about');})->name('about');
Route::get('/news', function () {return view('news');})->name('news');
Route::get('/contact us', function () {return view('contact us');})->name('contact us');

Route::get('/hello',function(){
  return view('blog.hello');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->name('home');