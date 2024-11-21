<?php

use App\Http\Controllers\MountainController;

Route::get('/mountains', [MountainController::class, 'index']);
Route::get('/mountains/{id}', [MountainController::class, 'show']);
