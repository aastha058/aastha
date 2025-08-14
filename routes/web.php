<?php

use App\Http\Controllers\AasthsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});




























Route::get('/login', [AasthsController::class, 'login'])->name('login');
Route::get('/home', [AasthsController::class, 'home'])->name('home');
Route::get('/',[AasthsController::class, 'welcome'])->name('welcome');
Route::get('/index',[AasthsController::class, 'index'])->name('index');
Route::get('/index1',[AasthsController::class, 'index1'])->name('index1');
Route::get('/index2',[AasthsController::class, 'index2'])->name('index2');
Route::get('/index3',[AasthsController::class, 'index3'])->name('index3');