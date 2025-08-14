<?php

use App\Http\Controllers\TaxController;
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

Route::get('/', [TaxController::class, 'index'])->name('contact.index');
Route::get('/new', [taxController::class, 'new'])->name('new');
Route::get('/service', [taxController::class, 'serviceitr'])->name('service');
Route::get('/gst', [taxController::class, 'Gst'])->name('gst');
Route::get('/return', [taxController::class, 'return'])->name('return');
Route::get('/income', [taxController::class, 'Income'])->name('income');
Route::get('/tds', [taxController::class, 'Tds'])->name('tds');
