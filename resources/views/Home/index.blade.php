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
            top: 20px;
            right: 20px;
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
                <div class="boasvindas">
                    <h1>Bem-vindo à nossa página!</h1>
                </div>
                
                <div class="entrar">
                    <!-- Botão para abrir o modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalExemplo">
                        Abrir Modal
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
        
        <!-- Exibir foto do usuário logado -->
        @if (Auth::check())
            <section id="usuario-logado" class="text-center mt-5">
                <h3>Bem-vindo, {{ Auth::user()->name }}!</h3>
                <img src="{{ Auth::user()->profile_photo_url }}" alt="Foto de perfil" class="rounded-circle" width="150">
            </section>
        @endif

        <!-- Serviços Disponíveis -->
        <section id="servicos" class="container mt-5">
            <h2>Serviços Disponíveis</h2>
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
                                <a href="#!" class="btn btn-primary">Saiba Mais</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- Modal de Login (apenas visível se o usuário não estiver logado) -->
        <div class="modal fade" id="modalExemplo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <!-- Email Address -->
                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <!-- Password -->
                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Senha')" />
                                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <button type="submit" class="btn btn-primary">Entrar</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <!-- Scripts do Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

       
    </body>
</html>

