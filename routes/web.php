<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JahitanController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('jahitan', JahitanController::class);