<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Agendamento</title>

        <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
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

        /* Responsividade */
        @media (max-width: 600px) {
            form {
                padding: 20px;
            }

            h1 {
                font-size: 24px;
            }
        }
    </style>

    </head>
    <body>
        <h1>Novo Agendamento:</h1>

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

            <label for="">SERVICO</label>
            <select name="servico_id" id="servico_id">
                @foreach($servicos as $servico)
                    <option value="{{$servico->id}}">{{ $servico->tipo_servico}}</option>
                @endforeach
            </select>

            <label for="">PROFISSIONAL:</label>
            <select name="profissional_id" id="profissional_id">
                @foreach($profissionais as $profissional)
                    <option value="{{$profissional->id}}">{{ $profissional->nome}}</option>
                @endforeach
            </select>

            <label for="status">STATUS:</label>
            <select name="status" id="status">
                @foreach($status as $item)
                    <option value="{{ $item->id }}">{{ $item->nome }}</option>
                @endforeach
            </select>

            <button type="submit" class="btn btn-outline-dark">Salvar</button>
        </form>
    </body>
</html>