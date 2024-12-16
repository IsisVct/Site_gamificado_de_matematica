<?php
require_once '../model/QuizModel.php';
require_once '../model/User.php';

class QuizController {
    private $quizModel;
    private $user;

    public function __construct($db) {
        $this->quizModel = new QuizModel($db);
        $this->user = new User($db);
    }

    public function loadQuestions($subject) {
        $questions = $this->quizModel->getQuestionsBySubject($subject);
        return array_slice($questions, 0, 10);
    }

    public function submitQuiz($userId, $answers, $subject) {
        $questions = $this->quizModel->getQuestionsBySubject($subject);
        $correctAnswers = 0;
        $totalPoints = 0;

        $questions = array_slice($questions, 0, 10); 
        $this->user->ID = $userId;
        $userData = $this->user->getUserByID($userId);
        $this->user->loadUserData($userData);

        $attempted = 0;
        $correct = 0;

        foreach ($answers as $questionId => $selectedOption) {
            $question = array_filter($questions, fn($q) => $q['question_id'] == $questionId);
            if ($question) {
                $question = array_shift($question);
                $isCorrect = ($question['correct_option'] == $selectedOption) ? 1 : 0;
                $xpEarned = $isCorrect ? $question['xp_value'] : 0;

                if ($isCorrect) {
                    $correctAnswers++;
                    $correct++;  
                    $totalPoints += $xpEarned;
                }

                $attempted++;  
                $this->quizModel->saveUserAnswer($userId, $questionId, $isCorrect);
            }
        }

        $this->user->updateUserSubjectXP($subject, $totalPoints);
        $this->user->updateUserProgress($subject, $attempted, $correct, $totalPoints);

        return [
            'correctAnswers' => $correctAnswers,
            'totalPoints' => $totalPoints,
            'totalQuestions' => 10  
        ];
    }
}
?>
