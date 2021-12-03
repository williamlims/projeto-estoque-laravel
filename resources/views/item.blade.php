@extends('base')

@section('titulo', 'Cadastrar Item')

@section('item', 'active')

@section('breadcrumb')
    Home / Cadastrar Item
@endsection

@section('conteudo')
    <br>
        <form action="{{ url('saveitemform') }}" method="post">
            @csrf
            <div class="row">
                <div class="mb-3 col-4">
                    <label for="id_estoque" class="form-label">Depósito</label>
                    <select class="form-select form-control" id="id_estoque" name="id_estoque">
                      <option selected>---------</option>
                      @foreach ($depositos as $dep)
                            <option value="{{ $dep->id}}">{{ $dep->nome }}</option>
                      @endforeach
                    </select>
                </div>
                <div class="mb-3 col-4">
                    <label for="produto" class="form-label">Nome do Item</label>
                    <input type="text" class="form-control" id="produto" name="produto">
                </div>
                <div class="mb-3 col-4">
                    <label for="codigo" class="form-label">Código</label>
                    <input type="text" class="form-control" id="codigo" name="codigo">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-3">
                    <label for="quantidade" class="form-label">Quantidade</label>
                    <input type="number" class="form-control" id="quantidade" name="quantidade">
                </div>
                <div class="mb-3 col-3">
                    <label for="lote" class="form-label">Lote</label>
                    <input type="number" class="form-control" id="lote" name="lote">
                </div>
                <div class="mb-3 col-3">
                    <label for="custo" class="form-label">Custo do Item</label>
                    <input type="text" class="form-control" id="custo" name="custo">
                </div>
                <div class="mb-3 col-3">
                    <label for="preco" class="form-label">Preço de Venda</label>
                    <input type="text" class="form-control" id="preco" name="preco">
                </div>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select form-control" id="status" name="status">
                  <option selected>---------</option>
                  <option value="1">ATIVO</option>
                  <option value="0">INATIVO</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-lg"> Cadastrar </button>
        </form>
@endsection