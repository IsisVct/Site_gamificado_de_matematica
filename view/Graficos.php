<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MathQuest - Gráficos e Tabelas</title>
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
        <img src="img/logo.png" alt="Logo" width="40" height="40">
        <img src="img/logoNome.png" alt="Nome" width="130" height="30">
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
    <h2 class="my-4">Gráficos e Tabelas</h2>

    <div class="content-box">
      <h4><strong>Introdução</strong></h4>
      <p>Gráficos são representações visuais de dados, como coluna, linha, pizza e área. Eles desempenham um papel
        essencial no cotidiano, sendo encontrados em jornais, revistas e internet.</p>
      <p>Sua compreensão é fundamental, especialmente em exames como concursos, vestibulares e Enem, que o utilizam com
        frequência.</p>
      <p>São ferramentas visuais que ajudam a mostrar padrões, tendências e comparações em dados quantitativos e
        qualitativos ao longo do tempo. São amplamente empregados em várias áreas de estudo, como matemática,
        estatística, geografia, economia e história, para facilitar a interpretação e tornar os dados mais acessíveis.
      </p>
    </div>

    <div class="content-box">
      <h4><strong>Tipos de Gráficos</strong></h4><br>
      <h5><strong>Gráfico de Coluna</strong></h5>
      <p>São conhecidos também como "Gráfico de Barra", sendo usados para comparar quantidades ou mesmo demonstrar
        valores pontuais de determinado período.</p>
      <p>Podem surgir de duas maneiras, tais como Horizontal e Vertical.</p>
      <p><strong>
          <li>Horizontal</li>
        </strong></p>
      <img src="./img/Grafico_Barra_Horizontal.png">
      <p><strong>
          <li>Vertical</li>
        </strong></p>
      <img src="./img/Grafico_Barra_Vertical.png" style="width: 350px;"><br>

      <h5><strong>Gráfico de Linha</strong></h5>
      <p>Também chamado de "Gráfico de Segmento", ele é usado para apresentar valores (sequência numérica) em
        determinado espaço de tempo. Ou seja, mostra as evoluções ou diminuições de algum fenômeno.</p>
      <img src="./img/Grafico_Linha.jpg" style="width: 350px;"><br><br>

      <h5><strong>Gráfico Pizza</strong></h5>
      <p>Também chamado de "Gráfico de Setores”, esse modelo recebe esse nome, pois tem a forma de uma pizza, ou seja, é
        circular. Eles são utilizados para reunir valores a partir de um todo, segundo o conceito de proporcionalidade.
      </p>
      <img src="./img/Grafico_Pizza.png" style="width: 350px"><br><br>

      <h5><strong>Gráfico de Área</strong></h5>
      <p>Esse tipo de gráfico é utilizado para demonstrar as alterações ou comparar valores ao longo de um tempo. Ele é
        formado por um conjunto de linhas e pontos, onde a área é preenchida.</p>
      <img src="./img/Grafico_Area.png" style="width: 350px;"><br><br>

      <h5><strong>Histograma</strong></h5>
      <p>O Histograma é uma ferramenta de análise de dados que apresenta diversos retângulos justapostos (barras
        verticais).</p>
      <p>Por esse motivo, ele se assemelha ao gráfico de colunas, entretanto, o histograma não apresenta espaço entre
        barras.</p>
      <img src="./img/Histograma.jpg" style="width: 350px;"><br><br>
      <p>Ele é muito utilizado na área de estatística, sendo um importante indicador para a distribuição de dados.</p>
      <p>Segundo sua representação gráfica, eles são classificados em:</p>
      <p><strong>
          <li>Histogramas Simétricos:</li>
        </strong>Composto de uma frequência mais alta (no centro) e que gradualmente vai diminuindo conforme se aproxima
        nas bordas.</p>
      <p><strong>
          <li>Histogramas Assimétricos:</li>
        </strong>Apresenta somente um ponto mais alto, sendo que o resto dos retângulos são assimétricos.</p>
      <p><strong>
          <li>Histograma Despenhadeiro:</li>
        </strong>Nesse tipo, a representação parece incompleta, ao ser usado quando alguns dados são eliminados.</p>
      <p><strong>
          <li>Histograma com Dois Picos:</li>
        </strong>Nesse caso, temos duas análises de dados distintas que apresentam dois picos (pontos maiores).</p>
      <p><strong>
          <li>Histograma Platô:</li>
        </strong>No centro da figura nota-se a aproximação das frequências, formando uma figura menos desigual.</p>
      <p><strong>
          <li>Histogramas Retângulos Isolados:</li>
        </strong>Também chamado de "ilha isolada", esse caso de histograma apresenta lacunas, que por sua vez, indicam
        uma anormalidade ou erros no processo.</p><br><br>

      <h5><strong>Infográficos</strong></h5>
      <p>Os infográficos representam a união de uma imagem com um texto informativo. As imagens podem conter alguns
        tipos de gráficos.</p>
      <img src="./img/Infografico.jpg" style="width: 350px;"><br><br>

      <h5><strong>Diagrama</strong></h5>
      <p>Os diagramas são tipos de representações gráficas, que demonstram, por exemplo, um esquema de maquete. Também
        são usados para simplificar uma ideia ou conceito, e, portanto, facilitam na interpretação do tema.</p>
      <p>Geralmente, incluem linhas, setas, desenhos, etc. São muito utilizados na área das estatísticas e
        administração.</p>
      <img src="./img/Diagrama.png" style="width 350px;"><br><br>

      <h5><strong>Elementos Gráficos</strong></h5>
      <p><strong>
          <li>Título:</li>
        </strong>Geralmente possuem um título a respeito da informação que será apresentada.</p>
      <p><strong>
          <li>Fonte:</li>
        </strong>Muitos gráficos, sobretudo os da área de estatística, apresentam a fonte, ou seja, de onde as
        informações foram retiradas. Também podem apresentar o ano de publicação da fonte referida.</p>
      <p><strong>
          <li>Números:</li>
        </strong>Estes são essenciais para comparar as informações dadas pelos gráficos. A maioria deles utilizam
        números, seja para indicar quantidade ou tempo (mês, ano, trimestre).</p>
      <p><strong>
          <li>Legenda:</li>
        </strong>Grande parte dos gráficos apresentam legendas que auxiliam na leitura das informações apresentadas.
        Junto a ela, cores que destacam diferentes informações, dados ou períodos, são utilizados.</p><br><br>
      <p>Falando sobre tabelas, elas são utilizadas para organizar algumas informações ou dados. Da mesma forma que os
        gráficos, elas facilitam o entendimento, por meio de linhas e colunas que separam os dados</p>
      </p>Sendo assim, são usadas para melhor visualização de informações em diversas áreas do conhecimento.</p>
    </div>

    <div class="content-box">
      <h4><strong>Importância das Tabelas</strong></h4>
      <p>As tabelas organizam dados de maneira que seja fácil de ler e analisar. Elas podem apresentar valores
        numéricos, categorias e suas relações em um formato estruturado.</p>
    </div>

    <div class="content-box">
      <h4><strong>Exemplo:</strong></h4>
      <p>(Enem-2012) O dono de uma farmácia resolveu colocar à vista do público o gráfico mostrado a seguir, que
        apresenta a evolução do total de vendas (em Reais) de certo medicamento ao longo do ano de 2011.</p>
      <img src="./img/Grafico_Exemplo.png" style="width: 350px;">
      <p>De acordo com o gráfico, os meses em que ocorreram, respectivamente, a maior e a menor vendas absolutas em 2011
        foram:</p>
      <p>a) março e abril.</p>
      <p>b) março e agosto.</p>
      <p>c) agosto e setembro.</p>
      <p>d) junho e setembro.</p>
      <p>e) junho e agosto.</p><br>
      <p><strong>Solução:</strong>e) junho e agosto.</p>
      <p>O gráfico da imagem é do tipo linha, onde nas abscissas (eixo horizontal), estão registrados o tempo em meses.
        No eixo vertical, estão registrados os valores das vendas em Reais.</p>
      <p>É possível observar que o ponto mais alto é o do mês de junho, enquanto o mais baixo, agosto.</p>
    </div>

    <div class="content-box">
      <h4></strong>Aplicações Práticas</strong></h4>
      <p>Gráficos e tabelas são utilizados em diversas áreas, como estatística, ciência, economia e educação, para
        facilitar a comunicação de dados e a tomada de decisões.</p>

    </div>
    <div class="content-box" style=" padding:15px">
      <h4><strong>Assista ao Vídeo:</strong></h4>
      <div class="d-flex justify-content-center" style=" padding:15px">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/XzZGAwfKs_k?si=RMSHhe_wF_Yu5XNF"
          frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>
      </div>
      <p class="mt-3"><strong>Referência:</strong> Vídeo de "Matemática | Gráficos e Tabelas para o ENEM | Semana da
        matemática" disponível em <a href="https://youtu.be/XzZGAwfKs_k?si=DEas_45-S43BT4Ya"
          target="_blank">YouTube</a>.</p>
      <p><strong>Créditos:</strong> Canal Dicasdemat Sandro Curió, 2019.</p>
    </div>
    <div class="content-box">
      <a class="btn btn-secondary btn-sm" href="quiz_graficos.php">Iniciar Quizz</a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>