<?php

use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;

Route::resource('ideas', IdeaController::class);