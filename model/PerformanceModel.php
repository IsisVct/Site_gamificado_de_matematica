<?php
class PerformanceModel
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function calcularPercentualAcertos($user_email)
    {
        $stmt = $this->db->prepare("SELECT subject, 
                                        (SUM(correct) / SUM(attempted)) * 100 AS percentual_acertos
                                     FROM user_progress
                                     WHERE user_id = (SELECT id FROM users WHERE email = :user_email)
                                     GROUP BY subject");
        $stmt->bindParam(':user_email', $user_email);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function calcularPercentualAcertosPorQuiz($user_email)
    {
        $stmt = $this->db->prepare("
            SELECT subject, 
                   CASE WHEN COUNT(*) > 0 
                        THEN (SUM(correct) / COUNT(*)) * 100 
                        ELSE 0 
                   END AS percentual_acertos
            FROM user_answers ua
            JOIN questions q ON ua.question_id = q.question_id
            WHERE ua.user_id = (SELECT id FROM users WHERE email = :user_email)
            GROUP BY subject
        ");
        $stmt->bindParam(':user_email', $user_email);
        $stmt->execute();
    
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function obterResumoGeral($user_email)
    {
        $query = "
            SELECT 
                up.subject,
                SUM(up.attempted) AS total_attempted, 
                SUM(up.correct) AS total_correct, 
                (SUM(up.correct) / SUM(up.attempted)) * 100 AS accuracy_percentage
            FROM user_progress up
            JOIN users u ON up.user_id = u.id
            WHERE u.email = :user_email
            GROUP BY up.subject
        ";
    
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':user_email', $user_email);
        $stmt->execute();
    
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    
    
    public function atualizarRecomendacoes($user_email)
    {
        $percentual_acertos = $this->calcularPercentualAcertos($user_email);

        foreach ($percentual_acertos as $acerto) {
            if ($acerto['percentual_acertos'] < 60) {
                $stmt = $this->db->prepare("INSERT INTO recommendations (user_email, subject, recommendation)
                                            VALUES (:user_email, :subject, :recommendation)
                                            ON DUPLICATE KEY UPDATE recommendation = :recommendation");
                $stmt->bindParam(':user_email', $user_email);
                $stmt->bindParam(':subject', $acerto['subject']);
                $stmt->bindParam(':recommendation', $acerto['subject'] . " - Melhorar");
                $stmt->execute();
            }
        }
    }

    public function getAcertosPorNivel($user_email, $subject) {
        $query = "
            SELECT 
                q.difficulty, 
                COUNT(*) as total, 
                SUM(CASE WHEN ua.correct = 1 THEN 1 ELSE 0 END) as correct
            FROM user_answers ua
            JOIN questions q ON q.question_id = ua.question_id
            WHERE ua.user_id = (SELECT id FROM users WHERE email = :user_email) 
                AND q.subject = :subject
            GROUP BY q.difficulty
        ";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':user_email', $user_email);
        $stmt->bindParam(':subject', $subject);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $acertos = [
            'easy' => ['total' => 0, 'correct' => 0],
            'medium' => ['total' => 0, 'correct' => 0],
            'hard' => ['total' => 0, 'correct' => 0]
        ];

        foreach ($result as $row) {
            $acertos[$row['difficulty']] = [
                'total' => $row['total'],
                'correct' => $row['correct']
            ];
        }

        return $acertos;
    }
}
?>
