<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deposito;

class DepositoController extends Controller
{
    public function indexAPI(){
        return Deposito::all();
    }

    public function storeAPI(Request $request){
        Deposito::create($request->all());
    }

    public function showAPI($id){
        return Deposito::findOrFail($id);
    }

    public function updateAPI(Request $request, $id){
        $model = Deposito::findOrFail($id);
        $model->update($request->all());
    }

    public function destroyAPI($id){
        $model = Deposito::findOrFail($id);
        $model->delete();
    }
}
