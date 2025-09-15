<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontEnd\PortfolioController;
use App\Http\Controllers\frontEnd\WelcomeController;

Route::get('/', [WelcomeController::class, 'index']);

## portfolio
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::post('/contact-send', [PortfolioController::class, 'sendContact'])->name('contact.send');
