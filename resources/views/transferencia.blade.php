@extends('base')

@section('titulo', 'Transferência')

@section('transferencia', 'active')

@section('breadcrumb', 'Home / Transferir Item')

@section('conteudo')
    <br>
    <form action="{{ url('transferir') }}" method="post">
        @csrf
        <div class="row">
            <div class="mb-3 col-6">
                <label for="origem" class="form-label">Depósito de Origem</label>
                <select class="form-select form-control" id="origem" name="origem">
                    <option selected>--------------</option>
                    @foreach ($depositos as $dep)
                        <option value="{{ $dep->id}}">{{ $dep->nome }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3 col-6">
                <label for="destino" class="form-label">Depósito de Destino</label>
                <select class="form-select form-control" id="destino" name="destino">
                    <option selected>--------------</option>
                    @foreach ($depositos as $dep)
                        <option value="{{ $dep->id}}">{{ $dep->nome }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-6">
                <label for="iditem" class="form-label">ID do Item</label>
                <input type="text" class="form-control" name="iditem" id="iditem">
            </div>
            <div class="mb-3 col-6">
                <label for="quantidade" class="form-label">Quantidade</label>
                <input type="number" class="form-control" id="quantidade" name="quantidade">
            </div>
        </div>
        <div class="mb-3">
                <label for="transacao" class="form-label">Tipo de Transação</label>
                <select class="form-select form-control" id="transacao" name="transacao">
                    <option selected>--------------</option>
                    <option value="Saida">SAÍDA</option>
                    <option value="Transferencia">TRANSFERÊNCIA</option>
                </select>
            </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição da Transferência</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
        </div><br>
        <button type="submit" class="btn btn-primary btn-lg"> Transferir </button>
    </form>
@endsection