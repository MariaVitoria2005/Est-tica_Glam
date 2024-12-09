@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Cancelar Serviço</h1>

    <p>Você está prestes a cancelar o serviço agendado: <strong>{{ $agendamento->tipo_servico }}</strong></p>
    <p>Valor do Serviço: R$ {{ number_format($agendamento->valor, 2, ',', '.') }}</p>
    
    <form action="{{ route('cancelamento.process', $agendamento->id) }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="percentagem">Percentagem de Cancelamento (%)</label>
        <input type="number" class="form-control" name="percentagem" value="10" step="0.01" min="0" max="100" required>
    </div>

    <div class="form-group">
        <label for="descricao">Descrição do Cancelamento</label>
        <textarea name="descricao" class="form-control" rows="4" required></textarea>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="confirm" value="1" id="confirm" required>
        <label class="form-check-label" for="confirm">
            Eu confirmo o cancelamento e aceito a taxa de cancelamento.
        </label>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger mt-3">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <button type="submit" class="btn btn-danger mt-3">Confirmar Cancelamento</button>
</form>
