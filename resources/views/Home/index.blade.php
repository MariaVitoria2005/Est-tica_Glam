<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Página Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
         .modal-dialog {
            position: fixed;
            top: 0;
            right: 0;
            margin: 20px;
        }

        /* Posicionar o botão no canto superior direito */
        .btn-open-modal {
            position: fixed;
            /*top: 20px;*/
            /*right: 20px;*/
            z-index: 1051; /* Um z-index maior para garantir que o botão fique acima de outros elementos */
        }

        /* Opcional: adicionar um z-index alto para garantir que o modal fique acima de outros elementos */
        .modal {
            z-index: 1050;  /* Pode ser ajustado conforme necessário */
        }

        .cabecalho{
            display: flex;
            justify-content: space-between;
        }

        .entrar{
            margin-left: auto;
        }

        .boasvindas{
            flex-grow: 1;
            text-align: center;
        }
    </style>
</head>
    <body>
            <!-- Header -->
            <header class="bg-primary text-white text-center p-4">
                <div class="cabecalho">
                <img src="storage/fotos/logo.png" alt="Logo Estética Glam" class="logo" width="100"> <!-- Substitua com o caminho da sua logo -->
                    <div class="boasvindas">
                        <h1>Bem-vindo à Estética Glam!</h1>
                        <p>"Beleza e bem-estar em cada detalhe. Transforme-se na Estética Glam!"</p>
                    </div>
                    
                    <div class="entrar">
                        <!-- Botão para abrir o modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
                            Login
                        </button>
                    </div>
                </div>
            </header>

            <!-- Redes Sociais -->
            <section id="redes-sociais" class="text-center mt-4">

                

                <h2>Nos acompanhe nas redes sociais!</h2>
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="https://facebook.com/suaempresa" class="btn btn-link" target="_blank">
                            <i class="fab fa-facebook-square fa-3x text-primary"></i> <!-- Ícone do Facebook -->
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://instagram.com/suaempresa" class="btn btn-link" target="_blank">
                            <i class="fab fa-instagram-square fa-3x text-danger"></i> <!-- Ícone do Instagram -->
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://twitter.com/suaempresa" class="btn btn-link" target="_blank">
                            <i class="fab fa-twitter-square fa-3x text-info"></i> <!-- Ícone do Twitter -->
                        </a>
                    </li>
                    <li class="list-inline-item">
                    <a href="https://wa.me/+5586988969563" class="btn btn-link" target="_blank">
                        <i class="fab fa-whatsapp fa-3x text-success"></i> <!-- Ícone do WhatsApp -->
                    </a>
                    </li>
                </ul>
            </section>

            <!-- Agendamento de Serviços -->
            <section id="agendamento" class="container mt-5">
                <h2>Agende seu Serviço</h2>
                <p>Escolha o serviço, data e horário que melhor atendem a sua necessidade.</p>
                <form action="{{ route('agendamento.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="servico" class="form-label">Serviço</label>
                        <select class="form-control" id="servico" name="servico_id">
                            @foreach($servicos as $servico)
                                <option value="{{ $servico->id }}">{{ $servico->tipo_servico }} - R${{ $servico->preco }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="data" class="form-label">Data</label>
                        <input type="date" class="form-control" id="data" name="data" required>
                    </div>

                    <div class="mb-3">
                        <label for="horario" class="form-label">Horário</label>
                        <input type="time" class="form-control" id="horario" name="horario" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Agendar</button>
                </form>
            </section>

            <!-- Feedbacks de Clientes -->
            <section id="feedbacks" class="container mt-5">
                <h2>O que nossos clientes dizem</h2>
                <div class="row">
                    @foreach($feedbacks as $feedback)
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $feedback->cliente->nome }}</h5>
                                    <p class="card-text">"{{ $feedback->comentario }}"</p>
                                    <p class="card-text"><strong>Avaliação:</strong> {{ $feedback->avaliacao }} ★</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>

            <!-- Formulário de Feedback -->
            <section id="deixar-feedback" class="container mt-5">
                <h2>Deixe sua opinião</h2>
                <form action="{{ route('feedback.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="comentario" class="form-label">Comentário</label>
                        <textarea class="form-control" id="comentario" name="comentario" rows="3" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="avaliacao" class="form-label">Avaliação</label>
                        <input type="number" class="form-control" id="avaliacao" name="avaliacao" min="1" max="5" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar Feedback</button>
                </form>
            </section>

            
            <!-- Exibir foto do usuário logado -->
            @if (Auth::check())
                <section id="usuario-logado" class="text-center mt-5">
                    <h3>Bem-vindo, {{ Auth::user()->name }}!</h3>
                    <img src="{{ Auth::user()->profile_photo_url }}" alt="Foto de perfil" class="rounded-circle" width="150">
                </section>
            @endif

            <!-- Serviços Disponíveis -->
            <section id="servicos" class="container mt-5">
                <h2>Serviços Disponivel</h2>
                <div class="row">
                    @foreach($servicos as $servico)
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <!-- Exibe a imagem do serviço -->
                                <img src="{{ asset('storage/'.$servico->foto) }}" class="card-img-top" alt="{{ $servico->foto }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $servico->tipo_servico }}</h5>
                                    <p class="card-text">{{ $servico->descricao }}</p>
                                    <p class="card-text">R${{ $servico->preco }}</p>
                                    <a href="{{ route('agendamento.create') }}" class="btn btn-outline-primary">Agendar</a>
                                    <a href="#" class="btn btn-success">Detalhes</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>

            <section id="profissionais" class="container mt-5">
                <h2>Conheça nossos Profissionais</h2>
                <div class="row">
                    @foreach($profissionais as $profissional)
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="{{ asset('storage/' . $profissional->foto) }}" class="card-img-top" alt="{{ $profissional->nome }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $profissional->nome }}</h5>
                                    <p class="card-text">{{ $profissional->descricao }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>

            <!-- Histórico de Agendamentos -->
            <section id="historico-agendamentos" class="container mt-5">
                <h2>Meus Agendamentos</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Serviço</th>
                            <th scope="col">Data</th>
                            <th scope="col">Horário</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($agendamentos as $agendamento)
                            <tr>
                                <td>{{ $agendamento->servico->tipo_servico }}</td>
                                <td>{{ $agendamento->data }}</td>
                                <td>{{ $agendamento->horario }}</td>
                                <td>
                                    @if($agendamento->cancelado)
                                        Cancelado
                                    @else
                                        Confirmado
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>

            <section id="pagamento" class="container mt-5">
                <h2>Pagamento do Serviço</h2>
                <form action="{{ route('pagamento.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="valor" class="form-label">Valor Total</label>
                        <input type="text" class="form-control" id="valor" name="valor" value="{{ $agendamento->servico->preco }}" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="metodo_pagamento" class="form-label">Método de Pagamento</label>
                        <select class="form-control" id="metodo_pagamento" name="metodo_pagamento" required>
                            <option value="cartao_credito">Cartão de Crédito</option>
                            <option value="pix">PIX</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Finalizar Pagamento</button>
                </form>
            </section>

            <section id="sobre-nos" class="container mt-5">
                <h2>Sobre a Estética Glam</h2>
                <p>A Estética Glam é uma clínica especializada em oferecer tratamentos de beleza de alta qualidade. Nossa missão é proporcionar uma experiência única para nossos clientes, aliando bem-estar e resultados excepcionais.</p>
                <p><strong>Missão:</strong> Oferecer tratamentos estéticos inovadores e personalizados.</p>
                <p><strong>Visão:</strong> Ser a clínica de estética mais renomada e confiável da região.</p>
                <p><strong>Valores:</strong> Comprometimento, excelência, confiança e respeito.</p>
            </section>

            <!-- Modal de Login (apenas visível se o usuário não estiver logado) -->
            <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="loginModalLabel">Login</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <!-- Nome -->
                                <div class="mb-3">
                                    <label for="name" class="form-label" >Nome</label>
                                    <input type="text" class="form-control" id="name" name="name" required autofocus>
                                </div>
                                <!-- Email -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <!-- Senha -->
                                <div class="mb-3">
                                    <label for="password" class="form-label">Senha</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <!-- Botão de Login -->
                                <button type="submit" class="btn btn-primary w-100">Entrar</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>