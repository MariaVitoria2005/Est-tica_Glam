<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Pagamento</title>
    
    <!-- Incluindo o Bootstrap 5 para estilo padrão -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos personalizados (caso tenha algo específico que queira aplicar) -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #007bff;
            font-size: 2.5rem;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: white;
            border: none;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }

        .card-title {
            color: #007bff;
            font-size: 1.2rem;
        }

        .card-text {
            font-size: 1rem;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Título Principal -->
        <h1 class="text-center mb-4">Detalhes do Pagamento</h1>

        <!-- Cartão de Detalhes -->
        <div class="card">
            <div class="card-body">
                <!-- Status do Pagamento -->
                <h5 class="card-title">Status do Pagamento</h5>
                <p class="card-text"><strong>Status:</strong> {{ $pagamento->status }}</p>
                
                <!-- Valor do Pagamento -->
                <h5 class="card-title">Detalhes Financeiros</h5>
                <p class="card-text"><strong>Valor:</strong> R$ {{ number_format($pagamento->valor, 2, ',', '.') }}</p>

                <!-- Data do Pagamento -->
                <h5 class="card-title">Informações do Pagamento</h5>
                <p class="card-text"><strong>Data do Pagamento:</strong> 
                    {{ $pagamento->created_at ? $pagamento->created_at->format('d/m/Y H:i') : 'Não disponível' }}
                </p>

                <!-- Método de Pagamento -->
                <p class="card-text"><strong>Método de Pagamento:</strong> {{ $pagamento->metodo_pagamento }}</p>

                <!-- Botão para Voltar à Lista -->
                <a href="{{ route('pagamentos_index') }}" class="btn btn-secondary">Voltar para a lista</a>
            </div>
        </div>
    </div>

    <!-- Incluindo o JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>








