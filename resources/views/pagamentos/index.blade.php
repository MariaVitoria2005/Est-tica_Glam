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
      /* Estilos personalizados para o formulário de pagamento */
      #pagamento-form {
          max-width: 500px;
          margin: 0 auto; /* Centraliza o formulário */
          padding: 20px;
          background-color: #f8f9fa; /* Fundo claro */
          border-radius: 10px; /* Bordas arredondadas */
          box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Sombra suave */
      }

      /* Título do formulário */
      #pagamento-form h1 {
          font-size: 2rem;
          color: #343a40;
      }

      /* Estilizando os campos de input */
      #pagamento-form input, #pagamento-form select {
          border-radius: 8px;
          border: 1px solid #ced4da;
          padding: 10px;
          font-size: 1rem;
      }

      /* Estilizando os botões */
      #pagamento-form button {
          background-color: #007bff;
          border: none;
          padding: 12px;
          font-size: 1.1rem;
          color: #fff;
          border-radius: 8px;
          transition: background-color 0.3s;
      }

      #pagamento-form button:hover {
          background-color: #0056b3; /* Cor de fundo mais escura no hover */
      }

      /* Botão de Voltar */
      #pagamento-form .btn-secondary {
          background-color: #6c757d;
          color: white;
          font-size: 1rem;
      }

      #pagamento-form .btn-secondary:hover {
          background-color: #5a6268;
      }
      /* Estilo para o botão Voltar */
.btn-voltar {
    background-color: #6c757d; /* Cor de fundo cinza */
    color: #fff; /* Texto branco */
    padding: 10px 20px; /* Espaçamento interno */
    border-radius: 5px; /* Bordas arredondadas */
    font-size: 1rem; /* Tamanho de fonte */
    transition: background-color 0.3s, transform 0.2s; /* Efeito de transição */
}

.btn-voltar:hover {
    background-color: #5a6268; /* Cor de fundo mais escura no hover */
    transform: scale(1.05); /* Efeito de zoom */
}

.btn-voltar i {
    margin-right: 8px; /* Espaço entre o ícone e o texto */
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
