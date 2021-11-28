<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

//Route::get('/', [App\Http\Controllers\ArticleController::class, 'index']);

Route::get('/', [App\Http\Controllers\ArticleController::class, 'index']);

		
		Route::get('articles/', [App\Http\Controllers\ArticleController::class, 'index']);

		Route::get('articles/create', [App\Http\Controllers\ArticleController::class, 'create']);

		Route::post('articles', [App\Http\Controllers\ArticleController::class, 'store']);

		Route::get('articles/{id}/edit', [App\Http\Controllers\ArticleController::class, 'edit']);

		Route::put('articles/{id}', [App\Http\Controllers\ArticleController::class, 'update']);

		Route::delete('articles/{id}', [App\Http\Controllers\ArticleController::class, 'destroy']);

		Route::get('articles/categorie', [App\Http\Controllers\ArticleController::class, 'index2']);

		Route::get('articles/encherir/{id}', [App\Http\Controllers\EncherirController::class, 'enche']);

		Route::get('articles/{id}', [App\Http\Controllers\ArticleController::class, 'show']);

