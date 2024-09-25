<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MhsController;
use App\Http\Controllers\DosenController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('mhs','App\Http\Controllers\MhsController');
Route::resource('dosen','App\Http\Controllers\DosenController');

Route::get('/mhs/index', function () {
    return view('mhs');
});