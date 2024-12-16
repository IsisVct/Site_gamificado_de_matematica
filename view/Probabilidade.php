<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MathQuest - Probabilidade</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .content-box {
      background: #ffffff;
      border: 1px solid #dee2e6;
      border-radius: 8px;
      padding: 20px;
      margin-bottom: 20px;
    }

    .content-box h5 {
      font-size: 1.25rem;
      margin-bottom: 15px;
    }

    .content-box p {
      font-size: 1rem;
      margin-bottom: 10px;
    }

    .score {
      font-weight: bold;
      color: #007bff;
    }

    .btn-start {
      background-color: #007bff;
      color: #ffffff;
      border: none;
      padding: 10px 15px;
      border-radius: 5px;
      font-size: 1rem;
      cursor: pointer;
      text-align: center;
    }

    .btn-start:hover {
      background-color: #0056b3;
    }

    .navbar {
      margin-bottom: 20px;
    }

    .navbar-nav {
      margin-left: auto;
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="img/logo.png" alt="Bootstrap" width="40" height="40">
        <img src="img/logoNome.png" alt="Bootstrap" width="130" height="30">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="d-flex ms-auto">
          <ul class="nav-item me-2">
            <a class="nav-link active" aria-current="page" href="Principal.php">Home</a>
          </ul>
          <ul class="nav-item dropdown me-2">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Minha conta
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="perfil.php">Perfil</a></li>
              <li><a class="dropdown-item" href="#">Proguesso</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="config/logout.php">Sair</a></li>
            </ul>
          </ul>
        </form>
      </div>
    </div>
  </nav>

  <div class="container mt-5 pt-5">
    <h2 class="my-4">Probabilidade</h2>

    <div class="content-box">
      <h4><strong>Introdução</strong></h4><br>
      <p>A teoria da probabilidade é o campo da Matemática que estuda experimentos ou fenômenos aleatórios. Através dela, é possível analisar as chances de um determinado evento ocorrer.</p>
      <p>Um experimento aleatório é aquele que não é possível conhecer qual resultado será encontrado antes de realizá-lo.</p>
      <p>Quando calculamos a probabilidade, estamos associando um grau de confiança à ocorrência dos resultados possíveis de experimentos, cujos resultados não podem ser determinados antecipadamente. Assim, a probabilidade é a medida da chance de algo acontecer.</p>
      <p>O cálculo da probabilidade associa a ocorrência de um resultado a um valor que varia de 0 a 1 e, quanto mais próximo de 1 estiver o resultado, maior é a certeza da sua ocorrência.</p>
      <p>Um exemplo de experimento aleatório é jogar um dado para o alto. Ao cair, não é possível prever com total certeza qual das 6 faces estará voltada para cima.</p>
      <p>O cálculo da probabilidade é uma divisão entre a quantidade de casos favoráveis à ocorrência do evento e o total de casos possíveis.</p>
      <p>No exemplo do dado, se queremos conhecer a probabilidade da face 2 estar voltada para cima, este é o único caso favorável. O número total de casos possíveis é seis, por ser a quantidade de faces no dado.</p>
      <p>A probabilidade de sair a face 2 é:</p>
      <p>1 / 6 = 0,16666 …</p>
      <p>Em porcentagem, são aproximadamente 16,6%.</p>
      <p>Para facilitar o cálculo da probabilidade, podemos recorrer a uma fórmula que nos auxilia a organizar as informações.</p>
      <p><strong><li>Fórmula da Probabilidade</li></strong></p>
      <p>Em um fenômeno aleatório, as possibilidades de ocorrência de um evento são igualmente prováveis.</p>
      <p>Sendo assim, podemos encontrar a probabilidade de ocorrer um determinado resultado através da divisão entre o número de eventos favoráveis e o número total de resultados possíveis:</p>
      <p>Sendo:</p>
      <p>P(A): probabilidade da ocorrência de um evento A.</p>
      <p>N(A): número de casos favoráveis ou, que nos interessam (evento A).</p>
      <p>N(Ω): número total de casos possíveis.</p>
      <p>O resultado calculado também é conhecido como probabilidade teórica.</p>
      <p>Para expressar a probabilidade na forma de porcentagem, basta multiplicar o resultado por 100.</p>
      <ul>
        <li><strong>Lançamento de Moedas:</strong> Qual a probabilidade de uma moeda cair com a face "cara" para cima?</li>
        <li><strong>Previsão do Tempo:</strong> A chance de chover amanhã pode ser expressa como uma probabilidade.</li>
      </ul>
    </div>

    <div class="content-box">
      <h4><strong>Conceitos Básicos</strong></h4>
      <h6>Evento Aleatório</h6>
      <p>Um evento aleatório é um acontecimento cujo resultado não pode ser previsto com certeza, como o lançamento de um dado. A probabilidade de um resultado específico é o quociente entre o número de resultados favoráveis e o número total de resultados possíveis.</p>

      <h6>Espaço Amostral</h6>
      <p>O conjunto de todos os resultados possíveis de um experimento é chamado de espaço amostral. Por exemplo, no lançamento de um dado, o espaço amostral é \( S = \{1, 2, 3, 4, 5, 6\} \).</p>

      <h6>Probabilidade Clássica</h6>
      <p>A fórmula da probabilidade clássica é: <br> \[ P(E) = \frac{\text{número de resultados favoráveis}}{\text{número total de resultados}} \]</p>
      <p><strong>Exemplo Prático:</strong> Qual a probabilidade de tirar um número par ao lançar um dado? <br> O número de resultados favoráveis (2, 4, 6) é 3, e o número total de resultados possíveis é 6. Logo, a probabilidade é \( P(E) = \frac{3}{6} = 0,5 \).</p>
    </div>

    <div class="content-box">
      <h5><strong>Exemplo</strong></h5>
      <p>Se lançarmos um dado perfeito, qual a probabilidade de sair um número menor que 3?</p>
      <p><i>Resolução</i></p>
      <p>Sendo o dado perfeito, todas as 6 faces têm a mesma chance de caírem voltadas para cima. Vamos então, aplicar a fórmula da probabilidade.</p>
      <p>Para isso, devemos considerar que temos 6 casos possíveis (1, 2, 3, 4, 5, 6) e que o evento “sair um número menor que 3” tem 2 possibilidades, ou seja, sair o número 1 ou 2. Assim, temos:</p>
      <p>Para responder na forma de uma porcentagem, basta multiplicar por 100.</p>
      <p>Portanto, a probabilidade de sair um número menor que 3 é de 33%.</p><br>
    </div>

    <div class="content-box">
      <h5>Aplicações Práticas</h5>
      <p>A probabilidade é aplicada em diversas áreas como estatística, economia, engenharia, medicina, entre outras, para ajudar a prever eventos e tomar decisões com base em dados e incertezas.</p>
    </div>
    <div class="content-box" style=" padding:15px">
      <h4><strong>Assista ao Vídeo:</strong></h4>
      <div class="d-flex justify-content-center" style=" padding:15px">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/dbEsBe-wqco?si=44x_aCIg2wnCO8xH" frameborder="0"
          allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <p class="mt-3"><strong>Referência:</strong> Vídeo de "PROBABILIDADE | APRENDA AGORA!" disponível em <a href="https://youtu.be/XVPo3mD3LIU" target="_blank">YouTube</a>.</p>
      <p><strong>Créditos:</strong> Canal Dicasdemat Sandro Curió, 2024.</p>
    </div>
    <div class="content-box">
        <a class="btn btn-secondary btn-sm" href="quiz_probabilidade.php">Iniciar Quizz</a>
    </div>
 </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
