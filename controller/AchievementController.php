<?php
require_once '../model/Achievement.php';

class AchievementController {
    private $achievementModel;

    public function __construct() {
        $this->achievementModel = new Achievement();
    }

    public function checkAndAwardAchievements($userEmail) {
        $userController = new UserController();
        $user = $userController->getUserByEmail($userEmail); 
        $userId = $user['ID'];
        
        if (!$this->achievementModel->userHasAchievement($userId, 1)) {
            $this->achievementModel->awardAchievementToUser($userId, 1);
        }

        if ($user['XP'] >= 1000 && !$this->achievementModel->userHasAchievement($userId, 2)) { 
            $this->achievementModel->awardAchievementToUser($userId, 2);
        }

        $achievements = [
            'XP_grandezas' => [3, 4],    
            'XP_estatistica' => [5, 6],   
            'XP_aritmetica' => [7, 8],     
            'XP_geoespacial' => [9, 10],  
            'XP_geoplana' => [11, 12],     
            'XP_funcoes' => [13, 14],
            'XP_probabilidade' => [15, 16],
            'XP_graficos' => [17, 18]      
        ];

        foreach ($achievements as $xpField => $achievementIds) {
            if ($user[$xpField] >= 500 && !$this->achievementModel->userHasAchievement($userId, $achievementIds[0])) {
                $this->achievementModel->awardAchievementToUser($userId, $achievementIds[0]);
            }
            if ($user[$xpField] >= 1000 && !$this->achievementModel->userHasAchievement($userId, $achievementIds[1])) {
                $this->achievementModel->awardAchievementToUser($userId, $achievementIds[1]);
            }
        }
    }

    public function getUserAchievements($userId) {
        return $this->achievementModel->getUserAchievements($userId);
    }
}
?>
