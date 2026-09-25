<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontEnd\PortfolioController;
use App\Http\Controllers\frontEnd\WelcomeController;
use App\Http\Controllers\frontEnd\ProductController;

Route::get('/', [WelcomeController::class, 'index'])->name('home');

## portfolio
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::post('/contact-send', [PortfolioController::class, 'sendContact'])->name('contact.send');

## products
Route::get('/products/{slug}', [ProductController::class, 'show'])->name('products.show');
