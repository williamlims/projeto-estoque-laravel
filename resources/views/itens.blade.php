@extends('base')

@section('titulo', 'Itens')

@section('itens', 'active')

@section('breadcrumb', 'Home / Itens')

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
            @foreach ($produtos as $prod)
                <tr>
                    <td>{{ $prod->id }}</td>
                    <td>{{ $prod->produto }}</td>
                    <td>{{ $prod->id_estoque }}</td>
                    <td>{{ $prod->quantidade }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection