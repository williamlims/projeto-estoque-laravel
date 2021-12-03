@extends('base')

@section('titulo', 'Cadastro de Depósito')

@section('deposito', 'active')

@section('breadcrumb')
    Home / Cadastrar Depósito
@endsection

@section('conteudo')
    <br>
    <form action="{{ url('savedepform') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Depósito</label>
            <input type="text" class="form-control" id="nome" name="nome">
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-lg"> Cadastrar </button>
    </form>
@endsection