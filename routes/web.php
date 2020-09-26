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
    return view('user_interface.index');
});

Route::get('admin', function () {
    return view('admin_interface.index');
});

Route::get('setup', function () {
    return view('admin_interface.insert.setup');
});
