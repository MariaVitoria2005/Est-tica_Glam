<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Índice de Pagamentos</title>
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
    </style>
</head>
<body>
    @extends('layouts.app') <!-- Ou o layout principal que você usa -->

    @section('content')
        <div class="container">
            <h1 class="text-center">Índice de Pagamentos</h1>

            <div class="list-group">
                @foreach($pagamentos as $pagamento)
                    <a href="{{ route('pagamentos.show', $pagamento->id) }}" class="list-group-item list-group-item-action">
                        <strong>{{ $pagamento->status }}</strong> - {{ $pagamento->valor }} <br>
                        @if($pagamento->created_at)
                            data_pagamento: {{ $pagamento->created_at->format('d/m/Y H:i') }}
                        @else
                            data_pagamento: Não disponível
                        @endif
                    </a>
                @endforeach
            </div>
        </div>
    @endsection

    <!-- Scripts Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

