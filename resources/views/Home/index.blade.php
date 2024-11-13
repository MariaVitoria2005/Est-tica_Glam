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
        
        .profissional-img {
            width: 80px;  
            height: 100px; 
            border-radius: 50%; /* Torna a imagem redonda */
        }

        .profissional-info {
            display: flex;
            align-items: center;
            justify-content: flex-end; /* Alinha a imagem e o nome da profissional à direita */
        }

        .profissional-nome {
            font-size: 1.2rem;
            margin-left: 15px;
        }

        /* Ajustes no layout para telas pequenas */
        @media (max-width: 767px) {
            #redes-sociais {
                flex-direction: column;  /* Coloca redes sociais e profissional em coluna em telas pequenas */
                align-items: center;
            }

            .profissional-col {
                margin-top: 15px; /* Distancia a foto do profissional das redes sociais */
            }
        }
    </style>
</head>
    <body>
            <!-- Header -->
            <header class="bg-primary text-white  text-center p-4">
            <!-- fixed-top -->
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
            <section id="redes-sociais" class="container mt-4">
                <div class="row">
                    <!-- Redes Sociais -->
                    <div class="col-md-8 redes-col">
                        <h2>Nos acompanhe nas redes sociais!</h2>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="https://facebook.com/suaempresa" class="btn btn-link" target="_blank">
                                    <i class="fab fa-facebook-square fa-3x text-primary"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://instagram.com/suaempresa" class="btn btn-link" target="_blank">
                                    <i class="fab fa-instagram-square fa-3x text-danger"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://twitter.com/suaempresa" class="btn btn-link" target="_blank">
                                    <i class="fab fa-twitter-square fa-3x text-info"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://wa.me/+5586988969563" class="btn btn-link" target="_blank">
                                    <i class="fab fa-whatsapp fa-3x text-success"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Foto e nome da Profissional -->
                    <div class="col-md-4 profissional-col">
                        <div class="profissional-info">
                            @foreach($profissionais as $profissional)
                                <img src="{{ asset('storage/' .$profissional->foto) }}" class="profissional-img" alt="{{ $profissional->nome }}">
                                <div>
                                    <h5 class="profissional-nome">{{ $profissional->nome }}</h5>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
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
                                    <!-- <p class="card-text">R${{ $servico->preco }}</p> -->
                                    <a href="{{ route('novo_agendamento') }}" class="btn btn-outline-primary">Agendar</a>
                                    <a href="#" class="btn btn-success">Detalhes</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
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

            <section id="sobre-nos" class="container mt-5 py-5" style="background-color: #f9f9f9; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                <div class="row">
                    <div class="col-12 text-center mb-4">
                        <h6 class="display-4" style="font-family: 'Arial', sans-serif; color: #333;">Sobre a Estética Glam</h6>
                        <p class="lead text-muted">A Estética Glam é uma clínica especializada em oferecer tratamentos de beleza de alta qualidade. Nossa missão é proporcionar uma experiência única para nossos clientes, aliando bem-estar e resultados excepcionais.</p>
                    </div>

                    <div class="col-md-4 text-center">
                        <div class="icon mb-3">
                            <i class="fas fa-cogs fa-3x" style="color: #007bff;"></i>
                        </div>
                        <h4><strong>Missão</strong></h4>
                        <p>Oferecer tratamentos estéticos inovadores e personalizados para cada cliente, visando resultados excepcionais.</p>
                    </div>

                    <div class="col-md-4 text-center">
                        <div class="icon mb-3">
                            <i class="fas fa-bullseye fa-3x" style="color: #28a745;"></i>
                        </div>
                        <h4><strong>Visão</strong></h4>
                        <p>Ser a clínica de estética mais renomada e confiável da região, sendo referência em qualidade e resultados.</p>
                    </div>

                    <div class="col-md-4 text-center">
                        <div class="icon mb-3">
                            <i class="fas fa-handshake fa-3x" style="color: #ffc107;"></i>
                        </div>
                        <h4><strong>Valores</strong></h4>
                        <p>Comprometimento, excelência, confiança e respeito, buscando sempre a satisfação total de nossos clientes.</p>
                    </div>
                </div>
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
        <!-- Rodapé -->
            <footer class="bg-dark text-white text-center py-4 mt-5" style="position: relative; bottom: 0; width: 100%;">
                <div class="container">
                    <p>&copy; 2024 Estética Glam. Todos os direitos reservados.</p>
                    
            </footer>

    </body>
</html>