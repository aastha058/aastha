<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'index'])->name('base.index');
Route::get('/appointment', [IndexController::class, 'apoint'])->name('base.appointment');
Route::get('/homepri', [IndexController::class, 'homes'])->name('base.homepri');
Route::get('/oneperson', [IndexController::class, 'oneperson'])->name('base.oneperson');
Route::get('/limited', [IndexController::class, 'limited'])->name('base.limited');
Route::get('/pink', [IndexController::class, 'pink'])->name('base.pink');
Route::get('/object', [IndexController::class, 'object'])->name('base.object');
Route::get('/section', [IndexController::class, 'section'])->name('base.section');
Route::get('/micro', [IndexController::class, 'micro'])->name('base.micro');
Route::get('/nidhi', [IndexController::class, 'nidhi'])->name('base.nidhi');

