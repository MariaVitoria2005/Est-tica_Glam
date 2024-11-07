<!-- resources/views/home.blade.php -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Página Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
    <body>
        <!-- Header -->
        <header class="bg-primary text-white text-center p-4">
            <h1>Bem-vindo à nossa página!</h1>
        </header>

        <!-- Redes Sociais -->
        <section id="redes-sociais" class="text-center mt-4">
            <h2>Nos acompanhe nas redes sociais!</h2>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="https://facebook.com/suaempresa" class="btn btn-link" target="_blank">Facebook</a></li>
                <li class="list-inline-item"><a href="https://instagram.com/suaempresa" class="btn btn-link" target="_blank">Instagram</a></li>
                <li class="list-inline-item"><a href="https://twitter.com/suaempresa" class="btn btn-link" target="_blank">Twitter</a></li>
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
               
            </div>
        </section>

        <!-- Modal de Login (apenas visível se o usuário não estiver logado) -->
        <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <x-auth-session-status class="mb-4" :status="session('status')" />

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

                                <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <button type="submit" class="btn btn-primary">Entrar</button>
                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>                          
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <!-- Scripts do Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>

