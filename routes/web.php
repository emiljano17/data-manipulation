<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollectionController;

Route::get('/', [CollectionController::class, 'index']);

