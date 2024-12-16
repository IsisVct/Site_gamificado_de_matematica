<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MathQuest - Geometria Plana</title>
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
              <li><a class="dropdown-item" href="#">Progresso</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="../config/logout.php">Sair</a></li>
            </ul>
          </ul>
        </form>
      </div>
    </div>
  </nav>

  <div class="container mt-5 pt-5">
    <h2 class="my-4">Geometria Plana</h2>

    <div class="content-box">
      <h4><strong>Introdução</strong></h4>
      <p>A geometria plana ou euclidiana é a parte da matemática que estuda as figuras que não possuem volume.</p>
      <p>A geometria plana também é chamada de euclidiana, uma vez que seu nome representa uma homenagem ao geômetra Euclides de Alexandria, considerado o “pai da geometria”.</p>
      <p>Curioso notar que o termo geometria é a união das palavras “geo” (terra) e “metria” (medida); assim, a palavra geometria significa a “medida de terra”.</p>
    </div>

    <div class="content-box">
      <h4><strong>Conceitos</strong></h4>
      <p>Alguns conceitos são de suma importância para o entendimento da geometria plana, a saber:</p><br>
      <p><strong><li>Ponto</li></strong></p>
      <p>Conceito adimensional, uma vez que não possui dimensão. Os pontos determinam uma localização e são indicados com letras maiúsculas.</p><br>

      <p><strong><li>Reta</li></strong></p>
      <p>A reta, representada por letra minúscula, é uma linha ilimitada unidimensional (possui o comprimento como dimensão) e pode se apresentar em três posições:</p>
      <p>-horizontal</p>
      <p>-vertical</p>
      <p>-inclinada</p>
      <p>Dependendo da posição das retas, quando elas se cruzam, ou seja, possuem um ponto em comum, são chamadas de retas concorrentes.</p>
      <p>Por outro lado, as que não possuem ponto em comum, são classificadas como retas paralelas.</p><br>

      <p><strong><li>Segmento de Reta</li></strong></p>
      <p>Diferente da reta, o segmento de reta é limitado pois corresponde a parte entre dois pontos distintos.</p>
      <p>A semirreta é limitada somente num sentido, visto que possui início e não possui fim.</p><br>

      <p><strong><li>Plano</li></strong></p>
      <p>Corresponde a uma superfície plana bidimensional, ou seja, possui duas dimensões: comprimento e largura. Nessa superfície que se formam as figuras geométricas.</p><br>

      <p><strong><li>Ângulos<l/i></strong></p>
      <p>Os ângulos são formados pela união de dois segmentos de reta, a partir de um ponto comum, chamado de vértice do ângulo. São classificados em:</p>
      <p>ângulo reto (Â = 90º)</p>
      <p>ângulo agudo (0º)</p>
      <p>ângulo obtuso (90º)</p><br>

      <p><strong><li>Área</li></strong></p>
      <p>A área de uma figura geométrica expressa o tamanho de uma superfície. Assim, quanto maior a superfície da figura, maior será sua área.</p>

      <p><strong><li>Perímetro</li></strong></p>
      <p>O perímetro corresponde a soma de todos os lados de uma figura geométrica.</p>

    </div>

    <div class="content-box">
      <h5>Exemplos Detalhados</h5>
      <h6>Área de Triângulos</h6>
      <p><strong>Problema:</strong> Qual é a área de um triângulo com base de 5 cm e altura de 8 cm? <br> <strong>Solução:</strong> A fórmula da área do triângulo é \( A = \frac{base \times altura}{2} \), então \( A = \frac{5 \times 8}{2} = 20 \) cm².</p>

      <h6>Área e Perímetro de um Retângulo</h6>
      <p><strong>Problema:</strong> Calcule a área e o perímetro de um retângulo de comprimento 6 cm e largura 4 cm. <br> <strong>Solução:</strong> A área é \( A = comprimento \times largura = 6 \times 4 = 24 \) cm². O perímetro é \( P = 2 \times (comprimento + largura) = 2 \times (6 + 4) = 20 \) cm.</p>

      <h6>Cálculo da Circunferência</h6>
      <p><strong>Problema:</strong> Qual é o comprimento da circunferência de um círculo com raio de 7 cm? <br> <strong>Solução:</strong> A fórmula do comprimento da circunferência é \( C = 2\pi r \), então \( C = 2\pi \times 7 = 14\pi \approx 43,96 \) cm.</p>
    </div>

    <div class="content-box">
      <h4>Figuras da Geometria Plana</h4>
      <h5><strong><li>Triângulo</li></strong></h5>
      <img src="./img/Geometria_Plana_Triangulo.png" style="width: 350px;">
      <p>Polígono (figura plana fechada) de três lados, o triângulo é uma figura geométrica plana formada por três segmentos de reta.</p>
      <p>Segundo a forma dos triângulos, eles são classificados em:</p>
      <p><strong>-triângulo equilátero:</strong> possui todos os lados e ângulos internos iguais (60°);</p>
      <p><strong>-triângulo isósceles:</strong> possui dois lados e dois ângulos internos congruentes;</p>
      <p><strong>-triângulo escaleno:</strong> possui todos os lados e ângulos internos diferentes.</p>
      <p>No tocante aos ângulos que formam os triângulos, eles são classificados em:</p>
      <p><strong>-triângulo retângulo:</strong> possui um ângulo interno de 90°;</p>
      <p><strong>-triângulo obtusângulo:</strong> possui dois ângulos agudos internos, ou seja, menor que 90°, e um ângulo obtuso interno, maior que 90°;</p>
      <p><strong>-triângulo acutângulo:</strong> possui três ângulos internos menores que 90°.</p>
      <p>Saiba mais sobre os triângulos com a leitura dos artigos:</p>
      <p><strong>Classificação dos Triângulos</strong></p>
      <p><strong>Área do Triângulo</strong></p>
      <p><strong>Trigonometria no Triângulo Retângulo</strong></p><br>

      <h5><strong><li>Quadrado</li></strong></h5>
      <img src="./img/Geometria_Plana_Quadrado.png" style="width: 350px;">
      <p>Polígono de quatro lados iguais, o quadrado ou quadrilátero é uma figura geométrica plana que possuem os quatro ângulos congruentes: retos (90°).</p>
      <p>Saiba mais sobre o tema com a leitura dos artigos:</p>
      <p><strong>-Perímetro do Quadrado</strong></p>
      <p><strong>-Área do Quadrado</strong></p>
      <p><strong>-Quadriláteros</strong></p><br>

      <h5><strong><li>Retângulo</li></strong></h5>
      <img src="./img/Geometria_Plana_Retangulo.png" style="width: 350px;">
      <p>Figura geométrica plana marcada por dois lados paralelos no sentido vertical e os outros dois paralelos, no horizontal. Assim, todos os lados do retângulo formam ângulos reto (90°).</p>
      <p>Confira os artigos sobre retângulo:</p>
      <p><strong>-Retângulo</strong></p>
      <p><strong>-Área do Retângulo</strong></p>
      <p><strong>-Perímetro do Retângulo</strong></p><br>

      <h5><strong><li>Círculo</li></strong></h5>
      <img src="./img/Geometria_Plana_Circulo.png" style="width: 350px;">    
      <p>Figura geométrica plana caracterizada pelo conjunto de todos os pontos de um plano. O raio ® do círculo corresponde a medida da distância entre o centro da figura até sua extremidade.</p>
      <p>Veja também os artigos:</p>
      <p><strong>-Área do Círculo</strong></p>
      <p><strong>-Perímetro do Círculo</strong></p><br>

      
      <h5><strong><li>Trapézio</li></strong></h5>
      <img src="./img/Geometria_Plana_Trapezio.png" style="width: 350px;">
      <p>Chamado de quadrilátero notável, pois a soma dos seus ângulos internos corresponde a 360º, o trapézio é uma figura geométrica plana.</p>
      <p>Ele possui dois lados e bases paralelas, donde uma é maior e outra menor. São classificados em:</p>
      <p><strong>-trapézio retângulo: possui dois ângulos de 90º;</strong></p>
      <p><strong>trapézio isósceles ou simétrico: os lados não paralelos possuem a mesma medida;</strong></p>
      <p><strong>trapézio escaleno: todos os lados de medidas diferentes.</strong></p><br>

      
      <h5><strong><li>Losango</li></strong></h5>
      <img src="./img/Geometria_Plana_Losango.jpg" style="width: 350px;">
      <p>Quadrilátero equilátero, ou seja, formado por quatro lados iguais, o losango, com o quadrado e o retângulo, é considerado um paralelogramo.</p>
      <p>Ou seja, é um polígono de quatro lados os quais possuem lados e ângulos opostos congruentes e paralelos.</p>

      <br>

    </div>
    <div class="content-box" style=" padding:15px">
        <h4><strong>Assista ao Vídeo:</strong></h4>
        <div class="d-flex justify-content-center" style=" padding:15px">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/EzGf1UEnnsY?si=gCkY-sekuN-zvJu-"
            frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
        </div>
        <p class="mt-3"><strong>Referência:</strong> Vídeo de "GEOMETRIA PLANA | ENEM | REVISÃO" disponível em <a href="https://youtu.be/XzZGAwfKs_k?si=DEas_45-S43BT4Ya"
            target="_blank">YouTube</a>.</p>
        <p><strong>Créditos:</strong> Canal Dicasdemat Sandro Curió, 2019.</p>
      </div>
    </div>
    <div class="content-box">
        <a class="btn btn-secondary btn-sm" href="quiz_geo_plana.php">Iniciar Quizz</a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
