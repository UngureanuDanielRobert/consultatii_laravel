<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

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

Route::get('/', function () {
    return view('login');
});

Route::get('/programare', function () {
    return view('programare');
});
Route::get('/register', function () {
    return view('register');
});

Route::post('user', 'UserController@index')->name('user');
Route::post('parr', 'UserController@index')->name('parr');