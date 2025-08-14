<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/dsc',[HomeController::class, 'home'])->name('home.dsc');
Route::get('/reports', [HomeController::class, 'reports'])->name('home.reports');
Route::get('/sc', [HomeController::class, 'sc'])->name('home.sc');
Route::get('/bulk', [HomeController::class, 'bulk'])->name('home.bulk');
Route::get('/account', [HomeController::class, 'account'])->name('home.account');
Route::get('/project', [HomeController::class, 'project'])->name('home.project');