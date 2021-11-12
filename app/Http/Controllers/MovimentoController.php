<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movimento;

class MovimentoController extends Controller
{
    public function indexAPI(){
        return Movimento::all();
    }

    public function storeAPI(Request $request){
        Movimento::create($request->all());
    }

    public function showAPI($id){
        return Movimento::findOrFail($id);
    }

    public function updateAPI(Request $request, $id){
        $model = Movimento::findOrFail($id);
        $model->update($request->all());
    }

    public function destroyAPI($id){
        $model = Movimento::findOrFail($id);
        $model->delete();
    }
}
