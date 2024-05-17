<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\BaseController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',[BaseController::class,'home'])->name('home');