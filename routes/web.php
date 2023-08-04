<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', [UserController::class, 'showHome']);

Route::get('/about', [UserController::class, 'showAbout']);

Route::get('/education', [UserController::class, 'showEducation']);

Route::get('/experience', [UserController::class, 'showExperience']);

Route::get('/projects', [UserController::class, 'showProjects']);

Route::get('/contact', [UserController::class, 'showContact']);
