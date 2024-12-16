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

$user_email = $_SESSION['user_email'];
$resumoGeral = $performanceController->gerarResumoGeral($user_email);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumo Geral - Todas as Matérias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="css/quiz.css">
    <style>
        body {

            margin: 0;
            padding-top: 56px;
        }

        .container,
        mt-5 {
            padding: 30px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .nav-item {
            margin: 5px;
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
        <h2 class="text-center">Resumo Geral - Todas as Matérias</h2>

        <div class="row mt-4 justify-content-center">
            <div class="col-md-8">
                <canvas id="generalPerformanceChart" width="600" height="400"></canvas>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Matéria</th>
                            <th>Total de Tentativas</th>
                            <th>Total de Acertos</th>
                            <th>Percentual de Acertos (%)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($resumoGeral as $resumo): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($resumo['subject']); ?></td>
                                <td><?php echo $resumo['total_attempted']; ?></td>
                                <td><?php echo $resumo['total_correct']; ?></td>
                                <td><?php echo number_format($resumo['accuracy_percentage'], 2); ?>%</td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="Principal.php" class="btn ab ">Voltar</a>
        </div>
    </div>

    <script>
        const ctx = document.getElementById('generalPerformanceChart').getContext('2d');
        const resumoGeral = <?php echo json_encode($resumoGeral); ?>;

        const labels = resumoGeral.map(item => item.subject);
        const accuracyPercentage = resumoGeral.map(item => parseFloat(item.accuracy_percentage));

        const chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Percentual de Acertos (%)',
                    data: accuracyPercentage,
                    backgroundColor: 'rgba(69, 17, 129, 0.5)',
                    borderColor: 'rgba(142, 86, 216, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 100, 
                        ticks: {
                            stepSize: 10, 
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: true
                    }
                }
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>