<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;

Route::get('/', function () { return view('home'); })->name('home');
Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/services', function () { return view('services'); })->name('services');

Route::get('/contact', function () { return view('contact'); })->name('contact');
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/products', [ProductController::class, 'index'])->name('products.list');

Route::get('/myprofile', function () { return view('myprofile'); })->name('myprofile');