<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontEnd\PortfolioController;

## portfolio
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::post('/contact-send', [PortfolioController::class, 'sendContact'])->name('contact.send');
