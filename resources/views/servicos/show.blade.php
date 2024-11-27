<!-- resources/views/servicos/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $servico->tipo_servico }}</h1>
        <p><strong>Descrição:</strong> {{ $servico->descricao }}</p>
        <p><strong>Preço:</strong> R$ {{ number_format($servico->preco, 2, ',', '.') }}</p>
        <p><strong>Status:</strong> {{ $servico->status }}</p>
    </div>
@endsection




