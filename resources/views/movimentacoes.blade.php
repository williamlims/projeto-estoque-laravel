@extends('base')

@section('titulo', 'Movimentações')

@section('movimentacoes', 'active')

@section('breadcrumb')
    Home / Movimentações
@endsection

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
            <tr>
                <td>1</td>
                <td>Computador</td>
                <td>Entrada</td>
                <td>Depósito 1</td>
                <td>1</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Computador DRF</td>
                <td>Entrada</td>
                <td>Depósito 2</td>
                <td>10</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Nootebook</td>
                <td>Entrada</td>
                <td>Depósito 1</td>
                <td>5</td>
            </tr>
        </tbody>
    </table>
@endsection