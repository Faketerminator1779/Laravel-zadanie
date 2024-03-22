<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

Route::prefix('posts')->group(function () {
    Route::get('/', [PostsController::class, 'index']);
    Route::get('/{id}', [PostsController::class, 'show']);
    Route::post('/', [PostsController::class, 'store']);
    Route::put('/{id}', [PostsController::class, 'update']);
    Route::delete('/{id}', [PostsController::class, 'destroy']);
});