<?php

use Illuminate\Support\Facades\Route;

// When someone visits the homepage (that '/' route), 
// show them the welcome view.

Route::get('/', function () { 
    return view('home');
});
