@extends('layouts.gestor.gestor')

@section('title', 'Pedidos - ')
@section('header-title', 'Pedidos')

@section('content')
    <div class="card-body">

        <!----------------- Busca ----------------->
        <form class="form-row align-items-center mt-2 mb-4" accept-charset="UTF-8" method="get"
              action="{{ route('gestor.pedidos.index') }}">
            <div class="col-auto">
                <label for="id">ID</label>
                <input id="id" name="id" placeholder="ID" class="form-control" type="text"
                       value="{{ request()->query('id') }}">
            </div>
            <div class="col-auto">
                <label for="dataDe">Pedido De</label>
                <input id="dataDe" name="finalizadoEmDe" class="form-control" type="date"
                       value="{{ request()->query('finalizadoEmDe') }}">
            </div>
            <div class="col-auto">
                <label for="dataAte">Pedido Até</label>
                <input id="dataAte" name="finalizadoEmAte" class="form-control" type="date"
                       value="{{ request()->query('finalizadoEmAte') }}">
            </div>
            <div class="col-auto" style="margin-top: 30px !important">
                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
            </div>
            <div class="col-auto" style="margin-top: 30px !important">
                <a class="btn btn-default" href="{{ route('gestor.pedidos.index') }}">Limpar</a>
            </div>
        </form>
        <!---------------- / Busca ---------------->

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>Produtos</th>
                    <th>Tipo de bebida</th>
                    <th>Tipo de evento</th>
                    <th>Realizado em</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pedidos as $pedido)
                    <tr>
                        <td class="text-center">{{ $pedido->id }}</td>

                   <td>
                    @if($pedido->cliente)
                        {{-- Link para o componente Livewire de edição --}}
                        <a href="{{ route('gestor.usuario', $pedido->cliente->id) }}" class="font-weight-bold">
                            <i class="fas fa-external-link-alt fa-sm"></i> {{ $pedido->cliente->name }}
                        </a>
                    @else
                        <span class="text-muted">Visitante</span>
                    @endif  
                </td>
                        <td>
                            <div data-toggle="modal" data-target="#pedido{{ $pedido->id }}Modal"
                                 style="text-align: center">
                                <i class="fas fa-eye"></i> Visualizar
                            </div>
                        </td>
                    
                        <td>{{ $pedido->tipo_bebida }}</td>
               

                        <td>
                            {{ $pedido->formaEntrega ? $pedido->formaEntrega->nome : '' }}
                        </td>

                
                        <td>
                            {{ $pedido->finalizado_em->format('d/m/Y H:i') }}
                        </td>
                        <!-- / Ações -->
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="card-footer clearfix">
   {{ $pedidos->appends(request()->all())->links() }}
    </div>
@endsection

@section('script')
    @foreach($pedidos as $pedido)
        <livewire:gestor.pedido-detalhe-txt :pedido="$pedido">
    @endforeach
@endsection
