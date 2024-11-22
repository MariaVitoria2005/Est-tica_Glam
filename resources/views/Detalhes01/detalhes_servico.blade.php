<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Serviço</title>
    <!-- Link para o Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Garantir que os cards tenham o mesmo tamanho */
        .card {
            height: 100%; /* Faz com que todos os cards tenham a mesma altura */
            display: flex;
            flex-direction: column; /* Flexbox para que o conteúdo fique distribuído corretamente */
        }

        .card-body {
            flex-grow: 1; /* Faz o corpo do card crescer para ocupar o espaço restante */
        }

        .card-header {
            background-color: #f8f9fa; /* Cor de fundo do cabeçalho do card */
            font-weight: bold;
            text-align: center; /* Centraliza o texto horizontalmente */
            display: flex; /* Flexbox para centralizar o conteúdo */
            justify-content: center; /* Alinha o conteúdo no centro horizontalmente */
            align-items: center; /* Alinha o conteúdo no centro verticalmente */
            height: 100px; /* Ajuste a altura do cabeçalho do card */
        }

        /* Garantir que a imagem ocupe o topo do card e fique bem alinhada */
        .card-img-top {
            width: 100%; /* A imagem vai ocupar toda a largura do card */
            height: 300px; /* Definir uma altura fixa para todas as imagens */
            object-fit: cover; /* Faz a imagem cobrir a área sem distorcer */
        }

        /* Ajustar o footer do card */
        .card-footer {
            background-color: #f8f9fa;
        }

        /* Para garantir que os cards fiquem iguais em altura, com a imagem cobrindo o topo */
        .card {
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1); /* Sombra suave para destacar o card */
        }

        /* Espaçamento entre os cards */
        .card .card-body {
            padding: 1.25rem;
        }

        .card .card-header {
            padding: 0.75rem 1.25rem;
        }

        .col-md-4 {
            display: flex;
            justify-content: center; /* Alinha os cards ao centro */
        }

        .btn-voltar {
            margin-top: 20px; /* Margem superior para o botão de voltar */
            margin-bottom: 20px; /* Margem inferior para o botão */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <button class="btn btn-secondary btn-voltar" onclick="window.location.href='{{ url('/') }}';">
            <i class="fas fa-arrow-left"></i> Voltar
        </button>

        <div class="row">
            @foreach ($servicosRelacionados as $servicoRelacionado)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <!-- A imagem será centralizada e cobrindo toda a área do card -->
                        <div class="card-header">
                            <h5>{{ $servicoRelacionado->nome }}</h5> <!-- Nome centralizado -->
                        </div>
                        
                        <div class="card-body">
                            <img src="{{ asset('storage/' . $servicoRelacionado->foto) }}" class="card-img-top" alt="{{ $servicoRelacionado->nome }}">
                            <p><strong>Descrição:</strong> {{ $servicoRelacionado->descricao }}</p>
                            <p><strong>Valor:</strong> R$ {{ number_format($servicoRelacionado->valor, 2, ',', '.') }}</p>
                            <div class="d-flex justify-content-between">
                            
                        </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>


    </div>

    <!-- Link para o script do Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

