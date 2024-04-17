<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Mozz\Domains\Post\Controllers\Controller as PostController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('posts')->name('posts-')->group(function () {
    Route::get('', [PostController::class, 'index'])->name('index');
});
