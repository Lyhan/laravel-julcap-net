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
    return view('components/pages/index');
});

Route::get('/average', function () {
    return view('components/pages/average');
});

Route::get('/rip', function () {
    return view('components/pages/rip');
});

Route::get('/ospf', function () {
    return view('components/pages/ospf');
});

Route::get('/eigrp', function () {
    return view('components/pages/eigrp');
});

Route::get('/big_numbers', function () {
    return view('components/pages/big_numbers');
});

Route::get('/bash_size_f', function () {
    return view('components/pages/bash_size_f');
});

Route::get('/loops', function () {
    return view('components/pages/loops');
});

Route::get('/regexp', function () {
    return view('components/pages/regexp');
});
Route::get('/manage_quota', function () {
    return view('components/pages/manage_quota');
});

Route::get('/manage_jvm_certs', function () {
    return view('components/pages/manage_jvm_certs');
});

Route::get('/kill_long_sql_queries', function () {
    return view('components/pages/kill_long_sql_queries');
});

Route::get('/transmission', function () {
    return view('components/pages/transmission');
});

Route::get('/lamp_install', function () {
    return view('components/pages/lamp_install');
});

Route::get('/public_private_key', function () {
    return view('components/pages/public_private_key');
});

