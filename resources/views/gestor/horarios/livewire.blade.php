@extends('layouts.gestor.gestor')

@section('title', 'Horário Configurar Disponibilidade - ')
@section('header-title', 'Configurar Horário de Disponibilidade de Pedidos')

@section('content')
    <div class="card-body">
        {{-- Componente Livewire que contém o formulário --}}
        <livewire:gestor.horario :id="$id">
    </div>
@endsection