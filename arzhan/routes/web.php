<?php

use App\Http\Controllers\myarzhan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/', [myarzhan::class, 'home']);
Route::get('/about', [myarzhan::class, 'about']);

Route::get('/services', [myarzhan::class, 'services']);
Route::get('/contact', [myarzhan::class, 'contact']);
Route::get('/products', [myarzhan::class, 'products']);

// Route::get('/', function () {
//     return view('welcome');
// });
