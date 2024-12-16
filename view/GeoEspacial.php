<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MathQuest - Geometria Espacial</title>
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

  <div class="container mt-5 pt-5">
    <h2 class="my-4">Geometria Espacial</h2>

    <div class="content-box">
      <h4><strong>Introdução</strong></h4>
      <p>Geometria Espacial é a área da matemática que estuda figuras em três dimensões, como cubos, esferas, cilindros
        e pirâmides. Diferente da geometria plana, onde analisamos formas bidimensionais, aqui lidamos com volume e
        áreas superficiais.</p>
      <p>Corresponde a área da matemática que se encarrega de estudar as figuras no espaço, ou seja, aquelas que possuem
        mais de duas dimensões. De modo geral, a Geometria Espacial pode ser definida como o estudo da geometria no
        espaço. Assim, tal qual a Geometria Espacial, ela está pautada nos conceitos basilares e intuitivos que chamamos
        “conceitos primitivos” os quais possuem origem na Grécia Antiga e na Mesopotâmia (Cerca de 100 anos a.C.).</p>
      <p>Pitágoras e Platão associavam o estudo da Geometria Espacial ao estudo da Metafísica e da religião, contudo,
        foi Euclides a se consagrar com sua obra “Elementos”, onde sintetizou os conhecimentos acerca do tema até os
        seus dias.</p>
      <p><strong>Exemplos no Mundo Real:</strong></p>
      <ul>
        <li><strong>Arquitetura:</strong> Construções utilizam formas tridimensionais como cubos e cilindros para
          projetar edifícios.</li>
        <li><strong>Engenharia:</strong> Modelos tridimensionais são usados para projetar peças e estruturas com
          precisão.</li>
      </ul>
    </div>

    <div class="content-box">
      <h4><strong>Características da Geométria Espacial</strong></h4>
      <p>Estuda os objetos que possuem mais de uma dimensão e ocupam lugar no espaço. Por sua vez, esses objetos são
        conhecidos como “sólidos geométricos” ou ‘figuras geométricas espaciais”, por exemplo:</p>
      <p>-Prisma</p>
      <p>-Cubo</p>
      <p>-Paralelepípedo</p>
      <p>-Pirâmide</p>
      <p>-Cone</p>
      <p>-Cilindro</p>
      <p>-Volume do Cilindro</p>
      <p>-Esfera</p>
      <p>Dessa forma, a geometria espacial é capaz de determinar, por meio de cálculos matemáticos, o volume destes
        mesmos objetos, ou seja, o espaço ocupado por eles.</p>
      <p>Contudo, o estudo das estruturas das figuras espaciais e suas inter-relações é determinado por alguns conceitos
        básicos, a seguir:</p>

      <p><strong>-Ponto:</strong> Conceito fundamental a todos os subsequentes, uma vez que todos sejam, em última
        análise, formados por inúmeros pontos. Por sua vez, os pontos são infinitos e não possuem dimensão mensurável
        (adimensional). Portanto, sua única propriedade garantida é sua localização.</p>
      <p><strong>-Reta:</strong> Composta por pontos, é infinita nos dois lados e determina a distância mais curta entre
        dois pontos determinados.</p>
      <p><strong>-Linha:</strong> Possui algumas semelhanças com a reta, pois é igualmente infinita para cada lado,
        contudo, têm a propriedade de formar curvas e nós sobre si mesma.</p>
      <p><strong>-Plano:</strong> É outra estrutura infinita que se estende em todas as direções.</p><br>

      <p><strong>
          <li>Figuras geométricas espaciais.</li>
        </strong></p>
      <p>Segue abaixo algumas das figuras geométricas espaciais mais conhecidas:</p><br>

      <p><strong>-Cubo</strong></p>
      <p>O cubo é um hexaedro regular composto de 6 fases quadrangulares, 12 arestas e 8 vértices sendo:</p>
      <p>Área Lateral: 4a2</p>
      <p>Área Total: 6a2</p>
      <p>Volume: a.a.a= a3</p><br>

      <p><strong>-Dodecaedro</strong></p>
      <p>O Dodecaedro é um poliedro regular composto de 12 faces pentagonais, 30 arestas e 20 vértices sendo:</p>
      <p>Área Total: 3√25+10√5a2</p>
      <p>Volume: 1/4 (15+7√5) a3</p><br>

      <p><strong>-Tetraedro</strong></p>
      <p>O Tetraedro é um poliedro regular composto de 4 fazes triangulares, 6 arestas e 4 vértices sendo:</p>
      <p>Área total: 4a2√3/4</p>
      <p>Volume: 1/3 Ab.h</p><br>

      <p><strong>-Octaedro</strong></p>
      <p>O octaedro regular é formado por 12 arestas, 6 vértices e 8 faces. Suas faces possuem o fomato de um triângulo
        equilátero.</p>
      <p>Área total: A=2a^2√3</p>
      <p>Volume: V= 1/3a^3√2</p><br>

      <p><strong>-Paralelepípedo</strong></p>
      <p>O paralelepípedo é formado por 6 faces retangulares, 12 arestas e 8 vértices. Diferente do cubo, as medidas das
        arestas do comprimento, da largura e da altura, não possuem necessariamente a mesma medida.</p>
      <p>Área total: 2(L.c + L.a + c.a)</p>
      <p>Volume: L.c.a
      <p><br>

      <p><strong>-Prisma</strong></p>
      <p>O Prisma é um poliedro composto por duas faces paralelas que formam as bases, que por sua vez, podem ser
        triangulares, quadrangulares, pentagonais, hexagonais ou, qualquer outro polígono.</p>
      <p>Além das bases, o prima é composto de altura, lados, vértices e arestas unidos por paralelogramos. De acordo
        com sua inclinação, os prismas podem ser retos, aqueles onde a aresta e a base fazem um ângulo de 90°, ou os
        oblíquos, compostos de ângulos diferentes de 90°.</p>
      <p>Área total: 2.Abase+Alargura</p>
      <p>Volume: Abase.h</p><br>

      <p><strong>-Prisma triangular</strong></p>
      <p>É o prisma cujas bases são triângulos.</p>
      <p>Área total: 2.abse.2√3 +3.abase.h</p>
      <p>Volume: abase.2√3.h/4</p><br>

      <p><strong>-Prisma hexagonal</strong></p>
      <p>É o prisma onde a base é um hexágono.</p>
      <p>Área total: A = 2Ah + 6Ar</p>
      <p>Volume: V= 3/2 x2 √3.</p><br>

      <p><strong>-Pirâmide</strong></p>
      <p>A pirâmide é um poliedro composto por uma base (triangular, pentagonal, quadrada, retangular, paralelogramo) e
        um vértice (vértice da pirâmide) que une todas as faces laterais triangulares.</p>
      <p>Sua altura corresponde a distância entre o vértice e sua base. Quanto à sua inclinação podem ser classificadas
        em retas (ângulo de 90°) ou oblíquas (ângulos diferentes de 90°).</p>
      <p>Área total: Ab = l^2</p>
      <p>Volume: V = A x h / 3</p><br>

      <p><strong>-Cilindro</strong></p>
      <p>Sendo, r o raio da base e h a altura.</p>
      <p>Área total: Atotal= 2.Abase+Alateral</p>
      <p>Abase= pi.r^2</p>
      <p>Alateral= 2.pi.r.h</p>
      <p>Volume: V= pi.r^2. h</p><br>

      <p><strong>-Esfera</strong></p>
      <p>A esfera é um sólido geométrico de forma arredondada, não sendo um poliedro.</p>
      <p>Área total: A= 4.pi.r^2</p>
      <p>Volume: V= 4/3pi.r^3</p><br>

      <p><strong>-Cone</strong></p>
      <p>O cone é um sólido de revolução formado por uma base circular e um ponto fora desta base. O ponto que não
        pertence ao plano da base é o vértice do cone.</p>
      <p>área total: Alateral= pi.r.g</p>
      <p>Abase=pi.r^2</p>
      <p>Volume: V= pi.r^2.h///3
      <p><br>

      <p><strong>-Sólidos de Platão</strong></p>
      <p>Os sólidos platônicos são poliedros especias, eles são formados por faces iguais. Todas as faces destes sólidos
        são polígonos regulares.</p>

    </div>

    <div class="content-box">
      <h4><strong>Aplicações Práticas</strong></h4>
      <p>Geometria Espacial é amplamente utilizada em áreas como arquitetura, design industrial, e computação gráfica,
        onde o cálculo de volume e área superficial é fundamental para o desenvolvimento de produtos e estruturas.</p>
    </div>
    <div class="content-box" style=" padding:15px">
      <h4><strong>Assista ao Vídeo:</strong></h4>
      <div class="d-flex justify-content-center" style=" padding:15px">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Y_gD7S6OkC4?si=ktwTwKSBXk6b6lQd"
          frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>
      </div>
      <p class="mt-3"><strong>Referência:</strong> Vídeo de "Geometria Espacial I Revisão Completa" disponível em <a
          href="https://youtu.be/XzZGAwfKs_k?si=DEas_45-S43BT4Ya" target="_blank">YouTube</a>.</p>
      <p><strong>Créditos:</strong> Canal Dicasdemat Sandro Curió, 2018.</p>
    </div>
    <div class="content-box">
      <a class="btn btn-secondary btn-sm" href="quiz_geoespacial.php">Iniciar Quizz</a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>