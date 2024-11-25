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
    <h1 class="text-center">Agendamento e Pagamento</h1>

    <!-- Formulário de Agendamento e Pagamento -->
    <form method="POST" action="{{ route('agendamento.store') }}" class="mb-3">
        @csrf

        <!-- Seleção de Serviço -->
        <div class="mb-3">
            <label for="servico" class="form-label">Escolha o Serviço</label>
            <select name="servico_id" class="form-select" required>
                <option value="">Selecione um Serviço</option>
                @foreach($servicos as $servico)
                    <option value="{{ $servico->id }}">{{ $servico->tipo_servico }} - R$ {{ number_format($servico->valor, 2, ',', '.') }}</option>
                @endforeach
            </select>
        </div>

        <!-- Seleção de Forma de Pagamento -->
        <div class="mb-3">
            <label for="metodo_pagamento" class="form-label">Forma de Pagamento</label>
            <select name="metodo_pagamento" class="form-select" required>
                <option value="">Selecione a Forma de Pagamento</option>
                <option value="cartao">Cartão de Crédito</option>
                <option value="cartao">Cartão de Débito</option>
                <option value="dinehrio">Dinheiro</option>
                <option value="pix">Pix</option>
            </select>
        </div>

        <!-- Dados do Cliente -->
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>


        <div class="mb-3">
            <label for="data" class="form-label">Data do Agendamento</label>
            <input type="date" class="form-control" id="data" name="data" required>
        </div>

        <div class="mb-3">
            <label for="hora" class="form-label">Hora do Agendamento</label>
            <input type="time" class="form-control" id="hora" name="hora" required>
        </div>

        <!-- Botão de Submissão -->
        <button type="submit" class="btn btn-primary w-100">Agendar e Pagar</button>
    </form>

    <!-- Botão para voltar à página principal com ícone -->
    <button class="btn btn-secondary mt-3" onclick="window.location.href='{{ url('/') }}';">
        <i class="fas fa-arrow-left"></i> Voltar
    </button>
</div>

<!-- Paginação, se necessário -->
<div class="pagination justify-content-center">
    {{ $pagamentos->links() }}
</div>

<!-- Scripts Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
