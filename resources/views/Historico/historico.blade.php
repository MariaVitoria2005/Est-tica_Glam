<!-- resources/views/historico.blade.php -->
@extends('layouts.app')

@section('content')
    <section id="historico" class="container mt-5">
        <h2>Histórico de Agendamentos</h2>
        <a href="{{ route('historico') }}"><i class="fas fa-history"></i> Histórico de Agendamento</a>

        @if($agendamentos->isEmpty())
            <p>Você ainda não fez nenhum agendamento.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Serviço</th>
                        <th>Data e Hora</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($agendamentos as $agendamento)
                        <tr>
                            <td>{{ $agendamento->servico->tipo_servico }}</td>
                            <td>{{ $agendamento->data_hora->format('d/m/Y H:i') }}</td>
                            <td>{{ ucfirst($agendamento->status) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </section>
@endsection
