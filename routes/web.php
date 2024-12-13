<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landingController;

Route::get('/index', [landingController::class, 'index'])->name('index');

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/index', function () {
  //  return view('index');
//});


