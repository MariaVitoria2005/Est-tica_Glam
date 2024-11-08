<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastrar servico</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>    
        <div class="container">
            <div class="row">    
                
            <!-- Redes Sociais -->
        <section id="redes-sociais" class="my-5">
            <h2>Minhas Redes Sociais</h2>
            <div class="d-flex justify-content-around">
                <a href="https://facebook.com" target="_blank" class="btn btn-primary">Facebook</a>
                <a href="https://twitter.com" target="_blank" class="btn btn-info">Twitter</a>
                <a href="https://instagram.com" target="_blank" class="btn btn-danger">Instagram</a>
            </div>
        </section>
                <div class="col-sm">
                    @auth
                        <img class="img-fluid"src="{{ asset('storage/'.Auth::user()->foto ) }}"  style="width: 150px; height: 150px;">
                    @endauth
                </div>
            
                <div class="col-sm">
                    @foreach($servicos as $servico)
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('storage/'.$servico->foto) }}" alt="Imagem de capa do card" >
                            <div class="card-body">
                                <h5 class="card-title"> {{ $servico->tipo_servico }}</h5>
                                <p class="card-text">{{ $servico->descricao }}</p>
                                <a href="#" class="btn btn-primary">Visitar</a>
                            </div>
                        </div>                 
                    @endforeach
                </div>

                
                <div class="col-sm">   
                    @guest            
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo">
                            Login
                        </button>  
                    @endguest             
                
                    @auth
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalExemplo">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                    {{ __('Sair') }}
                                </x-dropdown-link>
                            </form>        
                        </button>    
                    @endauth           
                </div>               

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
            </div>       
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>