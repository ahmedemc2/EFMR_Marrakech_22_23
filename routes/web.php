<?php

use App\Http\Controllers\EleveController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource("/eleves", EleveController::class);
// Route::resource("/eleves", EleveController::class)->middleware(["auth", "isActive"]);
// Route::resource("/eleves", EleveController::class);
// Route::resource("/eleves", EleveController::class);