<!-- resources/views/servicos/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Serviços Disponíveis</h1>
        <div class="row">
            @foreach($servicos as $servico)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/'.$servico->foto) }}" class="card-img-top" alt="{{ $servico->tipo_servico }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $servico->tipo_servico }}</h5>
                            <p><strong>Descrição:</strong> {{ $servico->descricao }}</p>
                            <p><strong>Preço:</strong> R$ {{ number_format($servico->preco, 2, ',', '.') }}</p>
                            <!-- Botão para Cancelar Serviço -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#cancelamentoModal" data-id="{{ $servico->id }}">
                                Cancelar Serviço
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

