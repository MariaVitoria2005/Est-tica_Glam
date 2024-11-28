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
        /* Estilo geral do corpo */
        body {
            font-family: 'Lora', serif;
            background-color: #f4f6f9; /* Fundo suave */
            color: #333;
            line-height: 1.6;
        }

        /* Estilo para o card de pagamento */
        #pagamento-form {
            border-radius: 15px; /* Bordas arredondadas para o card */
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1); /* Sombra suave */
            background-color: #ffffff; /* Fundo branco para destacar o card */
            padding: 30px;
        }

        #pagamento-form .card-header {
            background-color: #8e24aa; /* Cor de fundo elegante para o cabeçalho */
            color: #fff;
            font-size: 2rem;
            font-weight: bold;
            border-radius: 15px 15px 0 0;
            padding: 20px;
        }

        #pagamento-form .card-body {
            padding: 30px 20px;
        }

        /* Estilo do título */
        h1 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            /* Cor chique e elegante */
            margin-bottom: 20px;
            text-align: center;
        }

        /* Estilo para os labels e campos de entrada */
        .form-label {
            font-size: 1.1rem;
            font-weight: bold;
            color: #6a1b9a; /* Cor roxa para o texto do label */
        }

        /* Campo de seleção */
        .form-select {
            border-radius: 10px;
            border: 1px solid #ddd;
            padding: 12px;
            font-size: 1rem;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
        }

        .form-select:focus {
            border-color: #8e24aa; /* Cor ao focar no campo */
            box-shadow: 0 0 8px rgba(142, 36, 170, 0.4); /* Sombras sutis */
            outline: none;
        }

        /* Campos de texto (input) */
        .form-control {
            border-radius: 10px;
            border: 1px solid #ddd;
            padding: 12px;
            font-size: 1rem;
            transition: all 0.3s ease-in-out;
        }

        .form-control:focus {
            border-color: #8e24aa; /* Cor ao focar no campo */
            box-shadow: 0 0 8px rgba(142, 36, 170, 0.4);
            outline: none;
        }

        /* Botão de Submissão */
        .btn-primary {
            background-color: #8e24aa;
            border: none;
            color: #fff;
            padding: 12px 20px;
            font-size: 1.2rem;
            border-radius: 10px;
            width: 100%;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #6a1b9a; /* Cor mais escura ao passar o mouse */
            cursor: pointer;
        }

        /* Botão de voltar */
        .btn-voltar {
            background-color: #34495e;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 1rem;
            border-radius: 10px;
            margin-top: 20px;
            width: 100%;
            transition: all 0.3s ease;
        }

        .btn-voltar:hover {
            background-color: #2c3e50;
            cursor: pointer;
        }

        .btn-voltar i {
            margin-right: 10px; /* Adiciona espaço entre o ícone e o texto */
        }

        /* Estilo para a seleção de serviço e método de pagamento */
        .mb-4 {
            margin-bottom: 1.5rem;
        }

        /* Estilo de animação para a transição suave no hover do campo */
        .form-select, .form-control {
            transition: all 0.3s ease-in-out;
        }

        /* Respostas de foco para melhorar a UX */
        .form-control:focus, .form-select:focus {
            border-color: #6a1b9a;
            box-shadow: 0 0 8px rgba(142, 36, 170, 0.4);
        }

        /* Adicionando transições e animações nos campos de texto */
        input, select {
            transition: border 0.3s ease, box-shadow 0.3s ease;
        }

        /* Estilo do Card em telas menores */
        @media (max-width: 768px) {
            #pagamento-form {
                padding: 15px;
            }

            h1 {
                font-size: 1.8rem;
            }
        }

    </style>
</head>
<body>

    <!-- Card para o Formulário de Pagamento -->
    <div class="container mt-5">
        <div class="card shadow-sm" id="pagamento-form">
            <div class="card-header text-center">
                <h1>Pagamento</h1>
            </div>
            <div class="card-body">
                <!-- Formulário de Pagamento -->
                <form method="POST" action="{{ route('pagamento.store') }}" class="mb-4">
                    @csrf

                    <!-- Seleção de Serviço -->
                    <div class="mb-4">
                        <label for="servico" class="form-label">Escolha o Serviço</label>
                        <select name="servico_id" class="form-select shadow-sm" required>
                            <option value="">Selecione um Serviço</option>
                            @foreach($servicos as $servico)
                                <option value="{{ $servico->id }}">
                                    {{ $servico->tipo_servico }} - R$ {{ number_format($servico->valor, 2, ',', '.') }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Seleção de Forma de Pagamento -->
                    <div class="mb-4">
                        <label for="metodo_pagamento" class="form-label">Forma de Pagamento</label>
                        <select name="metodo_pagamento" class="form-select shadow-sm" required>
                            <option value="">Selecione a Forma de Pagamento</option>
                            <option value="cartao">Cartão de Crédito</option>
                            <option value="cartao">Cartão de Débito</option>
                            <option value="dinheiro">Dinheiro</option>
                            <option value="pix">Pix</option>
                        </select>
                    </div>

                    <!-- Dados do Cliente -->
                    <div class="mb-4">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control shadow-sm" id="nome" name="nome" required>
                    </div>

                    <!-- Botão de Submissão -->
                    <button type="submit" class="btn btn-primary w-100 shadow-sm">
                        <i class="fas fa-credit-card"></i> Pagar
                    </button>
                </form>

                <!-- Botão para voltar à página principal com ícone -->
                <button class="btn btn-secondary btn-voltar" onclick="window.location.href='{{ url('/') }}';">
                    <i class="fas fa-arrow-left"></i> Voltar
                </button>
            </div>
        </div>
    </div>

    <!-- Scripts Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
