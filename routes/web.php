<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyInfo;
use App\Http\Controllers\PostController;


Route::get('/myInfo',[MyInfo::class,'viewInfo'])-> name('MyInfo');
Route::get('/posts/last', [PostController::class, 'showLastPosts']);
Route::get('/posts/{id}', [PostController::class, 'showPost']);