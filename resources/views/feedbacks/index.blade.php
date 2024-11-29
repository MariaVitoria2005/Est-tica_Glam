<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedbacks - Estética Glam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CDN do Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
    /* Estilos do card */
    .feedback-card {
        max-width: 700px;
        margin: 30px auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
    }

    /* Título do card */
    .feedback-card h2 {
        font-family: 'Helvetica', sans-serif;
        color: #444;
        text-align: center;
        font-size: 2rem;
        margin-bottom: 20px;
    }

    /* Estilos para os campos de entrada */
    .form-control {
        font-size: 1rem;
        padding: 15px;
        border-radius: 8px;
        border: 1px solid #ddd;
        margin-bottom: 20px;
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    .form-control:focus {
        border-color: #f39c12;
        box-shadow: 0 0 5px rgba(243, 156, 18, 0.5);
        outline: none;
    }

    /* Estilos das estrelas de avaliação */
    #rating-stars-service .star, #rating-stars-profissional .star {
        font-size: 2rem;
        color: #ddd;
        cursor: pointer;
        transition: color 0.3s ease;
    }

    #rating-stars-service .star.selected, #rating-stars-profissional .star.selected {
        color: #f39c12;
    }

    #rating-stars-service .star:hover, #rating-stars-profissional .star:hover {
        color: #f39c12;
    }

    /* Estilos para os botões */
    .btn-primary {
        background-color: #f39c12;
        border-color: #e67e22;
        font-size: 1.2rem;
        padding: 12px 30px;
        border-radius: 8px;
        width: 100%;
        text-transform: uppercase;
        transition: background-color 0.3s ease, transform 0.3s ease;
        margin-bottom: 15px; /* Adiciona o espaçamento entre os botões */
    }

    .btn-primary:hover {
        background-color: #e67e22;
        border-color: #d35400;
        transform: translateY(-2px);
    }

    .btn-primary:focus {
        outline: none;
        box-shadow: 0 0 5px rgba(243, 156, 18, 0.5);
    }

    /* Estilo para a legenda de cada campo */
    .form-label {
        font-weight: 600;
        font-size: 1rem;
        color: #555;
        margin-bottom: 10px;
    }

    /* Layout do card */
    .container {
        max-width: 100%;
    }

    /* Efeito de hover para as estrelas */
    #rating-stars-service .star:hover, #rating-stars-profissional .star:hover {
        transform: scale(1.2);
    }

    /* Ajuste para o layout das estrelas */
    .d-flex {
        justify-content: center;
        gap: 10px;
    }

    /* Distância entre as avaliações */
    .mb-4 {
        margin-bottom: 30px;
    }

    /* Card container */
    .feedback-card {
        background-color: #f9f9f9;
    }

    /* Botão de Voltar */
    .btn-voltar {
        background-color: #f39c12; /* Cor de fundo azul */
        color: #fff; /* Cor do texto (branco) */
        padding: 12px 30px;
        font-size: 1.1rem;
        font-weight: 600;
        border-radius: 10px; /* Borda arredondada */
        display: inline-flex;
        align-items: center;
        text-decoration: none; /* Remove o sublinhado do link */
        transition: all 0.3s ease-in-out;
        box-shadow: 0 4px 10px rgba(52, 152, 219, 0.2); /* Sombra suave */
        margin-top: 10px; /* Espaçamento entre o botão de envio e o de voltar */
    }

    /* Efeito de Hover */
    .btn-voltar:hover {
        transform: translateY(-3px); /* Eleva o botão ao passar o mouse */
        box-shadow: 0 6px 15px rgba(52, 152, 219, 0.3); /* Sombra mais forte */
    }

    /* Efeito no ícone */
    .btn-voltar i {
        font-size: 1.3rem;
        margin-right: 10px;
        transition: transform 0.3s ease; /* Suaviza a rotação do ícone */
    }

    /* Efeito de hover no ícone */
    .btn-voltar:hover i {
        transform: rotate(-180deg); /* Rotaciona o ícone quando o botão é hoverado */
    }

    /* Ajustes para foco e acessibilidade */
    .btn-voltar:focus {
        outline: none;
        box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
    }
</style>

</head>
<body>

    <!-- Card de Feedback -->
<section id="deixar-feedback" class="feedback-card">

    <h2>Deixe sua opinião</h2>
    <form action="{{ route('feedback.store') }}" method="POST" id="feedback-form">
        @csrf

        <!-- Nome do Cliente -->
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Seu nome">
        </div>

        <!-- E-mail -->
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Seu e-mail">
        </div>

        <!-- Comentário sobre o serviço -->
        <div class="mb-4">
            <label for="comentario" class="form-label">Comentário sobre o serviço</label>
            <textarea class="form-control" id="comentario" name="comentario" rows="4" placeholder="Deixe seu comentário sobre o serviço" required></textarea>
        </div>

        <!-- Avaliação do serviço -->
        <div class="mb-4">
            <label for="avaliacao" class="form-label">Avaliação do serviço</label>
            <div id="rating-stars-service" class="d-flex">
                <span class="star" data-value="1">&#9733;</span>
                <span class="star" data-value="2">&#9733;</span>
                <span class="star" data-value="3">&#9733;</span>
                <span class="star" data-value="4">&#9733;</span>
                <span class="star" data-value="5">&#9733;</span>
            </div>
            <input type="hidden" id="avaliacao-service" name="avaliacao_service" value="" required>
        </div>

        <!-- Comentário sobre o profissional -->
        <div class="mb-4">
            <label for="comentario-profissional" class="form-label">Comentário sobre o profissional</label>
            <textarea class="form-control" id="comentario-profissional" name="comentario_profissional" rows="4" placeholder="Deixe seu comentário sobre o profissional" required></textarea>
        </div>

        <!-- Avaliação do profissional -->
        <div class="mb-4">
            <label for="avaliacao-profissional" class="form-label">Avaliação do profissional</label>
            <div id="rating-stars-profissional" class="d-flex">
                <span class="star" data-value="1">&#9733;</span>
                <span class="star" data-value="2">&#9733;</span>
                <span class="star" data-value="3">&#9733;</span>
                <span class="star" data-value="4">&#9733;</span>
                <span class="star" data-value="5">&#9733;</span>
            </div>
            <input type="hidden" id="avaliacao-profissional" name="avaliacao_profissional" value="" required>
        </div>

        <!-- Botão de Envio -->
        <button type="submit" class="btn btn-primary">Enviar Feedback</button>
        
        <!-- Botão de Voltar -->
        <a href="/" class="btn-voltar">
            <i class="fa fa-arrow-left"></i> Voltar à Página Principal
        </a>

    </form>
</section>

<!-- Script de Interatividade das Estrelas -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Função para atualizar as estrelas
        function updateStars(stars, selectedIndex) {
            stars.forEach((star, index) => {
                if (index < selectedIndex) {
                    star.classList.add('selected');
                } else {
                    star.classList.remove('selected');
                }
            });
        }

        // Função para configurar as estrelas
        function setupRating(starContainerId, inputFieldId) {
            const stars = document.querySelectorAll(`#${starContainerId} .star`);
            const hiddenInput = document.getElementById(inputFieldId);

            stars.forEach(star => {
                star.addEventListener('click', function() {
                    const selectedValue = parseInt(star.getAttribute('data-value'));
                    updateStars(stars, selectedValue);
                    hiddenInput.value = selectedValue;
                });

                star.addEventListener('mouseover', function() {
                    const hoveredIndex = parseInt(star.getAttribute('data-value'));
                    updateStars(stars, hoveredIndex);
                });

                star.addEventListener('mouseleave', function() {
                    const currentValue = hiddenInput.value ? parseInt(hiddenInput.value) : 0;
                    updateStars(stars, currentValue);
                });
            });
        }

        setupRating('rating-stars-service', 'avaliacao-service');
        setupRating('rating-stars-profissional', 'avaliacao-profissional');
    });
</script>

</body>
</html>
