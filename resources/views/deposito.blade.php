@extends('base')

@section('titulo', 'Cadastro de Depósito')

@section('deposito', 'active')

@section('breadcrumb')
    Home / Cadastrar Depósito
@endsection

@section('conteudo')
    <br>
    <form>
        <div class="mb-3">
            <label for="nome" class="form-label">Nome de Depósito</label>
            <input type="text" class="form-control" id="nome" name="nome">
        </div>
        <div class="mb-3">
            <label for="responsavel" class="form-label">Responsável</label>
            <input type="text" class="form-control" id="responsavel" name="responsavel">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select form-control" id="status" name="status">
                <option selected>-----------</option>
                <option value="Ativo">Ativo</option>
                <option value="Inativo">Inativo</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-lg"> Cadastrar </button>
    </form>
@endsection