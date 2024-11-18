<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Índice de Pagamentos</title>
    <!-- Incluir o link do Font Awesome para os ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
        }
        .container {
            margin-top: 50px;
        }
        h1 {
            color: #007bff;
        }
        .list-group {
            margin-top: 30px;
        }
        .list-group-item {
            border-radius: 5px;
        }
        .badge {
            font-size: 12px;
        }
        .pagination {
            justify-content: center;
            margin-top: 20px;
        }

        /* Estilização personalizada para o botão de voltar */
        .btn-back {
            margin-top: 20px;
            background-color: #007bff;  /* Cor azul */
            color: white;               /* Texto branco */
            border: none;               /* Remove bordas */
            padding: 10px 20px;         /* Tamanho do botão */
            font-size: 16px;            /* Tamanho da fonte */
            border-radius: 25px;       /* Bordas arredondadas */
            transition: background-color 0.3s ease, transform 0.3s ease; /* Transição suave */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);  /* Sombra leve */
        }

        .btn-back:hover {
            background-color: #0056b3; /* Azul escuro ao passar o mouse */
            transform: translateY(-2px); /* Levita o botão ao passar o mouse */
        }

        .btn-back:active {
            transform: translateY(1px);  /* Botão "afunda" um pouco quando pressionado */
        }

        /* Ícone dentro do botão */
        .btn-back i {
            margin-right: 8px; /* Distância entre o ícone e o texto */
        }
    </style>
</head>
<body>
  
<div class="container">
    <h1 class="text-center">Índice de Pagamentos</h1>

    

    <!-- Formulário de Filtro -->
    <form method="GET" action="{{ route('pagamentos_index') }}" class="mb-3">
        <div class="row">
            <div class="col-md-6">
                <select name="status" class="form-select">
                    <option value="">Selecione o Status</option>
                    <option value="Pago" {{ request('status') == 'Pago' ? 'selected' : '' }}>Pago</option>
                    <option value="concluido" {{ request('status') == 'concluido' ? 'selected' : '' }}>Concluído</option>
                    <option value="cancelado" {{ request('status') == 'cancelado' ? 'selected' : '' }}>Cancelado</option>
                </select>
            </div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary w-100">Filtrar</button>
            </div>
        </div>
    </form>

    <!-- Listagem de Pagamentos -->
    @foreach($pagamentos as $pagamento)
        <div class="list-group">
            <a href="{{ route('pagamentos.show', $pagamento->id) }}" class="list-group-item list-group-item-action">
                <strong>{{ $pagamento->status }}</strong> - R$ {{ number_format($pagamento->valor, 2, ',', '.') }} <br>
                @if($pagamento->created_at)
                    <small>Data de pagamento: {{ $pagamento->created_at->format('d/m/Y H:i') }}</small>
                @else
                    <small>Data de pagamento: Não disponível</small>
                @endif
            </a>
    
        </div>
    
    @endforeach
        <!-- Botão para voltar à página principal com ícone -->
        <button class="btn btn-back" onclick="window.location.href='{{ url('/') }}';">
            <i class="fas fa-arrow-left"></i> Voltar
        </button>
        
    <!-- Paginação -->
    <div class="pagination justify-content-center">
        {{ $pagamentos->appends(['status' => request('status')])->links() }}
    </div>
</div>

<!-- Scripts Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>





