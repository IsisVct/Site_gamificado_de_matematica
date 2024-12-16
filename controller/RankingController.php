<?php
require_once '../model/User.php';
require_once '../model/Achievement.php';
require_once '../config/DataBase.php';
class RankingController {
    private $rankingModel;
    private $db;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->rankingModel = new Ranking($this->db);
    }

    public function showRankings() {
        $result = $this->rankingModel->getRankings();
        $rankings = [];
        if ($result) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $ranking = new Ranking($this->db);
                $ranking->position = $row['position'];
                $ranking->xp = $row['xp'];
                $ranking->name = $row['name'];
                $rankings[] = $ranking;
            }
        }
        return $rankings;
    }

    public function updateRankings() {
        $this->rankingModel->updateRankings();
    }
}

?>