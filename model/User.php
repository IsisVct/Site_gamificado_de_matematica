<?php
class User
{
    private $conn;
    public $table = "users";
    public $ID;
    public $name;
    public $email;
    public $phone;
    public $date_birth;
    public $password;
    public $XP;
    public $XP_grandezas;
    public $XP_estatistica;
    public $XP_aritmetica;
    public $XP_geoespacial;
    public $XP_funcoes;
    public $XP_probabilidade;
    public $XP_geoplana;
    public $XP_graficos;
    public $level;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function create()
    {
        $query = "INSERT INTO " . $this->table . " (name, email, phone, date_birth, password, XP, XP_grandezas, XP_estatistica, XP_aritmetica, XP_geoespacial, XP_funcoes, XP_probabilidade, XP_geoplana, XP_graficos, level) VALUES (:name, :email, :phone, :date_birth, :password, :XP, :XP_grandezas, :XP_estatistica, :XP_aritmetica, :XP_geoespacial, :XP_funcoes, :XP_probabilidade, :XP_geoplana, :XP_graficos, :level)";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':phone', $this->phone);
        $stmt->bindParam(':date_birth', $this->date_birth);
        $stmt->bindParam(':password', $this->password);
        $stmt->bindParam(':XP', $this->XP);
        $stmt->bindParam(':XP_grandezas', $this->XP_grandezas);
        $stmt->bindParam(':XP_estatistica', $this->XP_estatistica);
        $stmt->bindParam(':XP_aritmetica', $this->XP_aritmetica);
        $stmt->bindParam(':XP_geoespacial', $this->XP_geoespacial);
        $stmt->bindParam(':XP_funcoes', $this->XP_funcoes);
        $stmt->bindParam(':XP_probabilidade', $this->XP_probabilidade);
        $stmt->bindParam(':XP_geoplana', $this->XP_geoplana);
        $stmt->bindParam(':XP_graficos', $this->XP_graficos);
        $stmt->bindParam(':level', $this->level);

        return $stmt->execute();
    }
    public function read()
    {
        // Corrigindo a sintaxe SQL, substituindo a vírgula por AND
        $query = "SELECT * FROM " . $this->table . " WHERE email = :email ";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $this->email);
        $stmt->execute();
        return $stmt;
    }

    public function getUserByEmail($email)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE email = :email LIMIT 0,1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        return false;
    }
    public function getUserByID($ID)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE ID = :ID LIMIT 0,1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':ID', $ID);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        return false;
    }
    public function loadUserData($userData)
    {
        $this->ID = $userData['ID'];
        $this->XP = $userData['XP'];
        $this->XP_grandezas = $userData['XP_grandezas'];
        $this->XP_estatistica = $userData['XP_estatistica'];
        $this->XP_aritmetica = $userData['XP_aritmetica'];
        $this->XP_geoespacial = $userData['XP_geoespacial'];
        $this->XP_funcoes = $userData['XP_funcoes'];
        $this->XP_probabilidade = $userData['XP_probabilidade'];
        $this->XP_geoplana = $userData['XP_geoplana'];
        $this->XP_graficos = $userData['XP_graficos'];
        $this->level = $userData['level'];
    }

    public function calculateLevel()
    {
        $this->level = floor($this->XP / 100);
    }

    public function updateUser()
    {
        $this->calculateLevel();

        $query = "UPDATE " . $this->table . " 
                  SET XP = :XP, XP_grandezas = :XP_grandezas, XP_estatistica = :XP_estatistica, 
                      XP_aritmetica = :XP_aritmetica, XP_geoespacial = :XP_geoespacial, 
                      XP_funcoes = :XP_funcoes, XP_probabilidade = :XP_probabilidade, 
                      XP_geoplana = :XP_geoplana, XP_graficos = :XP_graficos, level = :level 
                  WHERE ID = :ID";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':XP', $this->XP);
        $stmt->bindParam(':XP_grandezas', $this->XP_grandezas);
        $stmt->bindParam(':XP_estatistica', $this->XP_estatistica);
        $stmt->bindParam(':XP_aritmetica', $this->XP_aritmetica);
        $stmt->bindParam(':XP_geoespacial', $this->XP_geoespacial);
        $stmt->bindParam(':XP_funcoes', $this->XP_funcoes);
        $stmt->bindParam(':XP_probabilidade', $this->XP_probabilidade);
        $stmt->bindParam(':XP_geoplana', $this->XP_geoplana);
        $stmt->bindParam(':XP_graficos', $this->XP_graficos);
        $stmt->bindParam(':level', $this->level);
        $stmt->bindParam(':ID', $this->ID);

        return $stmt->execute();
    }

    public function updateUserSubjectXP($subject, $xpEarned)
    {
        $subjectColumn = 'XP_' . strtolower($subject);
        if (!property_exists($this, $subjectColumn)) {
            throw new Exception("Coluna de XP para a matéria $subject não existe.");
        }

        $this->XP += $xpEarned;
        $this->$subjectColumn += $xpEarned;
        return $this->updateUser();
    }
    public function updateUserProgress($subject, $attempted, $isCorrect, $xpEarned)
    {
        $stmt = $this->conn->prepare("SELECT * FROM user_progress WHERE user_id = :user_id AND subject = :subject");
        $stmt->bindParam(':user_id', $this->ID);
        $stmt->bindParam(':subject', $subject);
        $stmt->execute();

        $existingRecord = $stmt->fetch(PDO::FETCH_ASSOC);


        $stmt = $this->conn->prepare("INSERT INTO user_progress (user_id, subject, attempted, correct, xp_earned, last_attempted)
                                    VALUES (:user_id, :subject, :attempted, :correct, :xp_earned, NOW())");

        $stmt->bindParam(':user_id', $this->ID);
        $stmt->bindParam(':subject', $subject);
        $stmt->bindParam(':attempted', $attempted);
        $stmt->bindParam(':correct', $isCorrect);
        $stmt->bindParam(':xp_earned', $xpEarned);
        $stmt->execute();

        return true;
    }


    public function updateStreak($ID)
    {
        $query = "SELECT last_quiz_date, days_streak FROM users WHERE ID = :ID";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':ID', $ID);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$user) {
            return "Usuário não encontrado.";
        }

        $today = date("Y-m-d");

        if ($user['last_quiz_date'] == date('Y-m-d', strtotime('-1 day'))) {
            $newStreak = $user['days_streak'] + 1;
        } elseif ($user['last_quiz_date'] == $today) {
            $newStreak = $user['days_streak'];
        } else {
            $newStreak = 1;
        }

        $updateQuery = "UPDATE users SET days_streak = :newStreak, last_quiz_date = :today WHERE ID = :ID";
        $updateStmt = $this->conn->prepare($updateQuery);
        $updateStmt->bindParam(':newStreak', $newStreak);
        $updateStmt->bindParam(':today', $today);
        $updateStmt->bindParam(':ID', $ID);
        $updateStmt->execute();

        return "Streak atualizado com sucesso.";
    }
}
?>