<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Índice de Serviços</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1 class="text-center">Índice de Serviços</h1>

    <!-- Listagem de Serviços -->
    <div class="list-group">
        @foreach($servicos as $servico)
            <a href="{{ route('servicos.show', $servico->id) }}" class="list-group-item list-group-item-action">
                <strong>{{ $servico->nome }}</strong> - R$ {{ number_format($servico->valor, 2, ',', '.') }} <br>
                <small>{{ $servico->descricao }}</small>
            </a>
        @endforeach
    </div>

    <!-- Paginação -->
    <div class="pagination justify-content-center">
        {{ $servicos->links() }} <!-- Se você usar paginate() no controlador -->
    </div>
</div>
<a href="{{ route('servicos.index') }}" class="btn btn-secondary btn-back">Voltar para a lista</a>


<!-- Scripts Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

