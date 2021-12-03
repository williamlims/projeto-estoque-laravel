@extends('base')

@section('titulo', 'Movimentações')

@section('movimentacoes', 'active')

@section('breadcrumb', 'Home / Movimentações')

@section('conteudo')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>ITEM</th>
                <th>TRANSAÇÃO</th>
                <th>DEPÓSITO</th>
                <th>QUANTIDADE</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movimentos as $mov)
                <tr>
                    <td>{{ $mov->id }}</td>
                    <td>{{ $mov->produto }}</td>
                    <td>{{ $mov->tipo_transferencia }}</td>
                    <td>{{ $mov->nome_estoque }}</td>
                    <td>{{ $mov->quantidade }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection