<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedbacks - Estética Glam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 30px;
        }
        .container {
            max-width: 1200px;
            margin: auto;
        }
        .feedback-card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            padding: 20px;
        }
        .feedback-card h3 {
            margin-top: 0;
        }
        .btn-custom {
            background-color: #007bff;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            margin-top: 10px;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="feedback-card">
        <h3>Deixe seu Feedback</h3>
        <form action="/enviar-feedback" method="POST">
            <div class="mb-3">
                <label for="feedback" class="form-label">Seu Comentário</label>
                <textarea class="form-control" id="feedback" name="feedback" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label">Avaliação</label>
                <select class="form-control" id="rating" name="rating" required>
                    <option value="1">1 - Muito Ruim</option>
                    <option value="2">2 - Ruim</option>
                    <option value="3">3 - Regular</option>
                    <option value="4">4 - Bom</option>
                    <option value="5">5 - Excelente</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Enviar Feedback</button>
        </form>
    </div>


    <div class="container">
        <h1 class="text-center mb-5">Índice de Feedbacks</h1>

        <!-- Card de Agendamento -->
        <div class="feedback-card">
            <h3>1. Agendamento</h3>
            <p>Avaliações sobre o processo de agendamento. Facilidade, tempo de espera, disponibilidade de horários, etc.</p>
            <a href="#agendamento" class="btn-custom">Ver Agendamentos</a>
        </div>

        <!-- Card de Feedbacks -->
        <div class="feedback-card">
            <h3>2. Feedbacks</h3>
            <p>Comentários gerais dos clientes sobre a experiência na Estética Glam, incluindo opinião sobre os serviços e ambiente.</p>
            <a href="#feedbacks" class="btn-custom">Ver Feedbacks</a>
        </div>

        <!-- Card de Serviço -->
        <div class="feedback-card">
            <h3>3. Serviço</h3>
            <p>Avaliação dos serviços oferecidos: qualidade, eficácia, resultados, atendimento, etc.</p>
            <a href="#servico" class="btn-custom">Ver Serviços</a>
        </div>

        <!-- Card de Profissional -->
        <div class="feedback-card">
            <h3>4. Profissional</h3>
            <p>Avaliações sobre os profissionais da Estética Glam: cortesia, competência, conhecimento, etc.</p>
            <a href="#profissional" class="btn-custom">Ver Profissionais</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
