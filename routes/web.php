<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('index');
});

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
