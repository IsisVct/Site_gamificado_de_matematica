<?php
class QuizModel {
    private $conn;
    public $table = "questions";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getQuestionsBySubject($subject) {
        $query = "SELECT * FROM " . $this->table . " WHERE subject = :subject";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':subject', $subject);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function saveUserAnswer($userId, $questionId, $isCorrect) {
        $query = "INSERT INTO user_answers (user_id, question_id, correct)
                  VALUES (:user_id, :question_id, :correct)
                  ON DUPLICATE KEY UPDATE correct = :correct";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':user_id', $userId);
        $stmt->bindParam(':question_id', $questionId);
        $stmt->bindParam(':correct', $isCorrect, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function updateUserProgress($userId, $subject, $xpEarned) {
        $query = "SELECT * FROM user_progress WHERE user_id = :user_id AND subject = :subject";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':user_id', $userId);
        $stmt->bindParam(':subject', $subject);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $query = "UPDATE user_progress SET xp_earned = xp_earned + :xp_earned
                      WHERE user_id = :user_id AND subject = :subject";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':xp_earned', $xpEarned, PDO::PARAM_INT);
            $stmt->bindParam(':user_id', $userId);
            $stmt->bindParam(':subject', $subject);
            $stmt->execute();
        } else {
            $query = "INSERT INTO user_progress (user_id, subject, xp_earned)
                      VALUES (:user_id, :subject, :xp_earned)";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':user_id', $userId);
            $stmt->bindParam(':subject', $subject);
            $stmt->bindParam(':xp_earned', $xpEarned, PDO::PARAM_INT);
            $stmt->execute();
        }
    }
}
?>
