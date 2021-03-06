<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

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
})->name('name');

Route::get('/user', function () {
    return view('user');
})->name('welcome'); 

Route::get('/home', function () {
    return "home";
}); 

 Route::get('post/add' , function(){
     DB::table('post')->insert([
         'title' =>'tu',
         'body' => 'good'
     ]);     
 });