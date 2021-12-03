<?php

namespace App\Http\Controllers;

use App\Models\Deposito;
use App\Models\Produto;
use App\Models\Movimento;
use Illuminate\Http\Request;

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

        $movimento = new Movimento;
        $movimento->nome_estoque = $request->id_estoque;
        $movimento->produto = $request->produto;
        $movimento->tipo_transferencia = "ENTRADA";
        $movimento->descricao = $request->descricao;
        $movimento->lote = $request->lote;
        $movimento->quantidade = $request->quantidade;

        $resultado2 = $movimento->save();
        $depositos = Deposito::all();

        if($resultado && $resultado2){
            echo "<script> alert('Produto Cadastrado com Sucesso!'); </script>";
            return view('item', compact('depositos'));
        }
    }

    public function transferItem(Request $request){

        $movimento_entrada = new Movimento;
        $movimento_saida = new Movimento;

        $produto = Produto::findOrFail($request->iditem);

        if($request->transacao == "Saida") {

            if($produto->quantidade >= $request->quantidade){

                $movimento_saida->nome_estoque = $request->origem;
                $movimento_saida->produto = $produto->produto;
                $movimento_saida->tipo_transferencia = "SAÍDA";
                $movimento_saida->descricao = $request->descricao;
                $movimento_saida->lote = $produto->lote;
                $movimento_saida->quantidade = $request->quantidade;

                if($produto->quantidade == $request->quantidade){
                    $res = $movimento_saida->save();
                    $atualiza_prod = $produto->delete();
                } else {
                    $res = $movimento_saida->save();
                    $produto->quantidade = $produto->quantidade - $request->quantidade;
                    $atualiza_prod = $produto->save();
                }
                
                if($res && $atualiza_prod){
                    echo "<script> alert('Saída do estoque com sucesso!'); </script>";
                    $movimentos = Movimento::all();
                    return view('movimentacoes', compact('movimentos'));
                }

            } else {
                echo "<script> alert('Quantidade acima do que existe no estoque!'); </script>";
                $movimentos = Movimento::all();
                return view('movimentacoes', compact('movimentos'));
            }
            
        } else if($request->transacao == "Transferencia") {

            if($produto->quantidade >= $request->quantidade){

                $movimento_saida->nome_estoque = $request->origem;
                $movimento_saida->produto = $produto->produto;
                $movimento_saida->tipo_transferencia = "SAÍDA";
                $movimento_saida->descricao = $request->descricao;
                $movimento_saida->lote = $produto->lote;
                $movimento_saida->quantidade = $request->quantidade;

                $movimento_entrada->nome_estoque = $request->destino;
                $movimento_entrada->produto = $produto->produto;
                $movimento_entrada->tipo_transferencia = "ENTRADA";
                $movimento_entrada->descricao = $request->descricao;
                $movimento_entrada->lote = $produto->lote;
                $movimento_entrada->quantidade = $request->quantidade;

                if($produto->quantidade == $request->quantidade){
                    $res_saida = $movimento_saida->save();
                    $res_entrada = $movimento_entrada->save();
                    $produto->id_deposito = $request->destino;
                    $atualiza_prod = $produto->save();
                } else {
                    $res_saida = $movimento_saida->save();
                    $res_entrada = $movimento_entrada->save();
                    $produto->quantidade = $produto->quantidade - $request->quantidade;
                    $atualiza_prod = $produto->save();
                    $novo = new Produto;
                    $novo->codigo = $produto->codigo;
                    $novo->produto = $produto->produto;
                    $novo->id_estoque = $request->destino;
                    $novo->descricao = $request->descricao;
                    $novo->lote = $produto->lote;
                    $novo->preco = $produto->preco;
                    $novo->custo = $produto->custo;
                    $novo->quantidade = $request->quantidade;
                    $novo->status = $produto->status;

                    $salva_prod = $novo->save();
                }

                if($res_saida && $res_entrada){
                    echo "<script> alert('Transferência efetuada com sucesso!'); </script>";
                    $movimentos = Movimento::all();
                    return view('movimentacoes', compact('movimentos'));
                }

            } else {
                echo "<script> alert('Quantidade acima do que existe no estoque!'); </script>";
                $movimentos = Movimento::all();
                return view('movimentacoes', compact('movimentos'));
            }

        } else {
            echo "<script> alert('Escolha uma opção de transferência!'); </script>";
            $depositos = Deposito::all();
            return view('transferencia', compact('depositos'));
        }

    }
}
