<!-- resources/views/historico/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Histórico de Agendamentos</h2>

    @if($agendamentos->isEmpty())
        <p>Você não tem agendamentos registrados.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Serviço</th>
                    <th>Data do Agendamento</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($agendamentos as $agendamento)
                    <tr>
                        <td>{{ $agendamento->servico }}</td>
                        <td>{{ $agendamento->data_agendamento->format('d/m/Y H:i') }}</td>
                        <td>{{ ucfirst($agendamento->status) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection

