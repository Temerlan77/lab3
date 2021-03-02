<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Client;

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
Route::get('client/add',function(){
    DB::table('clienat')->insert({
        'name' =>'Tima',
        'surname' =>'Bakyt',
        'sge' =>19

    })
})
Route::get('/user', function () {
    return '<h1>I am user</h1>';
