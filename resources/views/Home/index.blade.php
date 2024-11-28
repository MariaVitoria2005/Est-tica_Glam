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
<!-- Incluir no <head> para fontes elegantes -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Lora:wght@400&display=swap" rel="stylesheet">

<style>
    /* Estilo geral do corpo */
    body {
        font-family: 'Lora', serif;
        background-color: #f8f9fa;
        color: #333;
        line-height: 1.6;
    }

    /* Estilo do cabeçalho */
    header.boasvindas {
        background: linear-gradient(135deg, #6a1b9a, #8e24aa); /* Gradiente chique */
        color: white;
        padding: 30px 20px;
        text-align: center;
    }
    header.boasvindas h1 {
        font-family: 'Playfair Display', serif;
        font-size: 3rem;
        font-weight: bold;
    }
    header.boasvindas p {
        font-size: 1.2rem;
        margin-top: 10px;
        font-style: italic;
    }

    /* Estrelas de avaliação */
    .stars input[type="radio"]:checked + label {
        color: #f39c12; /* Cor dourada para estrelas selecionadas */
    }
    .stars label {
        font-size: 1.5rem;
        color: #ccc;
        cursor: pointer;
        transition: color 0.3s ease;
    }
    .stars input[type="radio"] {
        display: none;
    }

   /* Estilo para a barra de navegação */
    nav {
        display: flex;
        justify-content: space-between;  /* Garante que o logo e os botões fiquem nos extremos */
        align-items: center;  /* Alinha o conteúdo verticalmente */
        padding: 10px 20px;  /* Espaçamento dentro da barra de navegação */
    }

    /* Estilo para os links */
    .nav-links {
        list-style: none;
        display: flex;
        justify-content: center;  /* Centraliza os links horizontalmente */
        gap: 20px;  /* Espaço entre os links */
        flex-grow: 1;  /* Faz com que os links ocupem o espaço restante */
    }

    /* Estilo para os links individuais */
    .nav-links li {
        display: inline-block;
    }

    /* Se necessário, alinha os itens da navegação verticalmente */
    .nav-links a {
        text-decoration: none;  /* Remove o sublinhado dos links */
        color: #000;  /* Cor do texto do link */
        font-size: 16px;  /* Ajuste do tamanho da fonte */
    }


    /* Estilo do Menu */
    nav {
        background-color: #2c3e50; /* Cor escura para o menu */
        padding: 15px;
        align-items: center;
    }
    .nav-links {
        list-style: none;
        display: flex;
    
        gap: 20px;
    }
    .nav-links li a {
        color: #ecf0f1;
        text-decoration: none;
        font-size: 1.1rem;
        transition: color 0.3s ease;
    }
    .nav-links li a:hover {
        color: #f39c12;
    }

    /* Botões (Login e Cadastro) */
    .btn-outline-primary {
        border-color: #f39c12;
        color: #f39c12;
    }
    .btn-outline-primary:hover {
        background-color: #f39c12;
        color: white;
    }

    .btn-sidebar {
        font-size: 2rem;
        background-color: transparent;
        border: none;
        color: #fff;
        cursor: pointer;
        transition: color 0.3s ease;
    }
    .btn-sidebar:hover {
        color: #f39c12;
    }

    /* Sidebar */
    .sidebar {
        position: fixed;
        left: -250px;
        top: 0;
        width: 250px;
        height: 100%;
        background-color: #34495e;
        color: white;
        padding-top: 20px;
        transition: left 0.3s ease;
        box-shadow: 3px 0 10px rgba(0, 0, 0, 0.3);
    }
    .sidebar.open {
        left: 0;
    }
    .sidebar a {
        display: block;
        color: white;
        padding: 15px;
        text-decoration: none;
        font-size: 1.1rem;
        transition: background-color 0.3s ease;
    }
    .sidebar a:hover {
        background-color: #8e24aa;
    }

    /* Cartões de Serviços */
    .card {
        border: none;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
    }
    .card-body {
        padding: 30px;
    }
    .card-title {
        font-size: 1.5rem;
        font-weight: bold;
    }

    /* Estilo para o rodapé */
    footer {
        background-color: #2c3e50;
        color: white;
        padding: 30px 0;
    }
    footer p {
        margin: 0;
        font-size: 1rem;
    }

    /* Seção de Redes Sociais */


    #redes-sociais h2 {
        font-size: 2rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
    }

    #redes-sociais p {
        font-size: 1.2rem;
        color: #666;
        margin-bottom: 40px;
    }

    /* Estilo para os ícones sociais */
    .social-icons {
        display: flex;
        justify-content: center;
        gap: 30px; /* Espaço entre os ícones */
    }

    .social-icon {
        display: inline-block;
        width: 50px;
        height: 50px;
        line-height: 50px; /* Alinha o ícone verticalmente */
        border-radius: 50%; /* Tornar os ícones circulares */
        font-size: 1.8rem;
        text-align: center;
        transition: all 0.3s ease;
        background-color: #ffffff; /* Cor de fundo do ícone */
        border: 2px solid #ccc; /* Borda suave */
        color: #333; /* Cor do ícone */
    }

    /* Efeitos de hover */
    .social-icon:hover {
        background-color: #f39c12; /* Cor dourada no hover */
        border-color: #f39c12; /* Borda dourada no hover */
        color: #fff; /* Ícone branco no hover */
        transform: translateY(-5px); /* Leve movimento para cima */
    }

    /* Cores de fundo para as redes sociais */
    .social-icon.facebook {
        background-color: #3b5998;
        border-color: #3b5998;
    }

    .social-icon.instagram {
        background-color: #e1306c;
        border-color: #e1306c;
    }

    .social-icon.twitter {
        background-color: #1da1f2;
        border-color: #1da1f2;
    }

    .social-icon.whatsapp {
        background-color: #25d366;
        border-color: #25d366;
    }

    .social-icon.link {
        background-color: #ddd;
        border-color: #ddd;
    }

    .social-icon.link:hover {
        background-color: #f39c12; /* Cor dourada no hover */
        border-color: #f39c12; /* Borda dourada no hover */
    }

    /* Responsividade para dispositivos móveis */
    @media (max-width: 768px) {
        .social-icon {
            width: 45px;
            height: 45px;
            font-size: 1.5rem; /* Reduzir o tamanho dos ícones em telas menores */
        }

        #redes-sociais h2 {
            font-size: 1.5rem;
        }

        #redes-sociais p {
            font-size: 1rem;
        }
    }


    /* Formulário de Feedback */
    #deixar-feedback .form-control {
        border-radius: 10px;
        padding: 15px;
        border: 1px solid #ddd;
    }
    #deixar-feedback button {
        background-color: #f39c12;
        color: white;
        border-radius: 5px;
        font-weight: bold;
        padding: 10px 20px;
        border: none;
        transition: background-color 0.3s ease;
    }
    #deixar-feedback button:hover {
        background-color: #e67e22;
    }

    /* Animações para o Menu */
    .navbar-toggler {
        background-color: #f39c12;
    }
    .navbar-collapse {
        justify-content: center;
    }
    /* Estilo para o botão de menu */
    .btn-sidebar {
        position: absolute;
        top: 20px;
        left: 20px;
        background-color: transparent;
        border: none;
        padding: 10px;
        font-size: 30px;
        color: #fff; /* Cor branca para o ícone */
        cursor: pointer;
        transition: all 0.3s ease;
        z-index: 1000; /* Para garantir que o botão fique acima do conteúdo */
    }

    .btn-sidebar i {
        font-size: 35px; /* Tamanho do ícone */
    }

    .btn-sidebar:hover {
        transform: scale(1.1); /* Leve aumento de tamanho no hover */
        color: #f39c12; /* Cor dourada ao passar o mouse */
    }

    @media (max-width: 768px) {
        /* Ajuste para dispositivos móveis */
        .btn-sidebar {
            top: 15px;
            left: 15px;
        }
    }

</style>

</head>
    <body>
    <nav>
    <div class="logo-container">
        <img src="storage/fotos/logo.png" alt="Logo Estética Glam" class="logo" width="100">
    </div>
    
    <ul class="nav-links">
        <li><a href="#servicos" class="fas fa-cogs">Serviços</a></li>
        <li><a href="#feedbacks" class="fas fa-comments">Feedbacks</a></li>
        <li><a href="#sobre-nos" class="fas fa-info-circle">Sobre Nós</a></li>
        <li><a href="#sobre-nos" class="fas fa-info-circle">Endereço</a></li>
    </ul>

    <!-- Alinhamento do conteúdo à direita -->
    <div class="entrar ms-auto d-flex align-items-center">
        <!-- Botão Login com ícone -->
        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
            <i class="fas fa-user"></i> Login
        </button>

        <!-- Link para Cadastro com ícone -->
        <a href="/register" class="ms-lg-3 btn btn-outline-primary">
            <i class="fas fa-user-plus"></i> Cadastre-se
        </a>
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
        <section id="redes-sociais" class="container mt-5 py-5">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2 class="mb-4">Nos acompanhe nas redes sociais e fique por dentro das novidades!</h2>
                    <p class="lead mb-4">Não perca nossas promoções exclusivas, dicas de beleza e muito mais! Siga-nos nas redes sociais.</p>
                    <div class="d-flex justify-content-center social-icons">
                        <a href="https://facebook.com/suaempresa" class="social-icon facebook" target="_blank" aria-label="Facebook">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                        <a href="https://www.instagram.com/estetica_glam2025/" class="social-icon instagram" target="_blank" aria-label="Instagram">
                            <i class="fab fa-instagram-square"></i>
                        </a>
                        <a href="https://twitter.com/suaempresa" class="social-icon twitter" target="_blank" aria-label="Twitter">
                            <i class="fab fa-twitter-square"></i>
                        </a>
                        <a href="https://wa.me/+5586988969563" class="social-icon whatsapp" target="_blank" aria-label="WhatsApp">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <button class="social-icon link" onclick="copyLink()" aria-label="Copiar Link">
                            <i class="fas fa-link"></i>
                        </button>
                    </div>
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
         <!-- @if (Auth::check())
            <section id="usuario-logado" class="text-center mt-5">
                <h3>Bem-vinda, {{ Auth::user()->name }}!</h3>
                <img src="{{ Auth::user()->foto}}" alt="Foto de perfil" class="rounded-circle" width="150">
            </section>
        @endif -->

         <!-- Verificar se o usuário está logado -->
         @auth
            <!-- Exibir a foto do usuário, se logado -->
            <div class="text-center mb-3">
                <img src="{{ asset('storage/' . Auth::user()->foto) }}" alt="Foto do Usuário" class="rounded-circle" width="100" height="100">
            </div>
            <p class="text-center">Bem-vindo de volta, {{ Auth::user()->name }}!</p>
        @endauth
        
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
                                <a href="{{ route('agendamento.create',$servico->tipo_servico) }}" class="btn btn-outline-primary">
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
                <a href="{{ route('feedbacks.index') }}" class="btn btn-primary">Deixe seu feedback</a>
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
                       
                            <!-- Caso não esteja logado, exibe o formulário de login -->
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="nome" class="form-label">Nome</label>
                                    <input type="text" class="form-control" id="nome" name="nome" required>
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