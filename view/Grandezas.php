<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MathQuest - Grandezas Proporcionais</title>
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
            <a class="nav-link dropdown-toggle" href="perfil.php" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Minha conta
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="perfil.php">Perfil</a></li>
              <li><a class="dropdown-item" href="#">Proguesso</a></li>
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

  <!-- Conteúdo Principal -->
  <div class="container mt-5 pt-5">
    <h2 class="my-4">Grandezas Proporcionais</h2>

    <div class="content-box">
      <h4><strong>Introdução</strong></h4>
      <p>Uma grandeza é o referencial que consegue ser usado para comparar diversas medidas. As grandezas físicas mais
        conhecidas e usadas no cotidiano são o comprimento, ou a distância, a massa (conhecida também como peso), a
        velocidade e o volume. Conseguimos realizar razões entre as medidas de duas grandezas distintas e, quando duas
        dessas razões são iguais, as grandezas são chamadas de proporcionais, dando para separá-las por Diretamente ou
        Inversamente proporcionais de acordo com o comportamento observado em uma delas em relação a uma variação na
        medida da outra. </p>
      <p><strong>Exemplos do Dia a Dia:</strong></p>
      <ul>
        <li><strong>Receitas de Culinária:</strong> Dobrar a receita para mais pessoas, dobra a quantidade de cada
          ingrediente.</li>
        <li><strong>Distância e Tempo:</strong> A velocidade constante implica que o tempo para percorrer uma distância
          é proporcional à distância.</li>
      </ul>
    </div>

    <div class="content-box">
      <h4><strong>Tipos de Proporcionalidade</strong></h4><br>

      <h5><strong>Grandezas diretamente proporcionaiss</strong></h5>
      <p>Duas grandezas são chamadas de diretamente proporcionais quando o aumento na medida de uma delas causa um
        aumento na medida da outra na mesma proporção, ou quando uma redução na medida de uma das grandezas causa uma
        redução na medida da outra na mesma proporção.</p>
      <p><strong>Exemplos Práticos:</strong></p>
      <p><i>Exemplo 1:</i>Velocidade e Distância: Se você viaja a uma velocidade constante, a distância percorrida é
        proporcional ao tempo. Por exemplo, se você dirige a 60 km/h, em 2 horas você percorrerá 120 km. Se dobrar o
        tempo para 4 horas, a distância percorrida também dobrará para 240 km. Assim, a distância percorrida e o tempo
        são grandezas proporcionais quando a velocidade é constante.</p>
      <p><i>Exemplo 2:</i>Área de um Quadrado e o Lado: A área de um quadrado é proporcional ao quadrado do comprimento
        do lado. Se você tem um quadrado com um lado de 2 metros, sua área é 4 m² (2²). Se o lado é 4 metros, a área
        será 16 m² (4²). Portanto, a área e o comprimento do lado são grandezas proporcionais quando consideramos o
        quadrado do lado.</p>

      <h5><strong>Grandezas inversamente proporcionais </strong></h5>
      <p>Ocorre quando o aumento na medida de uma das grandezas causa uma redução na medida da outra, e vice-versa.</p>
      <p><strong>Exemplos Práticos:</strong></p>
      <p><i>Exemplo 1:</i>Velocidade e Tempo de Viagem: Se a distância a ser percorrida é fixa, a velocidade e o tempo
        de viagem são inversamente proporcionais. Por exemplo, se você viaja uma distância de 100 km, e a sua velocidade
        é de 50 km/h, o tempo necessário para a viagem é de 2 horas (100 km / 50 km/h). Se você aumentar a velocidade
        para 100 km/h, o tempo necessário para percorrer a mesma distância será reduzido para 1 hora (100 km / 100
        km/h). Portanto, quanto maior a velocidade, menor o tempo necessário, e vice-versa.</p>
      <p><i>Exemplo 2:</i>Número de Trabalhadores e Tempo para Concluir um Trabalho: Se um grupo de trabalhadores
        realiza uma tarefa em um tempo fixo, o número de trabalhadores e o tempo necessário para concluir o trabalho são
        inversamente proporcionais. Por exemplo, se 4 trabalhadores podem terminar uma tarefa em 8 horas, aumentando o
        número de trabalhadores para 8, o tempo necessário para concluir a tarefa será reduzido para 4 horas, assumindo
        que todos trabalhem com a mesma eficiência. Assim, mais trabalhadores significam menos tempo para concluir a
        tarefa.</p><br>
      <p><i>
          <li>A regra de três é uma maneira de usar a propriedade fundamental das proporções para determinar uma das
            quatro medidas de duas grandezas, quando se têm noção das outras três. Seu modo de encontrar essa medida não
            é o mesmo para grandezas diretamente proporcionais e inversamente proporcionais. Quando duas grandezas são
            proporcionais, aplicam essa propriedade fundamental sobre uma proporção para encontrar a medida que falta.
          </li>
        </i></p>
    </div>

    <div class="content-box">
      <h4><strong>Exemplo:</strong></h4><br>
      <p>Uma moto realizou um percurso a 50 km/h e, em determinado período de tempo, percorra 350 km. Quantos
        quilômetros percorreria se sua velocidade fosse 86 km/h? </p>
      <p><strong>Solução:</strong><br>350/x <br>50/86<br>50.x= 350.86<br>50.x= 30,100<br>x=30,100/50<br>x= 602 km.<br>
      </p>
    </div>

    <div class="content-box" style=" padding:25px">
      <h4><strong>Aplicações Práticas</strong></h4>
      <p>Matemática, Ciências, Economia, Engenharia, e Educação utilizam conceitos de proporcionalidade para resolver
        problemas e fazer previsões.</p>


    </div>
    <div class="content-box" style=" padding:15px">
      <h4><strong>Assista ao Vídeo:</strong></h4>
      <div class="d-flex justify-content-center" style=" padding:15px">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/XVPo3mD3LIU" frameborder="0"
          allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <p class="mt-3"><strong>Referência:</strong> Vídeo de "GRANDEZAS DIRETAMENTE E INVERSAMENTE PROPORCIONAIS |
        DIVISÃO" disponível em <a href="https://youtu.be/XVPo3mD3LIU" target="_blank">YouTube</a>.</p>
      <p><strong>Créditos:</strong> Canal Dicasdemat Sandro Curió, 2023.</p>
    </div>
    <div class="content-box">
      <a class="btn btn-secondary btn-sm" href="quiz_grandezas.php">Iniciar Quizz</a>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>