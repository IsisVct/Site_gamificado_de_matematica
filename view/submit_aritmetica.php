<?php
session_start();
require_once '../config/DataBase.php';
require_once '../controller/QuizController.php';
require_once '../controller/UserController.php';
require_once '../controller/AchievementController.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$userEmail = $_SESSION['user_email'] ?? null;

if (!$userEmail) {
    echo "Erro: Email do usuário não encontrado.";
    exit();
}

$database = new Database();
$db = $database->getConnection();

$achievementController = new AchievementController();
$achievementController->checkAndAwardAchievements($userEmail);

$quizController = new QuizController($db);
$controller = new UserController();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['answers'])) {
    $answers = $_POST['answers'];
    $userId = $_SESSION['user_id'];

    $result = $quizController->submitQuiz($userId, $answers, 'Aritmetica');
    
    $correctAnswers = $result['correctAnswers'];
    $totalQuestions = $result['totalQuestions'];
    $totalPoints = $result['totalPoints'];
    $streakUpdate = $controller->updateStreak($userId);
} else {
    echo "Por favor, envie o quiz corretamente.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Quiz</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card text-center">
                <div class="card-header bg-primary text-white">
                    <h3>Resultado do Quiz</h3>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Você acertou <strong><?= htmlspecialchars($correctAnswers) ?></strong> de 
                        <strong><?= htmlspecialchars($totalQuestions) ?></strong> questões.
                    </p>
                    <p class="card-text">
                        Sua pontuação total é: <strong><?= htmlspecialchars($totalPoints) ?> XP</strong>.
                    </p>
                    <a href="Principal.php" class="btn btn-secondary mt-3">Voltar para a Página Principal</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>