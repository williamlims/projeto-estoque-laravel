<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Deposito;

class ProdutoController extends Controller
{
    public function indexAPI(){
        return Produto::all();
    }

    public function storeAPI(Request $request){
        Produto::create($request->all());
    }

    public function showAPI($id){
        return Produto::findOrFail($id);
    }

    public function updateAPI(Request $request, $id){
        $model = Produto::findOrFail($id);
        $model->update($request->all());
    }

    public function destroyAPI($id){
        $model = Produto::findOrFail($id);
        $model->delete();
    }

    public function saveItem(Request $request){
        $resultado = Produto::create($request->all());
        $depositos = Deposito::all();
        if($resultado){
            echo "<script> alert('Produto Cadastrado com Sucesso!'); </script>";
            return view('item', compact('depositos'));
        }
    }
}
