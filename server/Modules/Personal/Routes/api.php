<?php

use Illuminate\Support\Facades\Route;
use Modules\Personal\Http\Controllers\PersonalController;

Route::get('/personals', [PersonalController::class, 'index']);
Route::post('/personals', [PersonalController::class, 'store']);