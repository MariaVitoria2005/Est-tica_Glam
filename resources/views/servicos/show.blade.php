<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Serviço</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
        }
        .container {
            margin-top: 50px;
        }
        h1 {
            color: #007bff;
        }
        .btn-back {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="text-center">{{ $servico->nome }}</h1>

    <p><strong>Descrição:</strong> {{ $servico->descricao }}</p>
    <p><strong>Valor:</strong> R$ {{ number_format($servico->valor, 2, ',', '.') }}</p>
    <p><strong>Status:</strong> {{ $servico->status }}</p>

    <a href="{{ route('servicos.index') }}" class="btn btn-secondary btn-back">Voltar para a lista</a>
</div>

<!-- Scripts Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
