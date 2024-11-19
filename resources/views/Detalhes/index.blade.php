<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Serviços de Beleza</title>
  <link rel="stylesheet" href="style.css">
  <style>
    /* style.css */
body {
  font-family: Arial, sans-serif;
  background-color: #f9f9f9;
  margin: 0;
  padding: 0;
}

header {
  background-color: #007BFF;
  color: white;
  text-align: center;
  padding: 20px 0;
}

h1 {
  margin: 0;
}

.servicos-container {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
  gap: 20px;
  padding: 20px;
  margin: 0 auto;
  max-width: 1200px;
}

.card-servico {
  background-color: #fff;
  border-radius: 8px;
  padding: 20px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  text-align: center;
}

.card-servico h3 {
  font-size: 22px;
  margin-bottom: 10px;
}

.card-servico p {
  font-size: 16px;
  margin-bottom: 20px;
}

.btn-comentario {
  padding: 10px 20px;
  background-color: #007BFF;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.btn-comentario:hover {
  background-color: #0056b3;
}

/* Modal Styles */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.4);
}

.modal-conteudo {
  background-color: #fff;
  margin: 15% auto;
  padding: 20px;
  border-radius: 8px;
  width: 80%;
  max-width: 400px;
}

.fechar {
  color: #aaa;
  font-size: 28px;
  font-weight: bold;
  position: absolute;
  right: 20px;
  top: 10px;
  cursor: pointer;
}

.fechar:hover,
.fechar:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

textarea {
  width: 100%;
  height: 100px;
  margin-bottom: 10px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

button {
  padding: 10px 20px;
  background-color: #28a745;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button:hover {
  background-color: #218838;
}

  </style>
</head>
<body>

  <header>
    <h1>Serviços de Beleza</h1>
  </header>

  <section class="servicos-container">
    <!-- Card Manicure -->
    <div class="card-servico">
      <h3>Manicure</h3>
      <p>Cuide das suas mãos com um serviço de manicure completo. Temos opções de esmaltes, tratamentos de hidratação e mais.</p>
      <button class="btn-comentario" onclick="abrirComentario()">Comentar</button>
    </div>

    <!-- Card Pedicure -->
    <div class="card-servico">
      <h3>Pedicure</h3>
      <p>Deixe seus pés impecáveis com nossos tratamentos de pedicure. Inclui esfoliação, hidratação e esmaltação.</p>
      <button class="btn-comentario" onclick="abrirComentario()">Comentar</button>
    </div>

    <!-- Card Depilação -->
    <div class="card-servico">
      <h3>Depilação</h3>
      <p>Depilação com cera quente ou fria, garantindo conforto e pele lisa por muito mais tempo.</p>
      <button class="btn-comentario" onclick="abrirComentario()">Comentar</button>
    </div>

    <!-- Card Banho de Lua -->
    <div class="card-servico">
      <h3>Banho de Lua</h3>
      <p>Tratamento que hidrata a pele, deixa um brilho dourado e prepara para a temporada de verão.</p>
      <button class="btn-comentario" onclick="abrirComentario()">Comentar</button>
    </div>

    <!-- Card Sobrancelha -->
    <div class="card-servico">
      <h3>Sobrancelha</h3>
      <p>Modelagem de sobrancelha com pinça ou design, para deixar o seu olhar ainda mais expressivo.</p>
      <button class="btn-comentario" onclick="abrirComentario()">Comentar</button>
    </div>
  </section>

  <!-- Modal de Comentário -->
  <div id="comentarioModal" class="modal">
    <div class="modal-conteudo">
      <span class="fechar" onclick="fecharComentario()">&times;</span>
      <h2>Deixe seu comentário</h2>
      <textarea id="comentarioTexto" placeholder="Digite seu comentário aqui..."></textarea>
      <button onclick="salvarComentario()">Enviar</button>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>
