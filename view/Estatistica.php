<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MathQuest - Estatísticas</title>
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
    <h2 class="my-4">Estatísticas</h2>

    <div class="content-box">
      <h4><strong>Introdução</strong></h4>
      <p>Estatística é uma área da matemática que tem por objetivo levantar dados de determinado fenômeno ou população, assim, relacionando fatos e números.</p>
      <p>A estatística é a área da matemática responsável pela contagem e pela organização de dados.</p>
      <p>A estatística é o campo da matemática que relaciona fatos e números em que há um conjunto de métodos que nos possibilita coletar dados e analisá-los, assim sendo possível realizar alguma interpretação deles. A estatística é dividida em duas partes: descritiva e inferencial. A estatística descritiva é caracterizada pela organização, análise e apresentação dos dados, enquanto a estatística inferencial tem como característica o estudo de uma amostra de determinada população e, com base nela, a realização de análises e a apresentação de dados.</p>
      <p><strong>Exemplos no Cotidiano:</strong></p>
      <ul>
        <li><strong>Pesquisa de Opinião:</strong> As estatísticas ajudam a interpretar os resultados de pesquisas de opinião pública.</li>
        <li><strong>Análise de Dados:</strong> Empresas usam estatísticas para entender o comportamento dos consumidores e otimizar suas estratégias.</li>
      </ul>
    </div>

    <div class="content-box">
      <h4><strong>Princípios da Estatístico</strong></h4><br>
      <p>Veremos, a seguir, os principais conceitos e princípios da estatística. Com base neles, será possível definir conceitos mais sofisticados.</p><br>

      <p><strong><li>População ou universo estatístico</li></strong></p>
      <p>A população ou universo estatístico é o conjunto formado por todos elementos que participam de um determinado tema pesquisado.</p><br>

      <p><strong><li>Dados Estatísticos</li></strong></p>
      <p>O dado estatístico é um elemento que pertence ao conjunto da população, obviamente esse dado deve estar envolvido com o tema da pesquisa.</p><br>

      <p><strong><li>Amostra</li></strong></p>
      <p>Chamamos de amostra o subconjunto formado com base no universo estatístico. Uma amostra é utilizada quando a população é muito grande ou infinita. Em casos em que coletar todas as informações do universo estatístico é inviável por motivos financeiros ou logísticos, também se faz necessário a utilização de amostras.</p>
      <p>A escolha de uma amostra é de extrema importância para uma pesquisa, e ela deve representar de maneira fidedigna a população. Um exemplo clássico da utilização das amostras em uma pesquisa é na realização do censo demográfico do nosso país.</p><br>

      <p><strong><li>Variável</li></strong></p>
      <p>Em estatística, a variável é o objeto de estudo, isto é, o tema que a pesquisa pretende estudar. Por exemplo, ao estudar-se as características de uma cidade, o número de habitantes pode ser uma variável, assim como o volume de chuva em determinado período ou até mesmo a quantidade de ônibus para o transporte público. Note que o conceito de variável em estatística é dependente do contexto da pesquisa.</p>
      <p>A organização dos dados em estatística dá-se em etapas, como em todo processo de organização. Inicialmente é escolhido o tema a ser pesquisado, em seguida, é pensado o método para a coleta dos dados da pesquisa, e o terceiro passo é a execução da coleta. Após o fim dessa última etapa, faz-se a análise do que foi coletado, e assim, com base na interpretação, busca-se resultados. Veremos, agora, alguns conceitos importantes e necessários para a organização dos dados.</p><br>

      <p><strong><li>Rol</li></strong></p>
      <p>Em casos em que os dados podem ser representados por números, ou seja, quando a variável é quantitativa, utiliza-se o rol para organização desses dados. Um rol pode ser crescente ou decrescente. Caso uma variável não seja quantitativa, ou seja, caso seja qualitativa, não é possível utilizar-se o rol, por exemplo, se os dados são sentimentos sobre determinado produto.</p><br>

      <p><strong><li>Tabela de distribuição de frequência</li></strong></p>
      <p>Em casos nos quais há muitos elementos no rol e muitas repetições de dados, o rol torna-se obsoleto, pois a organização desses dados é inviável. Nesses casos, as tabelas e a distribuição de frequências servem como uma excelente ferramenta de organização.</p>
      <p>Na tabela de distribuição de frequência absoluta, devemos colocar a frequência em que cada dado aparece, ou seja, a quantidade de vezes que ele aparece.</p><br>
      
      <p><strong><li>Classes</li></strong></p>
      <p>Em casos em que a variável é contínua, isto é, quando ela possui diversos valores, é necessário agrupá-los em intervalos reais. Na estatística esses intervalos são chamados de classes.</p>
      <p>Para construir a tabela de distribuição de frequências em classes, devemos colocar os intervalos na coluna da esquerda, com seu devido título, e na coluna da direita, devemos colocar a frequência absoluta de cada um dos intervalos, ou seja, quantos elementos pertencem a cada um deles.</p><br>

      <p><strong><li>Mediana</li></strong></p>
      <p>A mediana é dada pelo elemento central de um rol que possui uma quantidade ímpar de elementos. Caso o rol possua uma quantidade par de elementos, devemos considerar os dois elementos centrais e calcular a média aritmética entre eles.</p><br>

      <p><strong><li>Divisões Estatíticas</li></strong></p>
      <p>A estatística é dividida em duas partes, descritiva e inferencial. A primeira está relacionada à contagem dos elementos envolvidos na pesquisa, esses elementos são contados um a um. Na estatística descritiva, temos como principais ferramentas as medidas de posição, como média, mediana e moda, assim como as medidas de dispersão, como variância e desvio-padrão, temos também tabelas de frequências e gráficos.</p>
      <p>Ainda na estatística descritiva, temos uma metodologia muito bem definida para uma apresentação de dados com grau considerável de confiabilidade que passa por organização e coleta, resumo, interpretação e representação e, por fim, análise de dados. Um exemplo clássico da utilização da estatística descritiva ocorre na realização do censo populacional (de 10 em 10 anos) pelo Instituto Brasileiro de Geografia e Estatística (IBGE).</p>
      <p>A estatística inferencial, por sua vez, é caracterizada não por coletar dados dos elementos de uma população um a um, e sim por realizar a análise de uma amostra dessa população, tirando conclusões sobre ela. Na estatística inferencial, deve-se tomar cuidado na escolha da amostra, pois ela deve representar muito bem a população. Alguns resultados iniciais, como calculo de média, na estatística inferencial chamado de esperança, são deduzidos com base nos conhecimentos da estatística descritiva.</p>
      <p>A estatística inferencial é utilizada, por exemplo, nas pesquisas eleitorais. Escolhe-se uma amostra da população, de forma que a represente, e assim é realizada a pesquisa. Na escolha de uma amostra que não represente muito bem essa população, dizemos que a pesquisa é tendenciosa e, por consequência, não confiável.</p><br>

    </div>

    <div class="content-box">
      <h4><strong>Medidas de Dispersão</strong></h4>
      <h6>Amplitude</h6>
      <p>A amplitude é a diferença entre o maior e o menor valor de um conjunto de dados.</p>
      <p><strong>Exemplo:</strong> Se as notas de uma turma variam de 5 a 9, a amplitude é \( 9 - 5 = 4 \).</p>

      <h6>Desvio Padrão</h6>
      <p>O desvio padrão mede o quanto os dados se desviam, em média, da média do conjunto.</p>
      <p><strong>Exemplo:</strong> Se os salários de uma empresa têm um desvio padrão de R$500, significa que, em média, os salários variam R$500 em torno da média salarial.</p>
    </div>

    <div class="content-box">
      <h4><strong>Aplicações Práticas</strong></h4>
      <p>Estatísticas são usadas para prever tendências econômicas, analisar padrões de comportamento e realizar testes científicos, entre muitas outras aplicações.</p>
    </div>
    <div class="content-box" style=" padding:15px">
      <h4><strong>Assista ao Vídeo:</strong></h4>
      <div class="d-flex justify-content-center" style=" padding:15px">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/mSk2vjGXA90?si=Oi10qo3aMMqexRZG"
          frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>
      </div>
      <p class="mt-3"><strong>Referência:</strong> Vídeo de "ESTATÍSTICA | Média | Moda | Mediana I Desvio Padrão" disponível em <a
          href="https://youtu.be/XzZGAwfKs_k?si=DEas_45-S43BT4Ya" target="_blank">YouTube</a>.</p>
      <p><strong>Créditos:</strong> Canal Dicasdemat Sandro Curió, 2019.</p>
    </div>
    <div class="content-box">
        <a class="btn btn-secondary btn-sm" href="quiz_estatistica.php">Iniciar Quizz</a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
