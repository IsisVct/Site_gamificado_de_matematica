<?php
session_start();

if (!isset($_SESSION['user_email'])) {
    echo "Erro: Usuário não autenticado.";
    exit;
}

require_once '../config/DataBase.php';
require_once '../model/PerformanceModel.php';
require_once '../controller/PerformanceController.php';

$database = new Database();
$db = $database->getConnection();
$performanceModel = new PerformanceModel($db);
$performanceController = new PerformanceController($performanceModel);

$subject = 'Aritmetica';
$user_email = $_SESSION['user_email'];
$acertos_por_nivel = $performanceController->gerarRelatorioDesempenhoPorNivel($user_email, $subject);

$hasData = isset($acertos_por_nivel['easy']) && isset($acertos_por_nivel['medium']) && isset($acertos_por_nivel['hard']) &&
    $acertos_por_nivel['easy']['total'] > 0 && $acertos_por_nivel['medium']['total'] > 0 && $acertos_por_nivel['hard']['total'] > 0;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Desempenho por Nível</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        .chart-container {
            max-width: 300px;
            max-height: 300px;
            margin: auto;
        }

        body {
           background-color: #f5f5f5;
            margin: 0;
            padding-top: 56px;
            /* Compensa a navbar fixa */
        }

        .container,
        mt-5 {
            padding: 30px;
            background-color: #f8f8f8;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
            margin-top: 20px;
            /* Caso queira um espaçamento adicional */
        }

        .nav-item {
            margin: 5px;
        }

        .no-data-message {
            background-color: #f8d7da;
            color: #721c24;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
            text-align: center;
        }
    </style>
    <link rel="stylesheet" href="css/quiz.css">
</head>

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
                            <li><a class="dropdown-item" href="ranking.php">Ranking</a></li>
                            <li><a class="dropdown-item" href="performance_graph.php">Proguesso</a></li>

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
        <h2 class="text-center">Relatório de Desempenho do último quiz - Aritmética</h2>

        <?php if (!$hasData): ?>
            <div class="no-data-message">
                Você não possui registros de quiz nesta matéria ainda.
            </div>
        <?php else: ?>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="chart-container">
                        <canvas id="acertosFacil" width="300" height="300"></canvas>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="chart-container">
                        <canvas id="acertosMedio" width="300" height="300"></canvas>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="chart-container">
                        <canvas id="acertosDificil" width="300" height="300"></canvas>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Nível de Dificuldade</th>
                                <th scope="col">Percentual de Acertos</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Fácil</td>
                                <td><?php echo number_format($acertos_por_nivel['easy']['correct'] / $acertos_por_nivel['easy']['total'] * 100, 2); ?>%
                                </td>
                            </tr>
                            <tr>
                                <td>Médio</td>
                                <td><?php echo number_format($acertos_por_nivel['medium']['correct'] / $acertos_por_nivel['medium']['total'] * 100, 2); ?>%
                                </td>
                            </tr>
                            <tr>
                                <td>Difícil</td>
                                <td><?php echo number_format($acertos_por_nivel['hard']['correct'] / $acertos_por_nivel['hard']['total'] * 100, 2); ?>%
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php endif; ?>

        <div class="text-center mt-4">
            <a href="Principal.php" class="btn ab">Voltar</a>
        </div>
    </div>

    <script>
        <?php if ($hasData): ?>
            const ctxFacil = document.getElementById('acertosFacil').getContext('2d');
            const ctxMedio = document.getElementById('acertosMedio').getContext('2d');
            const ctxDificil = document.getElementById('acertosDificil').getContext('2d');

            const acertosData = <?php echo json_encode($acertos_por_nivel); ?>;

            const acertosFacilChart = new Chart(ctxFacil, {
                type: 'pie',
                data: {
                    labels: ['Acertos', 'Erros'],
                    datasets: [{
                        label: 'Fácil',
                        data: [
                            acertosData.easy.correct,
                            acertosData.easy.total - acertosData.easy.correct
                        ],
                        backgroundColor: ['rgba(75, 192, 192, 0.2)', 'rgba(255, 99, 132, 0.2)'],
                        borderColor: ['rgba(75, 192, 192, 1)', 'rgba(255, 99, 132, 1)'],
                        borderWidth: 1
                    }]
                }
            });

            const acertosMedioChart = new Chart(ctxMedio, {
                type: 'pie',
                data: {
                    labels: ['Acertos', 'Erros'],
                    datasets: [{
                        label: 'Médio',
                        data: [
                            acertosData.medium.correct,
                            acertosData.medium.total - acertosData.medium.correct
                        ],
                        backgroundColor: ['rgba(255, 159, 64, 0.2)', 'rgba(153, 102, 255, 0.2)'],
                        borderColor: ['rgba(255, 159, 64, 1)', 'rgba(153, 102, 255, 1)'],
                        borderWidth: 1
                    }]
                }
            });

            const acertosDificilChart = new Chart(ctxDificil, {
                type: 'pie',
                data: {
                    labels: ['Acertos', 'Erros'],
                    datasets: [{
                        label: 'Difícil',
                        data: [
                            acertosData.hard.correct,
                            acertosData.hard.total - acertosData.hard.correct
                        ],
                        backgroundColor: ['rgba(153, 102, 255, 0.2)', 'rgba(255, 159, 64, 0.2)'],
                        borderColor: ['rgba(153, 102, 255, 1)', 'rgba(255, 159, 64, 1)'],
                        borderWidth: 1
                    }]
                }
            });
        <?php endif; ?>
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
