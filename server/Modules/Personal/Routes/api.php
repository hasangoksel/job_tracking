<?php

use Illuminate\Support\Facades\Route;
use Modules\Personal\Http\Controllers\PersonalController;

Route::get('/personals', [UserController::class, 'index']);
Route::post('/personals', [UserController::class, 'store']);