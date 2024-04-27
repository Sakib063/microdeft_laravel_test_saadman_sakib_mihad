<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('project', ProjectsController::class);