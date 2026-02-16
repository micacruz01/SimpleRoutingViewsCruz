<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;

// First Route - Simple Message
Route::get('/hello', function () {
    return 'Hello, Laravel!';
});

// Second Route - Calls Controller Method
Route::get('/greet', [GreetController::class, 'greet']);