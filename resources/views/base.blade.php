<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo') | Controle de Estoque</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> 
    <style type="text/css">
        body {
            background-color: #eee;
        }

        .nav-link:hover {
            background-color: #525252 !important;
        }

        .nav-link .fa {
            transition:  all 1s;
        }

        .nav-link:hover .fa {
            transform:  rotate(360deg);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md bg-primary navbar-dark shadow">
        <a class="navbar-brand ml-5 px-3" href="#"> Estoque <i class="fa fa-angellist" aria-hidden="true"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fa fa-sign-out" aria-hidden="true"></i> Sair</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto px-0">
                <div id="sidebar" class="collapse collapse-horizontal show border-end">
                    <div class="d-flex flex-column vh-100 flex-shrink-0 p-3 text-white bg-dark" style="width: 250px;">
                        <ul class="nav nav-pills flex-column mb-auto">
                            <li class="nav-item"><a href="{{ url('/')}}" class="nav-link text-white @yield('home') " aria-current="page"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li><a href="{{ url('/dashboard')}}" class="nav-link text-white @yield('dashboard')"><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</a></li>
                            <li><a href="{{ url('/deposito')}}" class="nav-link text-white @yield('deposito')"><i class="fa fa-pencil-square" aria-hidden="true"></i> Cadastrar Depósito</a></li>
                            <li><a href="{{ url('/item')}}" class="nav-link text-white @yield('item')"><i class="fa fa-dropbox" aria-hidden="true"></i> Cadastrar Item</a></li>
                            <li><a href="{{ url('/transferencia')}}" class="nav-link text-white @yield('transferencia')"><i class="fa fa-exchange" aria-hidden="true"></i> Transferência</a></li>
                            <li><a href="{{ url('/itens')}}" class="nav-link text-white @yield('itens')"><i class="fa fa-list-alt" aria-hidden="true"></i> Itens</a></li>
                            <li><a href="{{ url('/movimentacoes')}}" class="nav-link text-white @yield('movimentacoes')"><i class="fa fa-window-restore" aria-hidden="true"></i> Movimentações</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <main class="col px-3 w-100 mx-2 ps-md-2 pt-2">
                <div class="row">
                    <span class="p-3 w-100 py-2 bg-light bg-gradient text-muted">@yield('breadcrumb')</span>
                    <div class="col w-100 mt-2 px-3 text-muted">
                        @section('conteudo')

                        @show
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>