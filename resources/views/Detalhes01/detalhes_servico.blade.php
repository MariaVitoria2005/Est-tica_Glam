<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Serviço</title>
    <!-- Link para o Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <!-- Card do Serviço Principal -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>{{ $servico->nome }}</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Descrição:</strong> {{ $servico->descricao }}</p>
                        <p><strong>Valor:</strong> R$ {{ number_format($servico->valor, 2, ',', '.') }}</p>
                        <p><strong>Status:</strong> {{ $servico->status }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cards de Serviços Relacionados -->
        <h3 class="mt-5">Outros Serviços de Manicure</h3>
        <div class="row">
            @foreach ($servicosRelacionados as $servicoRelacionado)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h5>{{ $servicoRelacionado->nome }}</h5>
                        </div>
                        <div class="card-body">
                            <p><strong>Descrição:</strong> {{ $servicoRelacionado->descricao }}</p>
                            <p><strong>Valor:</strong> R$ {{ number_format($servicoRelacionado->valor, 2, ',', '.') }}</p>
                            <p><strong>Status:</strong> {{ $servicoRelacionado->status }}</p>
                            <a href="{{ route('detalhes_servico', ['id' => $servicoRelacionado->id]) }}" class="btn btn-primary">Ver Detalhes</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Script do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


