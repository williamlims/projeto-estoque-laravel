@extends('base')

@section('titulo', 'Dashboard')

@section('dashboard', 'active')

@section('breadcrumb', 'Home / Dashboard')

@section('conteudo')
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <br>
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Custo do Estoque
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">R${{ $custo }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-dollar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Valor do Estoque
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">R${{ $preco }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-dollar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Quantidade
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $quant }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-list-ol fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Transferências
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $moviments }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-exchange fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @php 
        $item[0][0] = "----------";
        $item[0][1] = 0;

        $item[1][0] = "----------";
        $item[1][1] = 0;

        $item[2][0] = "----------";
        $item[2][1] = 0;

        if(isset($itemMax[0]->produto) && isset($itemMax[0]->custo)){
            $item[0][0] = $itemMax[0]->produto;
            $item[0][1] = $itemMax[0]->custo;
        }

        if(isset($itemMax[1]->produto) && isset($itemMax[1]->custo)){
            $item[1][0] = $itemMax[1]->produto;
            $item[1][1] = $itemMax[1]->custo;
        }

        if(isset($itemMax[2]->produto) && isset($itemMax[2]->custo)){
            $item[2][0] = $itemMax[2]->produto;
            $item[2][1] = $itemMax[2]->custo;
        }

    @endphp
    <div class="row">
        <div class="mb-3 mx-2 col">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Itens mais caros</h6>
                </div>
                <div class="card-body">
                    <h4 class="small font-weight-bold">{{ $item[0][0] }} <span
                            class="float-right">R$@php echo number_format($item[0][1],2,",","."); @endphp</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{ $percentual[0] }}%"
                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4 class="small font-weight-bold">{{ $item[1][0] }} <span
                            class="float-right">R$@php echo number_format($item[1][1],2,",","."); @endphp</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: {{ $percentual[1] }}%"
                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4 class="small font-weight-bold">{{ $item[2][0] }} <span
                            class="float-right">R$@php echo number_format($item[2][1],2,",","."); @endphp</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar" role="progressbar" style="width: {{ $percentual[2] }}%"
                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
@endsection