<?php
class Ranking {
    private $conn;
    private $table = 'rankings';

    public $id;
    public $user_id;
    public $xp;
    public $position;
    public $division;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getRankings() {
        $query = "SELECT u.name, r.xp, r.position
                  FROM " . $this->table . " r
                  JOIN users u ON r.user_id = u.id  -- Alterado para user_id
                  ORDER BY r.position ASC";

        $stmt = $this->conn->prepare($query);
        if ($stmt->execute()) {
            return $stmt;
        } else {
            echo "Erro ao executar a query: " . implode(" - ", $stmt->errorInfo());
        }
        return null;
    }

    public function updateRankings() {
        $clearQuery = "TRUNCATE TABLE " . $this->table;
        $this->conn->exec($clearQuery);
        $query = "SELECT id, XP FROM users ORDER BY XP DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $position = 1;
        foreach ($users as $user) {
            $division = $this->determineDivision($user['XP']);

            $updateQuery = "INSERT INTO rankings (user_id, xp, position, division)
                            VALUES (:user_id, :xp, :position, :division)
                            ON DUPLICATE KEY UPDATE xp = VALUES(xp), position = VALUES(position), division = VALUES(division)";

            $stmt = $this->conn->prepare($updateQuery);
            $stmt->bindParam(':user_id', $user['id']);  
            $stmt->bindParam(':xp', $user['XP']);
            $stmt->bindParam(':position', $position);
            $stmt->bindParam(':division', $division);
            $stmt->execute();
            
            $position++;
        }
    }

    private function determineDivision($xp) {
        if ($xp >= 1000) {
            return 'Ouro';
        } elseif ($xp >= 500) {
            return 'Prata';
        } else {
            return 'Bronze';
        }
    }
}

?>