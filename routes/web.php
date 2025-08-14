<?php

use App\Http\Controllers\TaxController;
use Illuminate\Support\Facades\Route;
Route::get('/', [TaxController::class, 'index'])->name('contact.index');
Route::get('/new', [taxController::class, 'new'])->name('new');
Route::get('/service', [taxController::class, 'serviceitr'])->name('service');
Route::get('/gst', [taxController::class, 'Gst'])->name('gst');
Route::get('/return', [taxController::class, 'return'])->name('return');
Route::get('/income', [taxController::class, 'Income'])->name('income');
Route::get('/tds', [taxController::class, 'Tds'])->name('tds');
