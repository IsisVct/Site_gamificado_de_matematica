<?php
require_once '../config/session.php';
require_once '../model/User.php'; 

if (!isset($_SESSION['user_email'])) {
    header('Location: login.html');
    exit();
}

require_once '../config/DataBase.php';
$database = new Database();
$db = $database->getConnection();

$user = new User($db);

$user_email = $_SESSION['user_email'];

$user_data = $user->getUserByEmail($user_email);

if ($user_data) {
    $xp_grandezas = $user_data['XP_grandezas'];
    $xp_graficos = $user_data['XP_graficos'];
    $xp_aritmetica = $user_data['XP_aritmetica'];
    $xp_geoespacial = $user_data['XP_geoespacial'];
    $xp_funcoes = $user_data['XP_funcoes'];
    $xp_probabilidade = $user_data['XP_probabilidade'];
    $xp_geoplana = $user_data['XP_geoplana'];
    $xp_estatistica = $user_data['XP_estatistica'];
} else {
    echo "Usuário não encontrado!";
    exit();
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MathQuest - Conteúdos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <style>
    a{
      color: white;
    }
  </style>
</head>

<body>

  <!--Navbar-->
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
          <ul class="nav-item dropdown me-2">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Minha conta
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="perfil.php">Perfil</a></li>
              <li><a class="dropdown-item" href="performance_graph.php">Progresso</a></li>
              <li><a class="dropdown-item" href="ranking.php">Ranking</a></li>

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
    <h2 class="my-4">Conteúdos</h2>

    <div class="content-box">
      <h5>
        <a href="performance_grandezas.php" style="margin-right: 8px;">
          <img src="img/d.png" alt="Ícone de Grandezas" style="width: 25px; height: 25px; ">
        </a>
        Grandezas proporcionais 
        <span class="score">Pontuação: <?php echo $xp_grandezas; ?></span>
      </h5>
      <a href="Grandezas.php" class="btn start-btn">Iniciar</a>
    </div>

    <div class="content-box">
      <h5>
        <a href="performance_graficos.php" style="margin-right: 8px;">
          <img src="img/d.png" alt="Ícone de Gráficos" style="width: 25px; height: 25px; ">
        </a>
        Gráficos e Tabelas 
        <span class="score">Pontuação: <?php echo $xp_graficos; ?></span>
      </h5>
      <a href="Graficos.php" class="btn start-btn">Iniciar</a>
    </div>

    <div class="content-box">
      <h5>
        <a href="performance_aritmetica.php" style="margin-right: 8px;">
          <img src="img/d.png" alt="Ícone de Aritmética" style="width: 25px; height: 25px; ">
        </a>
        Aritmética 
        <span class="score">Pontuação: <?php echo $xp_aritmetica; ?></span>
      </h5>
      <a href="Aritmetica.php" class="btn start-btn">Iniciar</a>
    </div>

    <div class="content-box">
      <h5>
        <a href="performance_geoespacial.php" style="margin-right: 8px;">
          <img src="img/d.png" alt="Ícone de Geometria Espacial" style="width: 25px; height: 25px; ">
        </a>
        Geometria espacial 
        <span class="score">Pontuação: <?php echo $xp_geoespacial; ?></span>
      </h5>
      <a href="GeoEspacial.php" class="btn start-btn">Iniciar</a>
    </div>

    <div class="content-box">
      <h5>
        <a href="performance_funcoes.php" style="margin-right: 8px;">
          <img src="img/d.png" alt="Ícone de Funções" style="width: 25px; height: 25px; ">
        </a>
        Funções 
        <span class="score">Pontuação: <?php echo $xp_funcoes; ?></span>
      </h5>
      <a href="Funcoes.php" class="btn start-btn">Iniciar</a>
    </div>

    <div class="content-box">
      <h5>
        <a href="performance_probabilidade.php" style="margin-right: 8px;">
          <img src="img/d.png" alt="Ícone de Probabilidade" style="width: 25px; height: 25px; ">
        </a>
        Probabilidade 
        <span class="score">Pontuação: <?php echo $xp_probabilidade; ?></span>
      </h5>
      <a href="Probabilidade.php" class="btn start-btn">Iniciar</a>
    </div>

    <div class="content-box">
      <h5>
        <a href="performance_estatistica.php" style="margin-right: 8px;">
          <img src="img/d.png" alt="Ícone de Estatística" style="width: 25px; height: 25px; ">
        </a>
        Estatística 
        <span class="score">Pontuação: <?php echo $xp_estatistica; ?></span>
      </h5>
      <a href="Estatistica.php" class="btn start-btn">Iniciar</a>
    </div>

    <div class="content-box">
      <h5>
        <a href="performance_geoplana.php" style="margin-right: 8px;">
          <img src="img/d.png" alt="Ícone de Geometria Plana" style="width: 25px; height: 25px; ">
        </a>
        Geometria Plana 
        <span class="score">Pontuação: <?php echo $xp_geoplana; ?></span>
      </h5>
      <a href="GeoPlana.php" class="btn start-btn">Iniciar</a>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
