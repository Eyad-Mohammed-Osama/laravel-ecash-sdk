<?php

use Illuminate\Support\Facades\Route;
use IXCoders\LaravelEcash\EcashPaymentCallbackController;

$callback_route = config('laravel-ecash-sdk.callback_route');

Route::prefix('ecash')->group(function () use ($callback_route) {
    Route::post('callback', EcashPaymentCallbackController::class)
        ->middleware("ecash.verify_remote_host")
        ->name($callback_route);
});
