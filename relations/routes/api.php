<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\InvoiceController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


/**
 * HAS ONE
 * Um usuário, incialmente, tem um endereço
 */

// Buscar um usuário por ID
Route::get('/users/{id}', [UserController::class, 'findOne']);

Route::get('/users', [UserController::class, 'index']);

// Cadastra um usuário
Route::post('/users', [UserController::class, 'insert']);


Route::get('/addresses', [AddressController::class, 'index']);

// Cadastra um endereço
Route::post('/addresses', [AddressController::class, 'insert']);

// Buscar um endereço por ID
Route::get('/addresses/{id}', [AddressController::class, 'findOne']);

// Get all invoices
Route::get('/invoices', [InvoiceController::class, 'index']);

// Insert invoice
Route::post('/invoices', [InvoiceController::class, 'insert']);

// Get an invoice
Route::get('/invoices/{id}', [InvoiceController::class, 'findOne']);