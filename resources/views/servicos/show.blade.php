<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Serviço</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333;
        }

        .container {
            margin-top: 50px;
            max-width: 1000px;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: none;
            margin-bottom: 20px;
        }

        .card-header {
            background-color: #007bff;
            color: white;
            border-radius: 15px 15px 0 0;
            text-align: center;
        }

        .card-body {
            background-color: white;
            padding: 20px;
        }

        .card-body p {
            font-size: 16px;
            line-height: 1.6;
        }

        .btn-back {
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            text-decoration: none;
        }

        .btn-back:hover {
            background-color: #0056b3;
            text-decoration: none;
        }

        .btn-back:focus {
            outline: none;
        }

        .service-value {
            font-size: 20px;
            font-weight: bold;
            color: #28a745;
        }

        .service-status {
            font-size: 18px;
            font-weight: bold;
            color: #ff4500;
        }

        /* Estilo dos Botões de Ação */
        .btn-custom {
            width: 100%;
            font-size: 16px;
            padding: 12px;
            margin-top: 10px;
            border-radius: 8px;
        }

        .btn-edit {
            background-color: #ffc107;
            color: white;
        }

        .btn-edit:hover {
            background-color: #e0a800;
        }

        .btn-delete {
            background-color: #dc3545;
            color: white;
        }

        .btn-delete:hover {
            background-color: #c82333;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .container {
                margin-top: 30px;
                padding-left: 10px;
                padding-right: 10px;
            }

            .card {
                margin-bottom: 15px;
            }

            .card-header h4 {
                font-size: 18px;
            }

            .service-value {
                font-size: 18px;
            }

            .service-status {
                font-size: 16px;
            }

            .btn-custom {
                width: 100%;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Detalhes do Serviço -->
    <div class="row">
        <!-- Card do Tipo de Serviço -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4>{{ $servico->tipo_servico }}</h4>
                </div>
                <div class="card-body">
                    <p><strong>Descrição:</strong> {{ $servico->descricao }}</p>
                    <p><strong>Valor:</strong> <span class="service-value">R$ {{ number_format($servico->valor, 2, ',', '.') }}</span></p>
                    <p><strong>Status:</strong> <span class="service-status">{{ $servico->status }}</span></p>
                </div>
            </div>
        </div>

        <!-- Card do Status ou Outras Informações -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4>Detalhes Adicionais</h4>
                </div>
                <div class="card-body">
                    <p><strong>Status:</strong> <span class="service-status">{{ $servico->status }}</span></p>
                    <p><strong>Data de Criação:</strong> {{ $servico->created_at }}</p>
                </div>
            </div>
        </div>

        <!-- Card de Ações -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4>Ações</h4>
                </div>
                <div class="card-body">
                    <a href="#" class="btn btn-custom btn-edit">Editar</a>
                    <a href="#" class="btn btn-custom btn-delete">Excluir</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Botão de Voltar -->
    <button class="btn btn-secondary btn-voltar" onclick="window.location.href='{{ url('/') }}';">
            <i class="fas fa-arrow-left"></i> Voltar
        </button>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


