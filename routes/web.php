<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GraphController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware('auth')->group(function () {
    Route::resource('/post', PostController::class);
    Route::post('/getall', [PostController::class, 'getall'])->name('getall');

    Route::post('/getall', [PostController::class, 'getall'])->name('getall');
    Route::post('/getmodal', [PostController::class, 'getmodal'])->name('getmodal');
     // Route::get('/post',[PostController::class, 'index'])->name('post');

     Route::resource('profile', ProfileController::class);

Route::get('/facebook', [ProfileController::class, 'redirectToFacebookProvider'])->name('facebook');
Route::get('facebook/callback', [ProfileController::class, 'handleProviderFacebookCallback']);
Route::post('facebook_page_id', [ProfileController::class, 'facebook_page_id'])->name('facebook_page_id');

});

Route::post('page', [GraphController::class, 'publishToPage'])->name('page');
