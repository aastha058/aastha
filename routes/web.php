<?php

use App\Http\Controllers\AasthsController;
use App\Http\Controllers\TaxController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/dsc',[HomeController::class, 'home'])->name('home.dsc');
Route::get('/reports', [HomeController::class, 'reports'])->name('home.reports');
Route::get('/sc', [HomeController::class, 'sc'])->name('home.sc');
Route::get('/bulk', [HomeController::class, 'bulk'])->name('home.bulk');
Route::get('/account', [HomeController::class, 'account'])->name('home.account');
Route::get('/project', [HomeController::class, 'project'])->name('home.project');
use App\Http\Controllers\IndexController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [AasthsController::class, 'login'])->name('parent1.login');
Route::get('/home', [AasthsController::class, 'home'])->name('parent1.home');
Route::get('/wellcome',[AasthsController::class, 'welcome'])->name('parent1.welcome');
Route::get('/index',[AasthsController::class, 'index'])->name('parent1.index');
Route::get('/index1',[AasthsController::class, 'index1'])->name('parent1.index1');
Route::get('/index2',[AasthsController::class, 'index2'])->name('parent1.index2');
Route::get('/index3',[AasthsController::class, 'index3'])->name('parent1.index3');

Route::get('/', [IndexController::class, 'index'])->name('base.index');
Route::get('/appointment', [IndexController::class, 'appointment'])->name('base.appointment');
Route::get('/homepri', [IndexController::class, 'homes'])->name('base.homepri');
Route::get('/oneperson', [IndexController::class, 'oneperson'])->name('base.oneperson');
Route::get('/limited', [IndexController::class, 'limited'])->name('base.limited');
Route::get('/pink', [IndexController::class, 'pink'])->name('base.pink');
Route::get('/object', [IndexController::class, 'object'])->name('base.object');
Route::get('/section', [IndexController::class, 'section'])->name('base.section');
Route::get('/micro', [IndexController::class, 'micro'])->name('base.micro');
Route::get('/nidhi', [IndexController::class, 'nidhi'])->name('base.nidhi');

Route::get('/front', [TaxController::class, 'index'])->name('contact.index');
Route::get('/new', [taxController::class, 'new'])->name('new');
Route::get('/service', [taxController::class, 'serviceitr'])->name('service');
Route::get('/gst', [taxController::class, 'Gst'])->name('gst');
Route::get('/return', [taxController::class, 'return'])->name('return');
Route::get('/income', [taxController::class, 'Income'])->name('income');
Route::get('/tds', [taxController::class, 'Tds'])->name('tds');
