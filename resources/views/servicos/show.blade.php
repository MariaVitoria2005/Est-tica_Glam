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
            max-width: 800px;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: none;
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

        @media (max-width: 768px) {
            .container {
                margin-top: 30px;
            }

            .card {
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Detalhes do Serviço -->
    <div class="card">
        <div class="card-header">
            <h4>{{ $servico->tipo_servico }}</h4>
        </div>
        <div class="card-body">
            <p><strong>Descrição:</strong> {{ $servico->descricao }}</p>
            <p><strong>Valor:</strong> <span class="service-value">R$ {{ number_format($servico->valor, 2, ',', '.') }}</span></p>
            <p>unhas portiças</p>
            <p><strong>Status:</strong> <span class="service-status">{{ $servico->status }}</span></p>

            
          
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

