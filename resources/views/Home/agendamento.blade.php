<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Agendamento</title>

    <!-- Incluindo FontAwesome para os ícones -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Incluindo o CSS do Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha1/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Estilo geral da página */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            margin: 0;
        }

        /* Estilo do cabeçalho */
        header {
            background-color: #007bff; /* Cor de fundo azul */
            color: white;
            padding: 20px 0; /* Espaçamento superior e inferior */
            text-align: center;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        /* Estilo do título dentro do cabeçalho */
        header h1 {
            margin: 0;
            font-size: 30px;
        }

        /* Para dar um pouco de espaçamento entre o conteúdo do formulário e o cabeçalho fixo */
        .form-container {
            margin-top: 120px; /* Ajuste o valor conforme necessário */
            width: 100%;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        h2 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        /* Estilos do formulário */
        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        input[type="date"],
        input[type="time"],
        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        .btn-voltar {
            background-color: #6c757d;
            color: white;
            font-size: 16px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            margin-bottom: 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn-voltar:hover {
            background-color: #5a6268;
        }

        /* Responsividade */
        @media (max-width: 600px) {
            header h1 {
                font-size: 24px;
            }

            .form-container {
                margin-top: 80px;
                padding: 15px;
            }

            form {
                padding: 20px;
            }

            h2 {
                font-size: 18px;
            }
        }

        .cabecalho {
            display: flex;
            justify-content: space-between;
        }

        .boasvindas {
            flex-grow: 1;
            text-align: center;
        }

        /* Estilo da imagem do serviço */
        .servico-imagem {
            margin-top: 20px;
            text-align: center;
        }

        .servico-imagem img {
            max-width: 100%;
            max-height: 200px;
            object-fit: contain;
        }
        .servico-fotos {
            margin-top: 20px;
            text-align: center;
        }

        
    </style>
</head>

<body>

    <header>
        <div class="cabecalho">
            <div class="boasvindas">
                <h1>Bem-vindo à Estética Glam!</h1>
                <p>"Beleza e bem-estar em cada detalhe. Transforme-se na Estética Glam!"</p>
            </div>
        </div>
    </header>

    <!-- Container do Formulário -->
    <div class="form-container">
        <button class="btn btn-outline-secondary" onclick="window.location.href='{{ url('/') }}';">
            <i class="fas fa-arrow-left"></i> Voltar
        </button>

        <!-- Agendamento de Serviços -->
        <section id="agendamento" class="container mt-5">
            <h2>Agende seu Serviço</h2>
            <p>Escolha o serviço, data e horário que melhor atendem a sua necessidade.</p>
            <form id="agendamentoForm" action="{{ route('agendamento.store') }}" method="POST">
                @csrf

                <label for="servico" class="form-label" aria-label="Escolha o tipo de serviço">Serviços</label>
                
                <select class="form-control" id="servico" name="servico_id" aria-describedby="servico-help">
                    @foreach($servicos as $servico)
                        <option value="{{ $servico->id }}" data-img="{{ asset('storage/'.$servico->foto) }}"alt="{{ $servico->tipo_servico }}" >
                            <i class="fas fa-{{ $servico->icone }}"></i> {{ $servico->tipo_servico }}
                        </option>
                    @endforeach
                    
                </select>
                <small id="servico-help" class="form-text text-muted">Escolha o serviço que deseja agendar.</small>

                <!-- Exibição da imagem do serviço -->
                <div class="servico-imagem">
                    <img id="servicoImagem" src="" alt="Imagem do serviço" />
                </div>

                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>



                <div class="mb-3">
                    <label for="data" class="form-label">Data</label>
                    <input type="date" class="form-control" id="data" name="data" required>
                </div>

                <div class="mb-3">
                    <label for="horario" class="form-label">Horário</label>
                    <input type="time" class="form-control" id="hora" name="hora" required>
                </div>

                <button type="submit" class="btn btn-primary">Agendar</button>
            </form>
        </section>

        <!-- Mensagens de sucesso ou erro -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

    </div>

    <!-- Incluindo o JS do Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha1/js/bootstrap.bundle.min.js"></script>

    <!-- Script para exibir a imagem do serviço selecionado -->
    <script>
        document.getElementById('servico').addEventListener('change', function() {
            var selectedOption = this.options[this.selectedIndex];
            var imgSrc = selectedOption.getAttribute('data-img');
            document.getElementById('servicoImagem').src = imgSrc;
        });
    </script>

</body>
</html>
