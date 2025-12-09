<?php

use Illuminate\Support\Facades\Route;


    Route::get('/', function () {
    return view('welcome'); // <--- Debe apuntar al nombre del archivo real
});

