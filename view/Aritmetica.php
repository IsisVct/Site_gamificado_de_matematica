<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MathQuest - Aritmética</title>
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
    <h2 class="my-4">Aritmética</h2>

    <div class="content-box">
      <h4><strong>Introdução</strong></h4>
      <p>A aritmética é o ramo da matéria que estuda as operações numéricas desde suas formas mais simples, como soma, subtração, divisão e multiplicação. A origem da palavra remete à “ciência dos números”.</p><br>
      

      <p><strong><li>Número e valores posicionais na aritmética</li></strong></p>
      <p>Os números são maneiras simbólicas e matemáticas de representar valores. No sistema decimal de numeração, com apenas 10 algarismos (1,2,3,4,5,6,7,8,9,0) é possível escrever infinitos valores.</p>
      <p>Isso é possibilitado pelo conceito de valor posicional. O número 1, posicionado nas unidades, vale um. Se ele estiver na “casinha” das dezenas, vale 10. Na asa dos milhares, vale 1000 e assim sucessivamente.</p><br>

      <p><strong><li>Conjuntos numéricos</li></strong></p>
      <p>Os conjuntos numéricos são formas de organizar os números conforme suas características, seja pelo fato de serem positivos ou negativos, pela sua capacidade de ser dividido ou não, entre outros tópicos.</p>
      <p>- Conjunto dos números naturais: IN = {0, 1, 2, 3, 4, 5...}, como a contagem que aprendemos na alfabetização primária;</p>
      <p>- Número inteiros Z = {-3, -2, -1, 0, 1, 2, 3, 4...}, possui os números naturais e também os valores negativos;</p>
      <p>- Os elementos do conjunto dos números racionais possuem a propriedade de divisão, podem ser fracionários e/ou dízimas periódicas — Q = {...-1, -½, 0, ½, 1, 3/2…};</p>
      <p>- Os números irracionais são aqueles que formam dízimas não periódicas, raízes não exatas (√5 e √7) e o valor de PI (?), por exemplo;</p>
      <p>- Os números reais agrupam todos os valores citados acima, sendo um conjunto genérico — de forma que entre um número real e outro podem ser contados infinitos valores.</p><br>

      <p><strong><li>Operações básicas de aritmética</li></strong></p>
      <p>As operações básicas da aritmética são soma, subtração, divisão e multiplicação. A partir desses cálculos é possível desenvolver diversas expressões matemáticas úteis para o cotidiano.</p>
      <p>No momento das compras, por exemplo, a adição dos valores é a principal ferramenta matemática utilizada. Quando dois itens iguais são comprados, você pode multiplicar o preço da unidade e encontrar o valor gasto naquela aquisição.</p>
      <p>No dia a dia, a divisão pode estar presente num passeio com os amigos, quando a conta é dividida entre todos. Nesse caso, é necessário pegar o valor total e fazer com que a soma da parcela de todos os colegas resulte nele. A subtração, então, seria o quanto ainda se deve ao restaurante depois que 3 dos 5 amigos pagaram sua parte. </p><br>

      <p><strong><li>Soma</li></strong></p>
      <p>Como já foi citado anteriormente e é de conhecimento geral, a soma ou adição trabalha com a acumulação dos valores. Ela possui algumas propriedades especiais que são listadas abaixo.</p>
      <p>-São comutativas, ou seja, a ordem das parcelas não altera o valor final (5+8= 8+5);</p>
      <p>-Também apresentam propriedades associativas, quando existem três ou mais parcelas, qualquer ordem também não altera o resultado (5+8+7= 8+7+5);</p>
      <p>-Existe um elemento neutro (0) que não muda os resultados independentemente de onde ele se encontra na soma (15+0= 15);</p>
      <p>-A adição permite a existência de um elemento oposto. Valore opostos, quando somados, resultam em 0 (12+(-12) = 0).</p><br>

      <p><strong><li>Subtração</li></strong></p>
      <p>A subtração fornece a diferença de valores entre dois números. Eles são chamados de minuendo (de quem está sendo subtraído) e subtraendo (o que está sendo subtraído).</p>
      <p>No exemplo 10-7=3, temos que 10 é o minuendo, 7 é o subtraendo e 3 é a diferença ou resto encontrado na subtração dos dois valores.</p> 
      <p>Algumas propriedades dessa operação aritmética estão listadas abaixo:</p>
      <p>-A subtração não possui elemento neutro porque apresenta resultados graves divergentes dependendo da posição do zero.</p>
      <p>4-0= 4</p>
      <p>0-4= -4;</p>
      <p>-A subtração de dois números do mesmo conjunto numérico não necessariamente resultado em um valor dentro daquele mesmo conjunto</p>
      <p>40-57= -17</p>
      <p>40 e 57 são naturais e -17 é um valor inteiro;</p>
      <p>-A distribuição associativa de três ou mais parcelas não pode ser aplicada à subtração</p>
      <p>100=30-25= 65</p>
      <p>100- (30-25) = 100- (-5) = 105</p><br>

      <p><strong><li>Multiplicação</li></strong></p>
      <p>A operação aritmética de multiplicação é aquela que fornece o resultado da soma de um número muitas vezes. De forma que 4+4+4+4+4+4 é igual a somar seis vezes o número 4, ou seja, 4x6.</p>
      <p>Uma das propriedades mais marcantes da multiplicação é que ela é comutativa e associativa, de forma que alterar a ordem dos atores multiplicativos não altera o resultado final. Seja a expressão numérica de dois ou mais termos. O elemento neutro da multiplicação é 1, porque qualquer número multiplicado por 1 é igual a ele mesmo.</p>
      
      <p><strong><li>Divisão</li></strong></p>
      <p>A divisão é a operação inversa à multiplicação. Dessa forma, ela trata sobre "em quantas partes iguais é possível separar esse valor?" Veja a seguir, as principais propriedades das divisões.</p>
      <p>-Elas não são uma ferramenta aritmética comutativa. Assim, 6/2 ≠ 2/6;</p>
      <p>-Não possuem características associativas 20÷ (5÷2) ≠ (20÷5) ÷2;</p>
      <p>-Não existe divisão por 0, ou seja, x÷0= ∄;</p>
      <p>-Se o dividendo for igual a 0, a resposta da divisão sempre será 0. 0÷x=0;</p>
      <p>-Todo número dividido por 1 é igual a ele mesmo, como um elemento neutro, como em x÷1= x.</p><br>

      <p><strong><li>Priorização das operações aritméticas</li></strong></p>
      <p>Uma expressão algébrica pode possuir cálculos aditivos, subtrativos, multiplicativos ou divisórios. A priorização das operações fornece uma série de regras que devem ser seguidas para saber por onde começar as contas.</p>
      <p>Diferente dos padrões de leitura normal, da esquerda para a direita, a matemática segue outros princípios.</p>
      <p>-A multiplicação e a divisão devem ser feitas em primeiro lugar, na ordem em que aparecem;</p>
      <p>-Se houverem parênteses, as operações em colchetes devem ser concluídas;</p>
      <p>-As chaves são os últimos símbolos priorizados nessa lista. </p>
      <p>Lembre-se: Apesar de dar prioridade às expressões dentro desses símbolos, a multiplicação e a divisão dentro deles também deve acontecer primeiro. Veja a resolução do exercício abaixo para elucidar melhor:</p>
      <p>8 + 15 - 4 x 3</p>
      <p>4x3= 12 </p>
      <p>8 + 15 - 12</p>
      <p>8 + 15 = 23</p>
      <p>23 - 12 = 11</p>
      <p>x=11</p><br>



      <p><strong>Exemplos no Mundo Real:</strong></p><br>
      <ul>
          <li><strong>Finanças:</strong> Calcular o troco ao fazer compras, somar despesas mensais ou calcular descontos.</li>
          <li><strong>Construção:</strong> Medir e calcular áreas e volumes para determinar a quantidade de materiais necessários.</li>
      </ul>
    </div>

    <div class="content-box">
      <h5>Aplicações Práticas</h5>
      <p>Aritmética é amplamente usada em diversas áreas, como finanças, comércio, engenharia e na vida cotidiana, onde realizar operações rápidas e precisas é essencial.</p>
    </div>
       <div class="content-box" style=" padding:15px">
      <h4><strong>Assista aos Vídeos:</strong></h4>
      <h5 style="margin-top:20px"><strong >Progressão Aritmética</strong></h5>
      <div class="d-flex justify-content-center" style=" padding:15px">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/poyvpdAC4xI?si=lDgwB19mUwAA8O3K"
          frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>
      </div>
      <p class="mt-3"><strong>Referência:</strong> Vídeo de "APRENDA PROGRESSÃO ARITMÉTICA EM 8 MINUTOS" disponível em <a
          href="https://youtu.be/XzZGAwfKs_k?si=DEas_45-S43BT4Ya" target="_blank">YouTube</a>.</p>
      <p><strong>Créditos:</strong> Canal Dicasdemat Sandro Curió, 2023.</p>
    
    <h5 style="margin-top:20px"><strong >Progressão Geométrica</strong></h5>
      <div class="d-flex justify-content-center" style=" padding:15px">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/haKrC4quHj8?si=3DVDE_qchoTkL-9K"
          frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>
      </div>
      <p class="mt-3"><strong>Referência:</strong> Vídeo de "PROGRESSÃO GEOMÉTRICA | TERMO GERAL | SOMA DA P.G" disponível em <a
          href="https://youtu.be/XzZGAwfKs_k?si=DEas_45-S43BT4Ya" target="_blank">YouTube</a>.</p>
      <p><strong>Créditos:</strong> Canal Dicasdemat Sandro Curió, 2024.</p>

      <h5 style="margin-top:20px"><strong >Sistema de equações</strong></h5>
      <div class="d-flex justify-content-center" style=" padding:15px">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/tBU853Fh4e8?si=mfe3KCIm7yl7_mHU"
          frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>
      </div>
      <p class="mt-3"><strong>Referência:</strong> Vídeo de "SISTEMA DE EQUAÇÕES DO 1º GRAU | MÉTODO DA ADIÇÃO" disponível em <a
          href="https://youtu.be/XzZGAwfKs_k?si=DEas_45-S43BT4Ya" target="_blank">YouTube</a>.</p>
      <p><strong>Créditos:</strong> Canal Dicasdemat Sandro Curió, 2023.</p>
    </div>
    <div class="content-box">
        <a class="btn btn-secondary btn-sm" href="quiz_funcoes.php">Iniciar Quizz</a>
    </div>
  </div>

 </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
