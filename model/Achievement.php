<?php
require_once '../config/DataBase.php'; 

class Achievement {
    private $db;

    public function __construct() {
        $database = new Database(); 
        $this->db = $database->getConnection(); 
    }

    public function getAllAchievements() {
        $stmt = $this->db->prepare("SELECT * FROM achievements");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function userHasAchievement($userId, $achievementId) {
        $stmt = $this->db->prepare("SELECT * FROM user_achievements WHERE user_id = ? AND achievement_id = ?");
        $stmt->execute([$userId, $achievementId]);
        return $stmt->rowCount() > 0;
    }

    public function awardAchievementToUser($userId, $achievementId) {
        $stmt = $this->db->prepare("INSERT INTO user_achievements (user_id, achievement_id) VALUES (?, ?)");
        return $stmt->execute([$userId, $achievementId]);
    }

    public function getUserAchievements($userId) {
        $stmt = $this->db->prepare("
            SELECT a.achievement_name, a.description, a.badge_image, ua.achieved_on
            FROM achievements a
            JOIN user_achievements ua ON a.achievement_id = ua.achievement_id
            WHERE ua.user_id = ?");
        $stmt->execute([$userId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
