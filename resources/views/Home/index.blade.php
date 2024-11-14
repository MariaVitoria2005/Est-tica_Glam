<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Página Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
         /* Estilos para o modo de alto contraste */
        .alto-contraste {
            background-color: #000 !important;
            color: #FFF !important;
        }
        /* header {
            background-color: #007bff;
            padding: 20px;
            color: white;
            position: relative;
            display: flex;
            justify-content: space-between;
            align-items: center;
        } */

        .alto-contraste header {
            background-color: #333 !important;
        }

        .btn-contraste {
            background-color: #ffcc00;
            color: #000;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
         /* Mudança na cor do botão de Alto Contraste quando no modo de alto contraste */
         .alto-contraste .btn-contraste {
            background-color: #000; /* Fundo escuro */
            color: #ffcc00; /* Texto amarelo */
        }

        .btn-contraste:hover {
            background-color: #e6b800;
        }
        .sidebar {
            position: fixed;
            top: 0;
            left: -250px;
            height: 100%;
            width: 250px;
            background-color: #007bff;
            color: #fff;
            padding-top: 30px;
            box-shadow: 2px 0px 5px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            transition: all 0.4s ease-out; /* Transição suave ao abrir/fechar */
        }
        .sidebar a {
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            display: block;
            font-size: 1.2rem;
        }
        .sidebar a:hover {
            background-color: #0056b3;
        }

         /* Estilo do botão de abrir a sidebar */
        .btn-sidebar {
            position: fixed;
            top: 20px;
            left: 20px;
            z-index: 1050;
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            font-size: 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-left: auto;
        }
        .btn-sidebar:hover {
            background-color: #0056b3;
        }

        .sidebar .icon {
            margin-right: 10px;
        } 

         /* Cor do cabeçalho */
        header {
            background-color: #007bff;
            padding: 20px;
            color: white;
            position: relative; 
        }
        
        body {
            padding-left: 0; /* Remove o padding em telas pequenas */
            transition: padding-left 0.3s ease;     
        }

        footer {
            margin-left: 0; /* Remove a margem do rodapé em telas pequenas */
            transition: margin-left 0.3s ease;
            
        }

        /* Ajustes no layout para telas pequenas */
        @media (max-width: 767px) {
           
            .sidebar {
                left: -100%;
            }
            body {
                padding-left: 0;
                
            }
            
        }
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
            align-items: center;
            
        }
        .logo {
            margin-left: 50px; 
            /* Ajuste a margem para mover o logo para a direita */
        }
        .entrar{
            margin-left: auto;
        }

        .boasvindas{
            flex-grow: 1;
            margin-left: 50px;
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
        
        nav {
            background-color: #007bff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .nav-links {
            list-style-type: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        .nav-links li {
            margin: 0 15px;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            padding: 8px 15px;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: #ffcc00; /* Cor de destaque ao passar o mouse */
        }

        /* Menu Hambúrguer */
        .hamburger {
            display: none;
            cursor: pointer;
            font-size: 24px;
            color: white;
        }

        /* Menu Responsivo */
        @media (max-width: 768px) {
            .nav-links {
                display: none; /* Esconde o menu em telas pequenas */
                flex-direction: column;
                width: 100%;
                background-color: #007bff;
                position: absolute;
                top: 60px;
                left: 0;
            }

            .nav-links li {
                text-align: center;
                padding: 10px 0;
                width: 100%;
            }

            .hamburger {
                display: block; /* Exibe o ícone hambúrguer em telas pequenas */
            }

            .nav-links.active {
                display: flex; /* Exibe o menu ao clicar no ícone */
            }
        }

        /* Animação do menu */
        nav a {
            transition: transform 0.3s ease;
        }

        nav a:hover {
            transform: scale(1.1); /* Aumenta os links ao passar o mouse */
        }

        
    </style>
</head>
    <body>
            <!-- Header -->
            <header class="bg-primary text-white  text-center p-4">
                <!-- fixed-top -->
                <div class="cabecalho">
                    
                     
            </header>
            <nav>
                <img src="storage/fotos/logo.png" alt="Logo Estética Glam" class="logo" width="100"> <!-- Substitua com o caminho da sua logo -->
                    <ul class="nav-links">
                        <li><a href="#servicos" class="fas fa-cogs">Serviços</a></li>
                        <li><a href="#feedbacks" class="fas fa-comments">Feedbacks</a></li>
                        <li><a href="#sobre-nos" class="fas fa-info-circle">Sobre Nós</a></li>
                    </ul>
                    <div class="hamburger" id="hamburger-icon">
                        <i class="fas fa-bars"></i> <!-- Ícone de Menu Hambúrguer -->
                    </div>
                    <div class="boasvindas">
                                <h1>Bem-vindo à Estética Glam!</h1>
                                <p>"Beleza e bem-estar em cada detalhe. Transforme-se na Estética Glam!"</p>
                    </div>
                            
                    <div class="entrar">
                        <div> 
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
                                Login
                            </button>
                                    
                            <button class="btn btn-contraste" id="toggleContrast">Alto Contraste</button>
                        </div>
                    </div>
            </nav>
            

            
            <div class="stars">
            <input type="radio" name="rating" id="star1"><label for="star1"></label>
            <input type="radio" name="rating" id="star2"><label for="star2"></label>
            <input type="radio" name="rating" id="star3"><label for="star3"></label>
            <input type="radio" name="rating" id="star4"><label for="star4"></label>
            <input type="radio" name="rating" id="star5"><label for="star5"></label>
            </div>

            <div class="search-bar">
                <input type="text" placeholder="Pesquise por serviços...">
                <button class="btn btn-outline-secondary"><i class="fas fa-search"></i></button>
            </div>

            <!-- Botão para abrir a sidebar -->
            <button class="btn-sidebar" id="sidebarToggle">
                <i class="fas fa-bars"></i> <!-- Ícone de hambúrguer -->
            </button>

            <!-- Menu Lateral -->
            <div class="sidebar" id="sidebar">
                <h2 class="text-center text-white">Menu</h2>
                <a href="{{ route('pagamentos_index') }}"><i class="fas fa-credit-card"></i> Pagamentos</a>
                <a href="#horario"><i class="fas fa-clock"></i> Horário Disponível</a>
                <a href="#profissional"><i class="fas fa-user-shield"></i> Exclusivo para Profissional</a>
                <a href="#historico"><i class="fas fa-history"></i> Histórico de Agendamento</a>
            </div>           

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
                    <img src="{{ asset('storage/'.$servico->foto) }}" class="card-img-top" alt="{{ $servico->tipo_servico }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $servico->tipo_servico }}</h5>
                        <p><strong>Descrição:</strong> {{ $servico->descricao }}</p>
                        <p><strong>Preço:</strong> R$ {{ number_format($servico->preco, 2, ',', '.') }}</p>

                        <!-- Botões de ação -->
                        <a href="{{ route('novo_agendamento') }}" class="btn btn-outline-primary">
                        <i class="fas fa-calendar-check"></i> Agendar</a>
                        <a href="{{ route('servicos.show', $servico->id) }}" class="btn btn-success">Detalhes</a>
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
                        <h3 class="display-4" style="font-family: 'Arial', sans-serif; color: #333;">Sobre a Estética Glam</h3>
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
        
            <!-- JavaScript para abrir/fechar a sidebar -->
            <script>
                document.getElementById('sidebarToggle').addEventListener('click', function() {
                    var sidebar = document.getElementById('sidebar');
                    var body = document.body;

                    if (sidebar.style.left === '-250px') {
                        sidebar.style.left = '0'; // Abre a sidebar
                        body.style.paddingLeft = '250px'; // Ajusta o conteúdo
                    } else {
                        sidebar.style.left = '-250px'; // Fecha a sidebar
                        body.style.paddingLeft = '0'; // Ajusta o conteúdo
                    }
                });
            </script>

        <script>
            // Alterna o modo de alto contraste
            document.getElementById('toggleContrast').addEventListener('click', function() {
                document.body.classList.toggle('alto-contraste');
            });
        </script>
          <!-- Rodapé -->
        <footer class="bg-dark text-white text-center py-4 mt-5">
            <p>&copy; 2024 Estética Glam. Todos os direitos reservados.</p>
        </footer>
    </body>
</html>