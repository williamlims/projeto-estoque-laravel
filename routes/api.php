<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepositoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\MovimentoController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Rotas de API para Deposito
Route::get('v1/depositos', [DepositoController::class, 'indexAPI']);
Route::get('v1/depositos/{id}', [DepositoController::class, 'showAPI']);
Route::post('v1/depositos', [DepositoController::class, 'storeAPI']);
Route::put('v1/depositos/{id}', [DepositoController::class, 'updateAPI']);
Route::delete('v1/depositos/{id}', [DepositoController::class, 'destroyAPI']);

// Rotas de API para Produto
Route::get('v1/produtos', [ProdutoController::class, 'indexAPI']);
Route::get('v1/produtos/{id}', [ProdutoController::class, 'showAPI']);
Route::post('v1/produtos', [ProdutoController::class, 'storeAPI']);
Route::put('v1/produtos/{id}', [ProdutoController::class, 'updateAPI']);
Route::delete('v1/produtos/{id}', [ProdutoController::class, 'destroyAPI']);

// Rotas de API para Movimento
Route::get('v1/movimentos', [MovimentoController::class, 'indexAPI']);
Route::get('v1/movimentos/{id}', [MovimentoController::class, 'showAPI']);
Route::post('v1/movimentos', [MovimentoController::class, 'storeAPI']);
Route::put('v1/movimentos/{id}', [MovimentoController::class, 'updateAPI']);
Route::delete('v1/movimentos/{id}', [MovimentoController::class, 'destroyAPI']);