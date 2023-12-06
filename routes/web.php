<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\Home;
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

Route::get('/dashborad', function () {
    return view('home');
})->name(name:'test');


Route::get('/login',[AuthManager::class,'login'])->name(name:'login');
Route::post('/login',[AuthManager::class,'loginPost'])->name(name:'login.post');

Route::get('/registration',[AuthManager::class,'registration'])->name(name:'registration');
Route::post('/registration',[AuthManager::class,'registrationPost'])->name(name:'registration.post');

Route::get('/logout',[AuthManager::class,'logout'])->name(name:'logout');

Route::group(['middleware'=>'auth'],function(){
    // Route::get('/home',[Home::class,'home'])->name(name:'home');
});




