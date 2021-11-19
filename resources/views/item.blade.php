@extends('base')

@section('titulo', 'Cadastrar Item')

@section('item', 'active')

@section('breadcrumb')
    Home / Cadastrar Item
@endsection

@section('conteudo')
    <br>
    <form>
        <div class="row">
            <div class="mb-3 col-6">
                <label for="deposito" class="form-label">Depósito</label>
                <select class="form-select form-control" id="deposito" name="deposito">
                    <option selected>-----------</option>
                    <option value="1">Depósito 1</option>
                    <option value="2">Depósito 2</option>
                </select>
            </div>
            <div class="mb-3 col-6">
                <label for="nome" class="form-label">Nome do Item</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-4">
                <label for="quantidade" class="form-label">Quantidade</label>
                <input type="number" class="form-control" id="quantidade" name="quantidade">
            </div>
            <div class="mb-3 col-4">
                <label for="custo" class="form-label">Custo do Item</label>
                <input type="text" class="form-control" id="custo" name="custo">
            </div>
            <div class="mb-3 col-4">
                <label for="preco" class="form-label">Preço de Venda</label>
                <input type="text" class="form-control" id="preco" name="preco">
            </div>
        </div>
        <div class="mb-3">
            <label for="unidade" class="form-label">Unidade de Medida</label>
            <select class="form-select form-control" id="unidade" name="unidade">
                <option selected>-----------</option>
                <option value="UN">UN</option>
                <option value="KG">KG</option>
                <option value="TN">TN</option>
                <option value="CX">CX</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-lg"> Cadastrar </button>
    </form>
@endsection