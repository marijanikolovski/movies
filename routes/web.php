<?php

use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\GenresController;



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

Route::get('/movies', [MoviesController::class, 'index']);
Route::get('/movies/create', [MoviesController::class, 'create']);
Route::post('/movies', [MoviesController::class, 'store']);
Route::get('/movies/{id}', [MoviesController::class, 'show'])->name('movies-index');

Route::post('/movies/{id}/comments', [CommentsController::class, 'store']);

Route::get('/movies/gerners/{genre}', [GenresController::class, 'show'])->name('movies-genre');