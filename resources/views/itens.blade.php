@extends('base')

@section('titulo', 'Itens')

@section('itens', 'active')

@section('breadcrumb')
    Home / Itens
@endsection

@section('conteudo')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>ITEM</th>
                <th>DEPÓSITO</th>
                <th>QUANTIDADE</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Computador</td>
                <td>Depósito 1</td>
                <td>1</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Computador DRF</td>
                <td>Depósito 2</td>
                <td>10</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Nootebook</td>
                <td>Depósito 1</td>
                <td>5</td>
            </tr>
        </tbody>
    </table>
@endsection