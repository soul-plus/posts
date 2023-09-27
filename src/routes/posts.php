<?php

use Illuminate\Support\Facades\Route;
use Soulplus\Posts\Http\Controllers\PostController;

Route::get('/posts',[PostController::class, 'index']);
