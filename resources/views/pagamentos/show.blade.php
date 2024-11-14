

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Pagamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <h1>Detalhes do Pagamento</h1>

        <div class="card">
            <div class="card-header">
                Pagamento #{{ $pagamento->id }}
            </div>
            <div class="card-body">
                <h5 class="card-title">Status: {{ $pagamento->status }}</h5>
                <p><strong>Descrição:</strong> {{ $pagamento->descricao }}</p>
                <p><strong>Data:</strong> {{ $pagamento->created_at->format('d/m/Y H:i') }}</p>
                <p><strong>Valor:</strong> R$ {{ number_format($pagamento->valor, 2, ',', '.') }}</p>
            </div>
        </div>
        
        <a href="{{ route('pagamentos.index') }}" class="btn btn-primary mt-3">Voltar para o Índice</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
