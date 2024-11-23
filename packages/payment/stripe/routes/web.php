<?php

use Illuminate\Support\Facades\Route;
use Payment\Stripe\Http\Controllers\StripeController;

Route::get('/stripe', [StripeController::class, 'index'])->name('stripe.index');
