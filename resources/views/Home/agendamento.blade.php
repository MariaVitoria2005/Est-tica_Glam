<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Agendamento</title>

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
        .cabecalho{
            display: flex;
            justify-content: space-between;
        }
        .boasvindas{
            flex-grow: 1;
            text-align: center;
        }
    </style>
   

</head>
    <body>
       
            <header class="bg-primary text-white text-center p-4">
                <div class="cabecalho">
                    <div class="boasvindas">
                        <h1>Bem-vindo à Estética Glam!</h1>
                        <p>"Beleza e bem-estar em cada detalhe. Transforme-se na Estética Glam!"</p>
                    </div>
                    
                    
                </div>
            </header>

        <!-- Container do Formulário -->
        <div class="form-container">

            <h2>Agende seu serviço agora e garanta um atendimento exclusivo e personalizado!</h2>

            <button class="btn btn-outline-secondary" onclick="window.location.href='{{ url('/') }}';">Voltar para a Página Inicial</button>
            <!-- Formulário de Agendamento -->
            <form action="{{ route('agendamento.store') }}" method="POST">
                @csrf

                <label>DATA:</label>
                <input type="date" name="data">

                <label>HORA:</label>
                <input type="time" name="hora">

                <label for="">CLIENTE:</label>
                <select name="cliente_id" id="cliente_id">
                    @foreach($clientes as $cliente)
                        <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                    @endforeach
                </select>

                <label for="">SERVIÇO:</label>
                <select name="servico_id" id="servico_id">
                    @foreach($servicos as $servico)
                        <option value="{{ $servico->id }}">{{ $servico->tipo_servico }}</option>
                    @endforeach
                </select>

                <label for="">PROFISSIONAL:</label>
                <select name="profissional_id" id="profissional_id">
                    @foreach($profissionais as $profissional)
                        <option value="{{ $profissional->id }}">{{ $profissional->nome }}</option>
                    @endforeach
                </select>

                <label for="status">STATUS:</label>
                <select name="status" id="status">
                    @foreach($status as $item)
                        <option value="{{ $item }}">{{ $item }}</option>
                    @endforeach
                </select>

                <button type="submit" class="btn btn-outline-dark">Salvar</button>
            </form>
        </div>

    </body>
</html>