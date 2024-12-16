<?php
require_once '../config/DataBase.php';
require_once '../controller/QuizController.php';

$database = new Database();
$db = $database->getConnection();

$subject = isset($_GET['subject']) ? $_GET['subject'] : 'grandezas';

$quizController = new QuizController($db);
$questions = $quizController->loadQuestions($subject);

session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz de Grandezas</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .question { display: none; }
        .question.active { display: block; }
        .question-image {
            display: block;
            margin: 0 auto;
            max-height: 500px;
            height: auto;
            width: auto;
        }
    </style>
    <link rel="stylesheet" href="css/quiz.css">
    
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Quiz de Grandezas</h1>
        <form id="quiz-form" method="post" action="submit_grandezas.php">
            <?php foreach ($questions as $index => $question): ?>
                <div class="card mb-3 question <?= $index === 0 ? 'active' : '' ?>">
                    <div class="card-body">
                        <p class="card-text font-weight-bold"><?= htmlspecialchars($question['question_text']) ?></p>

                        <?php if (!empty($question['image_url'])): ?>
                            <img src="<?= htmlspecialchars($question['image_url']) ?>" alt="Imagem da questão" class="question-image mb-3 img-fluid">
                        <?php endif; ?>

                        <?php if (!empty($question['followup_question'])): ?>
                            <p class="font-italic"><?= htmlspecialchars($question['followup_question']) ?></p>
                        <?php endif; ?>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="answers[<?= $question['question_id'] ?>]" value="A">
                            <label class="form-check-label"><?= htmlspecialchars($question['option_a']) ?></label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="answers[<?= $question['question_id'] ?>]" value="B">
                            <label class="form-check-label"><?= htmlspecialchars($question['option_b']) ?></label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="answers[<?= $question['question_id'] ?>]" value="C">
                            <label class="form-check-label"><?= htmlspecialchars($question['option_c']) ?></label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="answers[<?= $question['question_id'] ?>]" value="D">
                            <label class="form-check-label"><?= htmlspecialchars($question['option_d']) ?></label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="answers[<?= $question['question_id'] ?>]" value="E">
                            <label class="form-check-label"><?= htmlspecialchars($question['option_e']) ?></label>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="text-center">
                <button type="button" class="btn btn-secondary" id="prev-btn" style="display: none;">Questão Anterior</button>
                <button type="button" class="btn ab" id="next-btn">Próxima Questão</button>
                <button type="submit" class="btn ab" id="submit-btn" style="display: none;">Enviar Quiz</button>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            let currentQuestion = 0;
            const questions = $('.question');
            const totalQuestions = questions.length;

            function showQuestion(index) {
                questions.removeClass('active');
                $(questions[index]).addClass('active');
                $('#prev-btn').toggle(index > 0);
                $('#next-btn').toggle(index < totalQuestions - 1);
                $('#submit-btn').toggle(index === totalQuestions - 1);
            }

            $('#next-btn').click(function () {
                if (currentQuestion < totalQuestions - 1) {
                    currentQuestion++;
                    showQuestion(currentQuestion);
                }
            });

            $('#prev-btn').click(function () {
                if (currentQuestion > 0) {
                    currentQuestion--;
                    showQuestion(currentQuestion);
                }
            });

            showQuestion(currentQuestion);
        });
    </script>
</body>
</html>
