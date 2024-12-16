<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MathQuest - Funções</title>
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
    <h2 class="my-4">Funções</h2>

    <div class="content-box">
      <h4><strong>Introdução</strong></h4>
      <p>Na Matemática, função corresponde a uma associação dos elementos de dois conjuntos, ou seja, a função indica como os elementos estão relacionados.</p>
      <p>Por exemplo, uma função de A em B significa associar cada elemento pertencente ao conjunto A a um único elemento que compõe o conjunto B, sendo assim, um valor de A não pode estar ligado a dois valores de B.</p>
      <p>Notação para função: f: A → B (lê-se: f de A em B).</p>

      <ul>
        <li><strong>Cálculo de Salário:</strong> O salário de um trabalhador pode ser calculado como uma função do número de horas trabalhadas.</li>
        <li><strong>Previsões Meteorológicas:</strong> A temperatura de um dia pode ser uma função da hora do dia.</li>
      </ul>
    </div>

    <div class="content-box">
      <h4><strong>Representação</strong></h4>
      <p>Em uma função f: A → B o conjunto A é chamado de domínio (D) e o conjunto B recebe o nome de contradomínio (CD).</p>
      <p>Um elemento de B relacionado a um elemento de A recebe o nome de imagem pela função. Agrupando todas as imagens de B temos um conjunto imagem, que é um subconjunto do contradomínio.</p>
      <p>Exemplo: observe os conjuntos A = {1, 2, 3, 4} e B = {1, 2, 3, 4, 5, 6, 7, 8}, com a função que determina a relação entre os elementos f: A → B é x → 2x. Sendo assim, f(x) = 2x e cada x do conjunto A é transformado em 2x no conjunto B.</p>
      <p>Note que o conjunto de A {1, 2, 3, 4} são as entradas, “multiplicar por 2” é a função e os valores de B {2, 4, 6, 8}, que se ligam aos elementos de A, são os valores de saída.</p>
      <p>Portanto, para essa função:
      <p><strong>-O domínio é {1, 2, 3, 4}</strong></p>
      <p><strong>-O contradomínio é {1, 2, 3, 4, 5, 6, 7, 8}</strong></p>
      <p><strong>-O conjunto imagem é {2, 4, 6, 8}</strong></p>

    </div>

    <div class="content-box">
      <h4><strong>Tipos de Funções</strong></h4>
      <p>As funções recebem classificações de acordo com suas propriedades. Confira a seguir os principais tipos.</p><br>

      <p><strong><li>Função sobrejetora</li></strong></p>
      <p>Na função sobrejetora o contradomínio é igual ao conjunto imagem. Portanto, todo elemento de B é imagem de pelo menos um elemento de A.</p>
      <p>Notação: f: A → B, ocorre a Im(f) = B</p><br>

      <p><strong><li>Função injetora</li></strong></p>
      </p>Na função injetora todos os elementos de A possuem correspondentes distintos em B e nenhum dos elementos de A compartilham de uma mesma imagem em B. Entretanto, podem existir elementos em B que não estejam relacionados a nenhum elemento de A.</p><br>

      <p><strong><li>Função bijetora</li></strong></p>
      <p>Na função biejtora os conjuntos apresentam o mesmo número de elementos relacionados. Essa função recebe esse nome por ser ao mesmo tempo injetora e sobrejetora.</p><br>

      <p><strong><li>Função inversa</li></strong></p>
      <p>A função inversa é um tipo de função bijetora, por isso é sobrejetora e injetora ao mesmo tempo.</p>
      <p>Através desse tipo de função é possível criar novas funções ao inverter os elementos.</p><br>

      <p><strong><li>Função par</li></strong></p>
      <p>Uma função é par quando f(-x) = f(x). Assim a função possui a mesma imagem, tanto para x quanto para -x.</p><br>

      <p><strong><li>Função ímpar</li></strong></p>
      <p>Uma função é ímpar quando f(-x) = -f(x). O gráfico de uma função ímpar é simétrico em relação à origem.</p><br>

      <p><strong><li>Função composta</li></strong></p>
      <p>A função composta é um tipo de função matemática que combina duas ou mais variáveis.</p>
      <p>Duas funções, f e g, podem ser representadas como função composta por:</p>
      <p>Fog (x) = f(g(x))</p>
      <p>Gof (x) = g(f(x))</p><br>

      <p><strong><li>Função modular</li></strong></p>
      <p>A função modular associa elementos em módulos e seus números são sempre positivos.</p><br>

      <p><strong><li>Função afim</li></strong></p>
      <p>A função afim, também chamada de função do 1º grau, apresenta uma taxa de crescimento e um termo constante.</p>
      <p>F(x) = ax + b</p>
      <p>A: coeficiente angular</p>
      <p>B: coeficiente linear</p><br>

      <p><strong><li>Função linear</li></strong></p>
      <p>A função linear é um caso particular da função afim, sendo definida como f(x) = ax.</p>
      <p>Quando o valor do coeficiente (a) que acompanha o x da função for igual a 1, a função linear é uma função identidade.</p><br>

      <p><strong><li>Função quadrática</strong/li></p>
      <p>A função quadrática é também chamada de função do 2º grau.</p>
      <p>F(x) = ax2+ bx + c, sendo a ≠ 0</p>
      <p>A, b e c: coeficientes da função polinomial de grau 2.</p><br>


      <p><strong><li>Função logarítmica</li></strong></p>
      <p>A função logarítmica de base a é representada por f(x) = loga x, sendo a real positivo e a ≠ 1.</p>
      <p>Ao invertermos a função logarítmica passamos a ter uma função exponencial.</p><br>

      <p><strong><li>Função exponencial</li></strong></p>
      <p>A função exponencial apresenta uma variável no expoente e a base é sempre maior que zero e diferente de um.</p>
      <p>F(x) = ax, sendo a > 0 e a ≠ 0</p><br>

      <p><strong><li>Função polinomial</li></strong></p>
      <p>A função polinomial é definida por expressões polinomiais.</p>
      <p>F(x) = na . xn + na – 1 . xn – 1 + ...+a2 . x2 + a1 . x + a0</p>
      <p>Na, na-1, ... , a2, a1, a0: números complexos</p>
      <p>N: número inteiro</p>
      <p>X: variável complexa</p><br>

      <p><strong><li>Funções trigonométricas</li></strong></p>
      <p>As funções trigonométricas estão relacionadas com as voltas no ciclo trigonométrico, como:</p>
      <p>Função Seno: f(x) = sem x</p>
      <p>Função Cosseno:f(x) = cos x</p>
      <p>Função Tangente: f(x) = tg x</p><br>

      <p><strong><li>Gráfico de uma função</li></strong></p>
      <p>A maneira como um elemento y se relaciona com um elemento x é expressa através de um gráfico, que nos dá a ideia do comportamento da função.</p>
      <p>Cada ponto no gráfico é dado por um par ordenado de x e y, onde x é o valor de entrada e y é o resultado da relação definida pela função, ou seja, x → função → y.</p>
      <p>Para construir um gráfico, cada elemento x da função deve ser inserido no eixo horizontal (abcissas) e os elementos y são posicionados no eixo vertical (ordenadas).</p>
      <p>Os possíveis valores de x formam o conjunto Domínio. Já o conjunto dos valores assumidos por y, formam o conjunto imagem.</p>

    </div>

    <div class="content-box">
      <h5>Aplicações Práticas</h5>
      <p>Funções são amplamente utilizadas em diversas áreas, como Física, Economia, Engenharia e Ciências da Computação para modelar comportamentos e prever resultados.</p>
    </div>
    <div class="content-box" style=" padding:15px">
      <h4><strong>Assista aos Vídeos:</strong></h4>
      <h5 style="margin-top:20px"><strong >Função do 1º Grau</strong></h5>
      <div class="d-flex justify-content-center" style=" padding:15px">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/nysu0K-VXR8?si=v8AMwie7R8C4Wa9u"
          frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>
      </div>
      <p class="mt-3"><strong>Referência:</strong> Vídeo de "Rápido e Fácil | Função do 1º grau | Função afim" disponível em <a
          href="https://youtu.be/XzZGAwfKs_k?si=DEas_45-S43BT4Ya" target="_blank">YouTube</a>.</p>
      <p><strong>Créditos:</strong> Canal Dicasdemat Sandro Curió, 2019.</p>
    
    <h5 style="margin-top:20px"><strong >Função do 2º Grau</strong></h5>
      <div class="d-flex justify-content-center" style=" padding:15px">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/7r7DDHnQpqc?si=fQHfnsj4__SIqavf"
          frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>
      </div>
      <p class="mt-3"><strong>Referência:</strong> Vídeo de "Aprenda Função do 2º Grau I Função Quadrática | Gráfico" disponível em <a
          href="https://youtu.be/XzZGAwfKs_k?si=DEas_45-S43BT4Ya" target="_blank">YouTube</a>.</p>
      <p><strong>Créditos:</strong> Canal Dicasdemat Sandro Curió, 2018.</p>
    </div>
    <div class="content-box">
        <a class="btn btn-secondary btn-sm" href="quiz_funcoes.php">Iniciar Quizz</a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
