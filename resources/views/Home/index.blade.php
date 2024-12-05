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
/* Resetando margens e preenchimentos padrão */

/* Estilo para a navbar fixa */
nav {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #fff;
    z-index: 1000;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

/* Logo */
nav .logo-container {
    display: inline-block;
}

nav .logo {
    width: 100px;
}

/* Links de Navegação */
.nav-links {
    display: flex;
    justify-content: center;
    list-style-type: none;
    padding: 10px 0;
    margin: 0;
    flex-grow: 1;
}

.nav-links li {
    margin: 0 20px;
}

.nav-links a {
    text-decoration: none;
    color: #333;
    font-weight: bold;
    font-size: 16px;
    display: flex;
    align-items: center;
    padding: 5px;
}

.nav-links a:hover {
    color: #007bff;
}

/* Botões de Login e Cadastro à direita */
.entrar {
    display: flex;
    align-items: center;
    margin-left: auto; /* Alinha os botões à direita */
    padding: 10px 20px;
}

.entrar .btn, .entrar a {
    margin-left: 10px;
}

/* Definindo a posição da body para não sobrepor com a navbar */
body {
    padding-top: 80px;
    font-family: 'Lora', serif;
        background-color: #f8f9fa;
        color: #333;
        line-height: 1.6;
}

/* Cabeçalho */
header.boasvindas {
    text-align: center;
    padding: 50px 20px;
    color: white;
    margin-top: 50px; /* Para não sobrepor com a navbar */
    background: linear-gradient(135deg, #6a1b9a, #8e24aa); /* Gradiente chique */  
}

header.boasvindas h1 {
    font-size: 2.5rem;
    margin-bottom: 20px;
    font-family: 'Playfair Display', serif;  
}

header.boasvindas p {
    font-size: 1.2rem;
    color: white;
    margin-bottom: 30px;
    font-size: 1.2rem;
        margin-top: 10px;
        font-style: italic;

}

.stars {
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
}

.stars input {
    display: none;
}

.stars label {
    font-size: 30px;
    color: #ccc;
    cursor: pointer;
}

.stars input:checked ~ label {
    color: #ffd700; /* Cor do star quando selecionado */
}

.stars label:hover,
.stars label:hover ~ label {
    color: #ffd700;
}

.search-bar {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.search-bar input {
    padding: 10px;
    width: 60%;
    border: 2px solid #007bff;
    border-radius: 5px;
}

.search-bar button {
    padding: 10px;
    border: 2px solid #007bff;
    border-left: none;
    background-color: #007bff;
    color: white;
    cursor: pointer;
}

/* Sidebar fixa */
.sidebar {
    position: fixed;
    top: 0;
    right: -250px; /* Sidebar começa fora da tela à direita */
    width: 250px;
    height: 100%;
    background-color: #000; /* Cor de fundo da sidebar */
    color: white;
    padding-top: 60px;
    transition: right 0.3s ease; /* Transição suave */
    z-index: 999;
}

.sidebar.open {
    right: 0; /* Quando a sidebar abrir, ela vai para a posição zero, à direita */
}

.sidebar a {
    color: #fff;
    display: block;
    padding: 15px;
    text-decoration: none;
    font-size: 18px;
}

.sidebar a:hover {
    background-color: #444;
}

/* Overlay para fechar a sidebar */
.sidebar-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    visibility: hidden;
    opacity: 0;
    transition: visibility 0s, opacity 0.3s linear;
    z-index: 998;
}

.sidebar-overlay.open {
    visibility: visible;
    opacity: 1;
}

/* Botão para abrir a sidebar */
.btn-sidebar {
    position: fixed;
    top: 20px;
    left: 20px;
    background-color: #007bff;
    color: white;
    border: none;
    padding: 12px;
    border-radius: 50%;
    font-size: 24px;
    z-index: 1001; /* Acima da sidebar */
}

.btn-sidebar:focus {
    outline: none;
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
        border-radius: 20%; /* Tornar os ícones circulares */
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
   /* CSS */
    .logo-container {
        position: relative;
    }

    .logo {
        margin-left: 100px;  /* Empurra a logo para a direita */
        display: block;  /* Garante que a imagem seja exibida como um bloco */
        width: 100px;  /* Tamanho da logo */
    }



</style>

</head>
    <body>
    <nav>
    <!-- Logo -->
    <div class="logo-container">
        <img src="storage/fotos/logo.png" alt="Logo Estética Glam" class="logo" width="100">
    </div>

    <!-- Links de Navegação -->
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
            <div class="stars">
                <input type="radio" name="rating" id="star1"><label for="star1" class="fa fa-star"></label>
                <input type="radio" name="rating" id="star2"><label for="star2" class="fa fa-star"></label>
                <input type="radio" name="rating" id="star3"><label for="star3" class="fa fa-star"></label>
                <input type="radio" name="rating" id="star4"><label for="star4" class="fa fa-star"></label>
                <input type="radio" name="rating" id="star5"><label for="star5" class="fa fa-star"></label>
            </div>

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

            <div class="search-bar">
                <input type="text" placeholder="Pesquise por serviços...">
                <button class="btn btn-outline-secondary"><i class="fas fa-search"></i></button>
            </div> 
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

        <!-- Cartões de Serviços -->
        <section id="servicos" class="container mt-5">
            <h2>Serviços Disponíveis</h2>
            <div class="row">
                @foreach($servicos as $servico)
                <!-- Cartão do serviço -->
                <div class="col-md-4 mb-4"> <!-- Coluna para 3 itens por linha -->
                    <div class="card">
                        <img src="{{ asset('storage/'.$servico->foto) }}" class="card-img-top" alt="{{ $servico->tipo_servico }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $servico->tipo_servico }}</h5>
                            <p><strong>Descrição:</strong> {{ $servico->descricao }}</p>
                            <p><strong>Preço:</strong> R$ {{ number_format($servico->preco, 2, ',', '.') }}</p>

                            <!-- Botões de ação -->
                            <a href="{{ route('agendamento.create', $servico->tipo_servico) }}" class="btn btn-outline-primary">
                                <i class="fas fa-calendar-check"></i> Agendar
                            </a>
                            <a href="{{ route('detalhes_servico', $servico->id) }}" class="btn btn-success">
                                <i class="fas fa-info-circle"></i> Detalhes
                            </a>
                            
                            <!-- Botão para Cancelar Serviço -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#cancelamentoModal" data-id="{{ $servico->id }}">
                                <i class="fas fa-trash-alt"></i> Cancelar
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>

        <!-- Script JavaScript -->
        <script>
            let servicoId = null;

            // Quando o botão de cancelamento for clicado, armazene o ID do serviço
            document.querySelectorAll('.btn-danger[data-bs-toggle="modal"]').forEach(button => {
                button.addEventListener('click', function () {
                    servicoId = this.getAttribute('data-id');
                });
            });

            // Quando o botão de confirmar cancelamento for clicado
            document.getElementById('confirmarCancelamento').addEventListener('click', function () {
                if (servicoId) {
                    // Enviar requisição AJAX para cancelar o serviço
                    fetch(`/cancelar-servico/${servicoId}`, {
                        method: 'DELETE',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}', // CSRF token para segurança
                        },
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            alert('Serviço cancelado com sucesso!');
                            // Fechar o modal
                            const modal = new bootstrap.Modal(document.getElementById('cancelamentoModal'));
                            modal.hide();
                            // Recarregar a página ou atualizar a lista de serviços
                            window.location.reload();
                        } else {
                            alert('Erro ao cancelar o serviço.');
                        }
                    })
                    .catch(error => {
                        console.error('Erro ao cancelar o serviço:', error);
                        alert('Erro ao realizar o cancelamento.');
                    });
                }
            });
        </script>



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
       
          <!-- Rodapé -->
        <footer class="bg-dark text-white text-center py-4 mt-5">
            <p>&copy; 2024 Estética Glam. Todos os direitos reservados.</p>
        </footer>

    </body>
</html>