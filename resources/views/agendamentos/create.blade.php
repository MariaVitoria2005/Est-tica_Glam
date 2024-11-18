<form action="{{ route('agendamentos.store') }}" method="POST">
    @csrf
    <label for="cliente_id">Cliente</label>
    <select name="cliente_id" required>
        @foreach ($clientes as $cliente)
            <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
        @endforeach
    </select>

    <label for="profissional_id">Profissional</label>
    <select name="profissional_id" required>
        @foreach ($profissionais as $profissional)
            <option value="{{ $profissional->id }}">{{ $profissional->nome }}</option>
        @endforeach
    </select>

    <label for="serv
