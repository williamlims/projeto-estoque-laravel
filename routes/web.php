<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepositoController;
use App\Http\Controllers\ProdutoController;

use App\Models\Deposito;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/deposito', function () {
    return view('deposito');
});

Route::get('/item', function () {
    $depositos = Deposito::all();
    return view('item', compact('depositos'));
});

Route::get('/itens', function () {
    return view('itens');
});

Route::get('/movimentacoes', function () {
    return view('movimentacoes');
});

Route::get('/transferencia', function () {
    return view('transferencia');
});

Route::post('savedepform', [DepositoController::class, 'saveForm']);

Route::post('saveitemform', [ProdutoController::class, 'saveItem']);