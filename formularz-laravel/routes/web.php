<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\FormProcessingController;
use App\Http\Controllers\FormViewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/form', [FormViewController::class, 'showForm']);

Route::post('/contact/submit', [FormProcessingController::class, 'submitForm'])->name('contact.submit');
Route::post('/cake-order/submit', [FormProcessingController::class, 'submitCakeOrder'])->name('cake.order.submit');
