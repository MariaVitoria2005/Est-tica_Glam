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

        <div class="row mt-4">
            @foreach ($servicosRelacionados as $servicoRelacionado)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <!-- A imagem será centralizada e cobrindo toda a área do card -->
                        <div class="card-header text-center">
                            <h5>{{ $servicoRelacionado->nome }}</h5> <!-- Nome centralizado -->
                        </div>
                        
                        <div class="card-body">
                            <!-- Imagem do serviço -->
                            <img src="{{ asset('storage/' . $servicoRelacionado->foto) }}" class="card-img-top" alt="{{ $servicoRelacionado->nome }}">
                            
                            <!-- Descrição e valor -->
                            <p><strong>Descrição:</strong> {{ Str::limit($servicoRelacionado->descricao, 100) }}</p>
                            <p><strong>Valor:</strong> R$ {{ number_format($servicoRelacionado->valor, 2, ',', '.') }}</p>

                            <!-- Botão para agendar -->
                            <div class="d-flex justify-content-between align-items-center">
                               

                                <!-- Ver detalhes (abre modal) -->
                                <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalDetalhes{{ $servicoRelacionado->id }}">
                                    Ver Detalhes
                                </button>
                                <a href="{{ route('novo_agendamento') }}" class="btn btn-outline-primary">
                                    <i class="fas fa-calendar-check"></i> Agendar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal para exibir detalhes do serviço -->
                <div class="modal fade" id="modalDetalhes{{ $servicoRelacionado->id }}" tabindex="-1" aria-labelledby="modalDetalhesLabel{{ $servicoRelacionado->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalDetalhesLabel{{ $servicoRelacionado->id }}">{{ $servicoRelacionado->nome }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Imagem do serviço em tamanho maior -->
                                <img src="{{ asset('storage/' . $servicoRelacionado->foto) }}" class="img-fluid mb-3" alt="{{ $servicoRelacionado->nome }}">

                                <!-- Descrição completa -->
                                <p><strong>Descrição Completa:</strong></p>
                                <p>{{ $servicoRelacionado->descricao }}</p>

                                <!-- Valor do serviço -->
                                <p><strong>Valor:</strong> R$ {{ number_format($servicoRelacionado->valor, 2, ',', '.') }}</p>

                                <!-- Botão para agendar -->
                                 
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


