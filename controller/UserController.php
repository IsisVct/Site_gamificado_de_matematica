<?php
require_once '../model/User.php';
require_once '../config/DataBase.php';

class UserController {
    private $user;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->user = new User($db);
    }

    public function createUser($name, $email, $phone, $date_birth, $password, $XP = 0, $XP_grandezas = 0, $XP_estatistica = 0, $XP_aritmetica = 0, $XP_geoespacial = 0, $XP_funcoes = 0, $XP_probabilidade = 0, $XP_geoplana = 0, $XP_graficos = 0, $level = 1) {
        $this->user->name = $name;
        $this->user->email = $email;
        $this->user->phone = $phone;
        $this->user->date_birth = $date_birth;
        $this->user->password = $password;
        $this->user->XP = $XP;
        $this->user->XP_grandezas = $XP_grandezas;
        $this->user->XP_estatistica = $XP_estatistica;
        $this->user->XP_aritmetica = $XP_aritmetica;
        $this->user->XP_geoespacial = $XP_geoespacial;
        $this->user->XP_funcoes = $XP_funcoes;
        $this->user->XP_probabilidade = $XP_probabilidade;
        $this->user->XP_geoplana = $XP_geoplana;
        $this->user->XP_graficos = $XP_graficos;
        $this->user->level = $level;
    
        error_log("XP_grandezas: $XP_grandezas");
    
        try {
            if ($this->user->create()) {
                return "Usuário criado com sucesso.";
            } else {
                return "Falha na criação do usuário.";
            }
        } catch (PDOException $e) {
            if ($e->getCode() == 23000) {
                return "Este e-mail já está cadastrado. Tente outro.";
            }
            return "Erro desconhecido. Por favor, tente novamente.";
        }
    }
    

    public function getUserByEmail($email) {
        $this->user->email = $email;
        $stmt = $this->user->read();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function getUserByID($ID) {
        $this->user->ID = $ID;
        $stmt = $this->user->read();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function updateStreak($email) {
        return $this->user->updateStreak($email);
    }
}
?>