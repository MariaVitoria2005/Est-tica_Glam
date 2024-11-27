<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Página Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Incluindo o Font Awesome via CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


    <style>
        /* Cabeçalho */
        header.boasvindas {
            background: linear-gradient(45deg, #ff6b6b, #f1c40f);
            color: white;
            padding: 50px 0;
            text-align: center;
            border-bottom: 5px solid #e74c3c;
        }

        header h1 {
            font-family: 'Arial', sans-serif;
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        header p {
            font-size: 1.25rem;
            font-style: italic;
        }

        /* Estrelas de Avaliação */
        .stars input[type="radio"] {
            display: none;
        }

        .stars label {
            color: #ccc;
            font-size: 2rem;
            cursor: pointer;
        }

        .stars input[type="radio"]:checked ~ label {
            color: #f39c12;
        }

        /* Avaliação */
        .rating-value p {
            font-size: 1.1rem;
            font-weight: bold;
            color: #333;
        }

        /* Navegação */
        nav {
            background-color: #333;
            padding: 15px;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        nav .logo {
            display: inline-block;
            max-height: 50px;
        }

        nav .nav-links {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: flex-end;
            gap: 20px;
        }

        nav .nav-links li {
            display: inline;
        }

        nav .nav-links a {
            color: white;
            text-decoration: none;
            font-size: 1.1rem;
            transition: color 0.3s;
        }

        nav .nav-links a:hover {
            color: #f39c12;
        }

        nav .entrar button,
        nav .entrar a {
            background-color: #f39c12;
            color: white;
            border: none;
            font-size: 1rem;
            padding: 10px 20px;
            border-radius: 5px;
            margin-left: 15px;
            transition: background-color 0.3s ease;
        }

        nav .entrar button:hover,
        nav .entrar a:hover {
            background-color: #e67e22;
        }

        .hamburger i {
            color: white;
            font-size: 2rem;
        }


        /* Sidebar */
        .sidebar {
            position: fixed;
            top: 0;
            left: -250px;
            width: 250px;
            height: 100%;
            background-color: #333;
            padding-top: 60px;
            transition: 0.3s;
            overflow-x: hidden;
        }

        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 1.2rem;
            color: white;
            display: block;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background-color: #f39c12;
        }

        #sidebarToggle {
            position: fixed;
            top: 20px;
            left: 20px;
            font-size: 2rem;
            color: white;
            background: none;
            border: none;
        }

        @media screen and (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .hamburger {
                display: block;
            }
        }


        .card {
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .card img {
            border-bottom: 2px solid #f1c40f;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 1.5rem;
            color: #333;
        }

        .card p {
            font-size: 1rem;
            color: #555;
        }

        .card .btn {
            border-radius: 5px;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        .card .btn-outline-primary {
            border-color: #f39c12;
            color: #f39c12;
        }

        .card .btn-outline-primary:hover {
            background-color: #f39c12;
            color: white;
        }

        .card .btn-success {
            background-color: #28a745;
            color: white;
        }

        .card .btn-danger {
            background-color: #e74c3c;
            color: white;
        }


        footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
            font-size: 0.9rem;
            text-align: center;
        }

        footer p {
            margin: 0;
        }

        footer a {
            color: #f39c12;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* Estilo da Sidebar */
        .sidebar {
            position: fixed;
            left: -250px; /* Inicialmente a sidebar estará fora da tela */
            top: 0;
            width: 250px;
            height: 100%;
            background-color: #333;
            color: white;
            padding-top: 50px;
            transition: transform 0.3s ease; /* Transição suave para a abertura */
            box-shadow: 2px 0px 5px rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        /* Quando a sidebar estiver visível, desloca ela para a tela */
        .sidebar.open {
            transform: translateX(250px);
        }

        /* styles.css */

        /* Estilos gerais da página */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Estilo do botão de abrir a sidebar */
        .btn-sidebar {
            position: absolute;
            top: 20px;
            left: 20px;
            background-color: transparent;
            border: none;
            font-size: 24px;
            cursor: pointer;
            z-index: 9999;
        }

        /* Estilos da Sidebar */
        .sidebar {
            position: fixed;
            top: 0;
            left: -250px; /* Escondida inicialmente */
            width: 250px;
            height: 100%;
            background-color: #333;
            color: white;
            padding: 30px 20px;
            transition: 0.3s ease;
            z-index: 1000;
        }

        .sidebar.open {
            left: 0; /* Quando aberta, move para a posição 0 */
        }

        .sidebar h2 {
            margin-bottom: 30px;
        }

        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            margin: 15px 0;
            font-size: 18px;
        }

        .sidebar a:hover {
            background-color: #555;
            padding-left: 10px;
            transition: 0.3s;
        }

        /* Estilos do overlay */
        .sidebar-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease;
            z-index: 999;
        }

        .sidebar-overlay.open {
            opacity: 1;
            visibility: visible;
        }

        .logo-container {
            display: flex;
            justify-content: flex-start; /* Alinha a logo à esquerda */
        }

        .logo {
            margin-left: 100px; /* Ajuste esse valor para controlar a distância */
            
        }


    </style>
 
    
</head>
    <body>
        <nav>
            <div class="logo-container">
            <img src="storage/fotos/logo.png" alt="Logo Estética Glam" class="logo" width="100"> <!-- Substitua com o caminho da sua logo -->
            </div>
            
            <ul class="nav-links">
                <li><a href="#servicos" class="fas fa-cogs">Serviços</a></li>
                <li><a href="#feedbacks" class="fas fa-comments">Feedbacks</a></li>
                <li><a href="#sobre-nos" class="fas fa-info-circle">Sobre Nós</a></li>
                <!-- Link de Navegação para Endereço -->
                <li><a href="#sobre-nos" class="fas fa-info-circle">Endereço</a></li>
            </ul>

            <div class="hamburger" id="hamburger-icon">
                <i class="fas fa-bars"></i> <!-- Ícone de Menu Hambúrguer -->
            </div>

            <div class="entrar">
                <div> 
                    <!-- Botão Login com ícone -->
                    <!-- Botão Login com cor personalizada (por exemplo, cor verde) -->
                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
                        <i class="fas fa-user"></i> Login  <!-- Ícone de usuário -->
                    </button>


                    <!-- Link para Cadastro com ícone -->
                    <a href="/register" class="ms-lg-3 btn btn-outline-primary">
                        <i class="fas fa-user-plus"></i> Cadastre-se <!-- Ícone de adicionar usuário -->
                    </a>
                </div>
            </div>
        </nav>

        <!-- Novo cabeçalho com título e estrelas abaixo do cabeçalho de navegação -->
        <header class="boasvindas">
            <h1>Bem-vindo à Estética Glam!</h1>
            <p>"Beleza e bem-estar em cada detalhe. Transforme-se na Estética Glam!"</p>

            <!-- Estrelas de avaliação -->
            <div class="stars">
                <input type="radio" name="rating" id="star1"><label for="star1" class="fa fa-star"></label>
                <input type="radio" name="rating" id="star2"><label for="star2" class="fa fa-star"></label>
                <input type="radio" name="rating" id="star3"><label for="star3" class="fa fa-star"></label>
                <input type="radio" name="rating" id="star4"><label for="star4" class="fa fa-star"></label>
                <input type="radio" name="rating" id="star5"><label for="star5" class="fa fa-star"></label>
            </div>

            <!-- Exibição da avaliação -->
            <div class="rating-value">
                <p>Avaliação: <span id="rating-num">0</span> estrelas</p>
            </div>
            <script>
                const stars = document.querySelectorAll('.stars input');
                const ratingValue = document.getElementById('rating-num');

                stars.forEach(star => {
                    star.addEventListener('change', () => {
                        ratingValue.textContent = star.id.replace('star', '');
                    });
                });
            </script>


                    <!-- <div class="search-bar">
                        <input type="text" placeholder="Pesquise por serviços...">
                        <button class="btn btn-outline-secondary"><i class="fas fa-search"></i></button>
                    </div> -->
        </header> 

       
            <!-- Botão para abrir a sidebar -->
            <button class="btn-sidebar" id="sidebarToggle">
                <i class="fas fa-bars"></i> <!-- Ícone de hambúrguer -->
            </button>

            <!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <h2 class="text-center text-white">Menu</h2>
                <a href="{{ route('pagamentos_index') }}"><i class="fas fa-credit-card"></i> Pagamentos</a>
                <a href="#horario"><i class="fas fa-clock"></i> Horário Disponível</a>
                @if(auth()->check() && auth()->user()->role == 'profissional')
                    <a href="{{ route('exclusivo_profissional') }}"><i class="fas fa-user-shield"></i> Exclusivo para Profissional</a>
                @endif
                <a href="#historico"><i class="fas fa-history"></i> Histórico de Agendamento</a>
            </div>

            <!-- Overlay que cobre a tela -->
            <div class="sidebar-overlay" id="overlay"></div>

            <!-- Scripts -->
            <script>
                // Seleciona o botão de menu e a sidebar
                const sidebarToggle = document.getElementById('sidebarToggle');
                const sidebar = document.getElementById('sidebar');
                const overlay = document.getElementById('overlay');

                // Função para abrir a sidebar
                sidebarToggle.addEventListener('click', function() {
                    sidebar.classList.toggle('open'); // Alterna a classe 'open' na sidebar
                    overlay.classList.toggle('open'); // Alterna a classe 'open' no overlay
                });

                // Fecha a sidebar se o overlay for clicado
                overlay.addEventListener('click', function() {
                    sidebar.classList.remove('open');
                    overlay.classList.remove('open');
                });
            </script>

        <!-- Redes Sociais -->
        <section id="redes-sociais" class="container mt-4">
            <div id="redes-sociais" class="row">
                <!-- Redes Sociais -->
                <div class="col-md-8 redes-col">
                    <h2>Nos acompanhe nas redes sociais e fique por dentro das novidades!</h2>
                    <p>Não perca nossas promoções exclusivas, dicas de beleza e muito mais! Siga-nos nas redes sociais.</p>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                        <a href="https://facebook.com/suaempresa" class="btn btn-link" target="_blank" aria-label="Facebook">
                            <i class="fab fa-facebook-square text-primary"></i>
                        </a>

                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/estetica_glam2025/" class="btn btn-link" target="_blank">
                                <i class="fab fa-instagram-square text-danger"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://twitter.com/suaempresa" class="btn btn-link" target="_blank">
                                <i class="fab fa-twitter-square text-info"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://wa.me/+5586988969563" class="btn btn-link" target="_blank">
                                <i class="fab fa-whatsapp text-success"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <button class="btn btn-link" onclick="copyLink()">
                                <i class="fas fa-link text-muted"></i>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
           
        <script>
            function copyLink() {
                navigator.clipboard.writeText(window.location.href).then(function() {
                    alert('Link copiado para a área de transferência!');
                });
            }
        </script>

        <!-- Exibir foto do usuário logado -->
        @if (Auth::check())
            <section id="usuario-logado" class="text-center mt-5">
                <h3>Bem-vinda, {{ Auth::user()->name }}!</h3>
                <img src="{{ Auth::user()->profile_photo_url }}" alt="Foto de perfil" class="rounded-circle" width="150">
            </section>
            
        @endif
        
        <!-- Serviços Disponíveis -->
      <!-- Serviços Disponíveis -->
        <section id="servicos" class="container mt-5">
            <h2>Serviços Disponíveis</h2>
            <div class="row">
                @foreach($servicos as $servico)
                    <!-- Cartão do serviço -->
                    <div class="col-md-4 mb-4"> <!-- Coluna para 3 itens por linha em telas grandes -->
                        <div class="card">
                            <!-- Exibe a imagem do serviço -->
                            <img src="{{ asset('storage/'.$servico->foto) }}" class="card-img-top" alt="{{ $servico->tipo_servico }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $servico->tipo_servico }}</h5>
                                <p><strong>Descrição:</strong> {{ $servico->descricao }}</p>
                                <p><strong>Preço:</strong> R$ {{ number_format($servico->preco, 2, ',', '.') }}</p>

                                <!-- Botões de ação -->
                                <a href="{{ route('Home.index') }}" class="btn btn-outline-primary">
                                    <i class="fas fa-calendar-check"></i> Agendar
                                </a>
                                <a href="{{ route('detalhes_servico', $servico->id) }}" class="btn btn-success">
                                    <i class="fas fa-info-circle"></i> Detalhes
                                </a>
                                <!-- Botão para Cancelar Serviço com ícone -->
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#cancelamentoModal" data-id="{{ $servico->id }}">
                                    <i class="fas fa-trash-alt"></i> Cancelar
                                </button>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
              <!-- Modal de Cancelamento -->
              <div class="modal fade" id="cancelamentoModal" tabindex="-1" aria-labelledby="cancelamentoModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="cancelamentoModalLabel">Cancelar Serviço</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                            </div>
                            <div class="modal-body">
                                <p>Você tem certeza que deseja cancelar este serviço? Uma taxa de cancelamento de R$ 10,00 será cobrada.</p>
                                <button type="button" class="btn btn-danger" id="confirmarCancelamento">Confirmar Cancelamento</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <!-- Feedbacks de Clientes -->
        <section id="feedbacks" class="container mt-5">
            <h2 class="text-center mb-4">O que nossos clientes dizem</h2>
            <div class="row">
                @foreach($feedbacks as $feedback)
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm border-light">
                            <div class="card-body">
                                <!-- Foto do Cliente -->
                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ $feedback->cliente->foto ? asset('storage/'.$feedback->cliente->foto) : asset('images/default-avatar.png') }}" 
                                        alt="{{ $feedback->cliente->nome }}" class="rounded-circle" width="50" height="50">
                                    <h5 class="ms-3">{{ $feedback->cliente->nome }}</h5>
                                </div>

                                <!-- Comentário -->
                                <p class="card-text">"{{ $feedback->comentario }}"</p>

                                <!-- Nota e Avaliação -->
                                <p class="card-text"><strong>Avaliação:</strong> 
                                    @for ($i = 0; $i < $feedback->nota; $i++)
                                        <i class="fas fa-star text-warning"></i>
                                    @endfor
                                    @for ($i = $feedback->nota; $i < 5; $i++)
                                        <i class="fas fa-star text-muted"></i>
                                    @endfor
                                </p>

                                <p class="card-text"><strong>Nota:</strong> {{ $feedback->nota }} ★</p>

                                <!-- Data do Feedback -->
                                <p class="card-text text-muted" style="font-size: 0.9rem;">
                                    Feedback enviado em: 
                                    @if($feedback->created_at instanceof \Carbon\Carbon)
                                        {{ $feedback->created_at->format('d/m/Y') }}
                                    @else
                                        Data não disponível
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Botão para adicionar feedback -->
            <div class="text-center mt-4">
                <a href="{{ route('feedback.create') }}" class="btn btn-primary">Deixe seu feedback</a>
            </div>
        </section>


       <!-- Formulário de Feedback -->
        <section id="deixar-feedback" class="container mt-5">
            <h2>Deixe sua opinião</h2>
            <form action="{{ route('feedback.store') }}" method="POST">
                @csrf

                <!-- Nome do Cliente (opcional) -->
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Seu nome" required>
                </div>

                <!-- E-mail (opcional) -->
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Seu e-mail" required>
                </div>

                <!-- Comentário -->
                <div class="mb-3">
                    <label for="comentario" class="form-label">Comentário</label>
                    <textarea class="form-control" id="comentario" name="comentario" rows="3" placeholder="Deixe seu comentário sobre o serviço" required></textarea>
                </div>

                <!-- Avaliação com Estrelas -->
                <div class="mb-3">
                    <label for="avaliacao" class="form-label">Avaliação</label>
                    <div id="rating-stars" class="d-flex">
                        <span class="star" data-value="1">&#9733;</span>
                        <span class="star" data-value="2">&#9733;</span>
                        <span class="star" data-value="3">&#9733;</span>
                        <span class="star" data-value="4">&#9733;</span>
                        <span class="star" data-value="5">&#9733;</span>
                    </div>
                    <input type="hidden" id="avaliacao" name="avaliacao" value="" required>
                </div>

                <!-- Botão de Envio -->
                <button type="submit" class="btn btn-primary">Enviar Feedback</button>
            </form>
        </section>

        <!-- Estilos para as Estrelas -->
        <style>
            #rating-stars .star {
                font-size: 2rem;
                cursor: pointer;
                color: #ccc;
            }
            #rating-stars .star.selected {
                color: #f39c12;
            }
        </style>

        <!-- Script para manipulação das Estrelas -->
        <script>
            // Adiciona funcionalidade para as estrelas
            const stars = document.querySelectorAll('#rating-stars .star');
            stars.forEach(star => {
                star.addEventListener('click', function() {
                    // Define a avaliação de acordo com a estrela clicada
                    const rating = this.getAttribute('data-value');
                    document.getElementById('avaliacao').value = rating;

                    // Atualiza as estrelas para mostrar a seleção
                    stars.forEach(star => star.classList.remove('selected'));
                    for (let i = 0; i < rating; i++) {
                        stars[i].classList.add('selected');
                    }
                });
            });
        </script>


        <!-- Seção Sobre Nós / Endereço -->
        <section id="sobre-nos" class="container mt-5 py-5">
            <div class="row">
                <!-- Informações do endereço -->
                <div class="col-md-6 offset-md-3 text-center endereco-col">
                    <h5 class="endereco-titulo">Visite-nos</h5>
                    <p class="endereco-texto">Rua São Pedro, 19 - Parque Brasil III, The</p>
                    <p class="endereco-horario"><strong>Horário de Funcionamento:</strong> Seg - Sex: 7h - 19h</p>
                </div>
            </div>
        </section>

        <section id="sobre-nos" class="container mt-4 py-4" style="background-color: #f9f9f9; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
            <div class="row">
            <div class="col-12 text-center mb-3">
                <h3 class="display-5" style="font-family: 'Arial', sans-serif; color: #333; font-weight: bold;">Sobre a Estética Glam</h3>
                <p class="lead text-muted" style="font-size: 1rem; line-height: 1.4;">A Estética Glam é uma clínica especializada em oferecer tratamentos de beleza de alta qualidade. Nossa missão é proporcionar uma experiência única para nossos clientes, aliando bem-estar e resultados excepcionais.</p>
            </div>

            <!-- Missão -->
            <div class="col-md-4 text-center mb-3">
                <div class="icon mb-2">
                    <i class="fas fa-cogs fa-3x" style="color: #007bff;"></i>
                </div>
                <h4 style="font-size: 1.25rem; font-weight: 600;">Missão</h4>
                <p style="font-size: 0.9rem;">Oferecer tratamentos estéticos inovadores e personalizados para cada cliente, visando resultados excepcionais.</p>
            </div>

            <!-- Visão -->
            <div class="col-md-4 text-center mb-3">
                <div class="icon mb-2">
                    <i class="fas fa-bullseye fa-3x" style="color: #28a745;"></i>
                </div>
                <h4 style="font-size: 1.25rem; font-weight: 600;">Visão</h4>
                <p style="font-size: 0.9rem;">Ser a clínica de estética mais renomada e confiável da região, sendo referência em qualidade e resultados.</p>
            </div>

            <!-- Valores -->
            <div class="col-md-4 text-center mb-3">
                <div class="icon mb-2">
                    <i class="fas fa-handshake fa-3x" style="color: #ffc107;"></i>
                </div>
                <h4 style="font-size: 1.25rem; font-weight: 600;">Valores</h4>
                <p style="font-size: 0.9rem;">Comprometimento, excelência, confiança e respeito, buscando sempre a satisfação total de nossos clientes.</p>
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
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="nome" class="form-control" id="nome" name="nome" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
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