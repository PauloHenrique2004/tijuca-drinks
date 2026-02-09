@extends('layouts.gestor.gestor')

@section('title', 'Clientes - ')
@section('header-title', 'Clientes')

@section('card-tools')
    <a class="btn btn-primary content animate__animated animate__flipInX" href="{{ route('gestor.usuario') }}">
        <i class="fas fa-plus" aria-hidden="true"></i> Cadastrar
    </a>
@endsection

@section('content')
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->name }}</td>
                        <td>{{ $usuario->email }}</td>

                        <!-- Ações -->
                        <td>
                            <a class="btn btn-sm btn-primary" href="{{ route('gestor.usuario', $usuario->id) }}">
                                <i class="fas fa-pencil-alt" aria-hidden="true"></i> Editar
                            </a>

                            <!-- Remover -->
                         {{-- Verifica se NÃO tem nenhum pedido com status 'concluido' --}}
                                @if($usuario->pedidos()->count() == 0)
                                    
                                    {{-- O BOTÃO SÓ APARECE SE A CONDIÇÃO ACIMA FOR VERDADEIRA --}}
                                    <a data-confirm="Tem certeza?" class="btn btn-sm btn-danger" rel="nofollow"
                                    data-method="delete" href="#"
                                    onclick="event.preventDefault(); if(confirm('Tem certeza que deseja excluir este cliente?')) { document.getElementById('delete-form-{{ $usuario->id }}').submit(); }">
                                        <i class="fas fa-trash" aria-hidden="true"></i> Excluir
                                    </a>

                                    {{-- FORMULÁRIO OCULTO --}}
                                    <form id="delete-form-{{ $usuario->id }}"
                                        action="{{ route('gestor.usuarios.destroy', $usuario->id) }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                        @method('delete')
                                    </form>

                                @else
                                    {{-- SE TIVER VENDA CONCLUÍDA, MOSTRA APENAS O AVISO --}}
                                    <span class="badge badge-secondary">Possui vendas concluídas</span>
                                @endif
                            <!-- / Remover -->
                        </td>
                        <!-- / Ações -->
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="card-footer clearfix">
        {{ $usuarios->links() }}
    </div>
@endsection
