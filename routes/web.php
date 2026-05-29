<?php

use App\Http\Controllers\ChirpController;
use Illuminate\Support\Facades\Route;

// When someone visits the homepage (that '/' route), 
// show them the welcome view.

Route::get('/', [ChirpController::class, 'index']);
Route::post('/chirps', [ChirpController::class, 'store']);
