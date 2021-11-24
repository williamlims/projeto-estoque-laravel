@extends('base')

@section('titulo', 'Home')

@section('home', 'active')

@section('breadcrumb')
    Home 
@endsection

@section('conteudo')
    <br>
    <div class="row">
        <div class="col-4">
            <div class="card" >
                <img src="{{ asset('img/itens-estoque.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Itens no Estoque</h5>
                    <p class="card-text">Verifique os itens cadastrados no estoque e controle os ativos com as ferramentas de controle de estoque.</p>
                    <a href="{{ url('/itens') }}" class="btn btn-primary">Listar Itens</a>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card" >
                <img src="{{ asset('img/movimento.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Movimentações</h5>
                    <p class="card-text">Verifique as movimentações de itens no estoque e controle os ativos com as ferramentas de controle de estoque.</p>
                    <a href="{{ url('/movimentacoes') }}" class="btn btn-primary">Listar Movimentações</a>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card" >
                <img src="{{ asset('img/cadastro.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Cadastrar Item</h5>
                    <p class="card-text">Cadastre novos itens no estoque e controle os ativos com as ferramentas de controle de estoque.</p>
                    <a href="{{ url('/item') }}" class="btn btn-primary">Cadastrar Novo Item</a>
                </div>
            </div>
        </div>
    </div>
@endsection