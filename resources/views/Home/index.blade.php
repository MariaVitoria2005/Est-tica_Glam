<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Página Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
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
        
        .modal-dialog {
            position: fixed;
            top: 0;
            right: 0;
            margin: 20px;
        }

        /* Posicionar o botão no canto superior direito */
        .btn-open-modal {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1051; 
        }

        /* Opcional: adicionar um z-index alto para garantir que o modal fique acima de outros elementos */
        .modal {
            z-index: 1050;  /* Pode ser ajustado conforme necessário */
        }

        nav .logo {
            display: block;
            margin: 0 auto; /* Centraliza a logo */
        }
        /* .entrar{
            margin-left: auto;
        } */

        .boasvindas{
            flex-grow: 1;
            margin-left: 50px;
        }
        
        /* .profissional-img {
            width: 80px;  
            height: 100px; 
            border-radius: 50%;
        } */

        /* .profissional-info {
            display: flex;
            align-items: center;
            justify-content: flex-end; 
        } */

        /* .profissional-nome {
            font-size: 1.2rem;
            margin-left: 15px;
        } */

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
        
        /* nav {
            display: flex;
            justify-content: space-between; Distribui o conteúdo com espaço entre os itens 
            align-items: center; Alinha os itens verticalmente no centro 
            padding: 10px 20px; Adiciona espaçamento interno 
            background-color: #fff; Cor de fundo, altere conforme necessário 
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); Sombras sutis 
        } */

        /* .nav-links {
            list-style-type: none;
            display: flex;
            margin: 0;
            padding: 0;
        } */

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

        /* Estilos para o cabeçalho de navegação */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px ;
            background-color: #fff; /* Cor de fundo do cabeçalho */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Links de navegação */
        .nav-links {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        /* Estilos para os links da navegação */
        .nav-links li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        /* Estilos para o menu hambúrguer */
        .hamburger {
            display: none; /* Será mostrado em telas menores */
        }

        /* Estilos para a área de login e contrastes */
        .entrar {
            display: flex;
            gap: 10px;
        }

        /* Estilos para o novo cabeçalho com boas-vindas */
        header.boasvindas {
            background-color: #f4f4f4; /* Cor de fundo para destacar a área */
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Sombra leve para destacar */
        }

        .stars input[type="radio"] {
            display: none; /* Esconde os inputs */
        }

        .stars label {
            font-size: 1rem;
            color: #ccc; /* Cor inicial das estrelas */
            cursor: pointer;
            transition: color 0.3s ease;
        }


        .stars label:hover,
        .stars label:hover ~ label {
            color: #f39c12; /* Destaque dourado ao passar o mouse sobre as estrelas */
        }

        /* Exibição do valor da avaliação */
        .rating-value {
            margin-top: 10px;
            font-size: 1.2rem;
            color: #333;
        }

        /* Adiciona espaçamento entre a navegação e o cabeçalho de boas-vindas */
        nav + header.boasvindas {
            margin-top: 20px;
        }

        /* Adicionando animação nos ícones */
        /* .redes-col .btn-link:hover i {
            transform: scale(1.1);
            transition: transform 0.3s ease;
        } */

        /* Estilo da seção de endereço */
        #sobre-nos {
            background-color: #f7f7f7; /* Cor de fundo suave para destacar a seção */
            border-radius: 8px; /* Bordas arredondadas para dar um efeito suave */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Sombra sutil para destacar a seção */
            padding: 40px 0; /* Espaçamento superior e inferior */
        }

        /* Estilo do título */
        .endereco-titulo {
            font-family: 'Arial', sans-serif; /* Fonte limpa e legível */
            font-size: 2rem; /* Tamanho do título */
            font-weight: bold; /* Título em negrito */
            color: #333; /* Cor do texto */
            margin-bottom: 20px; /* Espaçamento abaixo do título */
        }

        /* Estilo do endereço */
        .endereco-texto {
            font-size: 1.2rem; /* Tamanho do texto */
            color: #555; /* Cor do texto */
            margin-bottom: 15px; /* Espaçamento abaixo do endereço */
        }

        /* Estilo do horário de funcionamento */
        .endereco-horario {
            font-size: 1.1rem; /* Tamanho do texto */
            color: #007bff; /* Cor azul para o horário de funcionamento */
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .endereco-col {
                padding-left: 15px; /* Adiciona algum padding nas colunas menores */
                padding-right: 15px;
            }

            .endereco-titulo {
                font-size: 1.5rem; /* Ajusta o tamanho do título em telas menores */
            }

            .endereco-texto {
                font-size: 1rem; /* Ajusta o tamanho do texto */
            }

            .endereco-horario {
                font-size: 1rem; /* Ajusta o tamanho do horário */
            }
        }
    </style>
</head>
    <body>
            <nav>
                <img src="storage/fotos/logo.png" alt="Logo Estética Glam" class="logo" width="100"> <!-- Substitua com o caminho da sua logo -->
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
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
                            Login
                        </button>
                        
                        <a href="/register" class="ms-lg-3 btn btn-primary-outline">Cadastre-se</a>
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
                    <h2>Nos acompanhe nas redes sociais e fique por dentro das novidades!</h2>
                    <p>Não perca nossas promoções exclusivas, dicas de beleza e muito mais! Siga-nos nas redes sociais.</p>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="https://facebook.com/suaempresa" class="btn btn-link" target="_blank">
                                <i class="fab fa-facebook-square fa-3x text-primary"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/estetica_glam2025/" class="btn btn-link" target="_blank">
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
                        <li class="list-inline-item">
                            <button class="btn btn-link" onclick="copyLink()">
                                <i class="fas fa-link fa-3x text-muted"></i>
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
                            <i class="fas fa-calendar-check"></i> Agendar
                        </a>
                        <a href="{{ route('detalhes_servico', $servico->id) }}" class="btn btn-success">
                            <i class="fas fa-info-circle"></i> Detalhes
                        </a>
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
                                    <p class="card-text">Nota:"{{ $feedback->nota }}"</p>
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