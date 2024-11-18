<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
    @extends('layouts.app') <!-- Certifique-se de que este layout é o correto para o seu projeto -->

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Nossos Serviços de Destaque</h1>
    
    <!-- Lista de serviços -->
    <div class="row">
        <!-- Manicure -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('storage/images/manicure.jpg') }}" class="card-img-top" alt="Manicure">
                <div class="card-body">
                    <h5 class="card-title">Manicure</h5>
                    <p class="card-text">Cuide das suas unhas com as melhores técnicas e produtos, garantindo beleza e saúde para suas mãos.</p>
                    <a href="{{ route('servicos.show', 'manicure') }}" class="btn btn-primary">Agendar</a>
                </div>
            </div>
        </div>

        <!-- Depilação -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('storage/images/depilacao.jpg') }}" class="card-img-top" alt="Depilação">
                <div class="card-body">
                    <h5 class="card-title">Depilação</h5>
                    <p class="card-text">Procedimentos modernos e eficazes para uma depilação duradoura e confortável.</p>
                    <a href="{{ route('servicos.show', 'depilacao') }}" class="btn btn-primary">Agendar</a>
                </div>
            </div>
        </div>

        <!-- Sobrancelha -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('storage/images/sobrancelha.jpg') }}" class="card-img-top" alt="Design de Sobrancelhas">
                <div class="card-body">
                    <h5 class="card-title">Design de Sobrancelhas</h5>
                    <p class="card-text">Realce a sua expressão facial com um design perfeito para as suas sobrancelhas.</p>
                    <a href="{{ route('servicos.show', 'sobrancelha') }}" class="btn btn-primary">Agendar</a>
                </div>
            </div>
        </div>

        <!-- Pedicure -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('storage/images/pedicure.jpg') }}" class="card-img-top" alt="Pedicure">
                <div class="card-body">
                    <h5 class="card-title">Pedicure</h5>
                    <p class="card-text">Cuide dos seus pés com um tratamento completo, deixando suas unhas e pele impecáveis.</p>
                    <a href="{{ route('servicos.show', 'pedicure') }}" class="btn btn-primary">Agendar</a>
                </div>
            </div>
        </div>

        <!-- Cabeleireiro -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('storage/images/cabeleireiro.jpg') }}" class="card-img-top" alt="Cabeleireiro">
                <div class="card-body">
                    <h5 class="card-title">Cabeleireiro</h5>
                    <p class="card-text">Transforme seu visual com cortes, tinturas e tratamentos especializados para os seus cabelos.</p>
                    <a href="{{ route('servicos.show', 'cabeleireiro') }}" class="btn btn-primary">Agendar</a>
                </div>
            </div>
        </div>

        <!-- Banho de Lua -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('storage/images/banho-de-lua.jpg') }}" class="card-img-top" alt="Banho de Lua">
                <div class="card-body">
                    <h5 class="card-title">Banho de Lua</h5>
                    <p class="card-text">Realce sua pele com o tratamento de Banho de Lua, que garante hidratação e um brilho incrível.</p>
                    <a href="{{ route('servicos.show', 'banho-de-lua') }}" class="btn btn-primary">Agendar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

    </body>
</html>
