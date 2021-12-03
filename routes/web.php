<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepositoController;
use App\Http\Controllers\ProdutoController;

use App\Models\Deposito;
use App\Models\Produto;
use App\Models\Movimento;
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
    $custo = number_format(Produto::sum('custo'),2,",",".");
    $preco = number_format(Produto::sum('preco'),2,",",".");
    $quant = Produto::sum('quantidade');
    $moviments = Movimento::count('id');

    $itemMax = Produto::where('status', 1)->orderByDesc('custo')->limit(3)->get();

    $linhas = count($itemMax);

    if($linhas == 3){

        $total = $itemMax[0]->custo + $itemMax[1]->custo + $itemMax[2]->custo;
        $v1 = ($itemMax[0]->custo / $total) * 100;
        $v2 = ($itemMax[1]->custo / $total) * 100;
        $v3 = ($itemMax[2]->custo / $total) * 100;
        $percentual[0] = $v1;
        $percentual[1] = $v2;
        $percentual[2] = $v3;

    } else if ($linhas == 2){

        $total = $itemMax[0]->custo + $itemMax[1]->custo;
        $v1 = ($itemMax[0]->custo / $total) * 100;
        $v2 = ($itemMax[1]->custo / $total) * 100;
        $v3 = 0;
        $percentual[0] = $v1;
        $percentual[1] = $v2;
        $percentual[2] = $v3;

    } else if ($linhas == 1){
        $v1 =  100;
        $v2 = 0;
        $v3 = 0;
        $percentual[0] = $v1;
        $percentual[1] = $v2;
        $percentual[2] = $v3;

    } else {
        $percentual[0] = 0;
        $percentual[1] = 0;
        $percentual[2] = 0;
        $itemMax = null;
    }

    return view('dashboard', compact('custo', 'preco', 'quant', 'moviments', 'itemMax', 'percentual'));
});

Route::get('/deposito', function () {
    return view('deposito');
});

Route::get('/item', function () {
    $depositos = Deposito::all();
    return view('item', compact('depositos'));
});

Route::get('/itens', function () {
    $produtos = Produto::all();
    return view('itens', compact('produtos'));
});

Route::get('/transferencia', function () {
    $depositos = Deposito::all();
    return view('transferencia', compact('depositos'));
});

Route::get('/movimentacoes', function () {
    $movimentos = Movimento::all();
    return view('movimentacoes', compact('movimentos'));
});

Route::post('savedepform', [DepositoController::class, 'saveForm']);

Route::post('saveitemform', [ProdutoController::class, 'saveItem']);

Route::post('transferir', [ProdutoController::class, 'transferItem']);