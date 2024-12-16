<?php
// Incluindo a conexão com o banco
include_once '../config/database.php';
include_once '../model/Ranking.php';
include_once '../controller/RankingController.php';

$database = new Database();
$db = $database->getConnection();

$rankingController = new RankingController();

$rankingController->updateRankings();

$rankings = $rankingController->showRankings();

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranking de Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/logo.png">

</head>
<style>
       body {
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top:40px ;
        }

 
        .profile-section {
            text-align: center;
            margin-bottom: 40px;
        }

        
        .navbar {
            background-color: #f8f9fa;
        }

</style>

<body>
<nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" alt="Bootstrap" width="40" height="40">
                <img src="img/logoNome.png" alt="Bootstrap" width="130" height="30">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex ms-auto">
                    <ul class="nav-item dropdown me-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Minha conta
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="perfil.php">Perfil</a></li>
                            <li><a class="dropdown-item" href="Principal.php">Materias</a></li>
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
    <div class="container mt-5">
        <h2 class="text-center">Ranking do MathQuest</h2>
        <table class="table table-striped" >
            <thead class="thead-dark">
                <tr>
                    <th style="background:#5f15b3;">Posição</th>
                    <th style="background:#5f15b3;">Nome</th>
                    <th style="background:#5f15b3;">XP</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($rankings)): ?>
                    <?php foreach ($rankings as $ranking): ?>
                        <tr>
                            <td><?= htmlspecialchars($ranking->position) ?>º</td>
                            <td><?= htmlspecialchars($ranking->name) ?></td>
                            <td><?= htmlspecialchars($ranking->xp) ?> XP</td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="3" class="text-center">Nenhum ranking disponível</td>
                    </tr>
                <?php endif; ?>
            </tbody>

        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>