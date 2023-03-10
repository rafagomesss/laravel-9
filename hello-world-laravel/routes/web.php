<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/include', [SiteController::class, 'include']);
Route::get('/', [SiteController::class, 'index']);
Route::get('/sair', [SiteController::class, 'logout']);
Route::get('/usuarios/{qtde}', [SiteController::class, 'users']);
Route::get('/exercicio/{id}', [SiteController::class, 'exercicio']);
Route::get('/comentarios', [SiteController::class, 'comentarios']);
Route::get('/components', [SiteController::class, 'components']);

Route::get('/layout', [SiteController::class, 'layout']);
Route::get('/layout2', [SiteController::class, 'layout2']);