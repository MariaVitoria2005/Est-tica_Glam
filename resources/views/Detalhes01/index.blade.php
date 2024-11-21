<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviços</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Todos os Serviços</h1>
        <div class="row">
            @foreach ($servicos as $servico)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5>{{ $servico->nome }}</h5>
                        </div>
                        <div class="card-body">
                            <p><strong>Descrição:</strong> {{ $servico->descricao }}</p>
                            <p><strong>Valor:</strong> R$ {{ number_format($servico->valor, 2, ',', '.') }}</p>
                            <p><strong>Status:</strong> {{ $servico->status }}</p>
                            <a href="{{ route('detalhes_servico', ['id' => $servico->id]) }}" class="btn btn-primary">Ver Detalhes</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
