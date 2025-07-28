<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NearestGolferController;

Route::get('/golfers/nearest', [NearestGolferController::class, 'index']);

