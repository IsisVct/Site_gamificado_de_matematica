<?php
class Database {
    private $dbHost = 'localhost';
    private $dbUserName = 'root';
    private $dbPassword = '';
    private $dbName = 'beta_db';
    public $conn;
    
    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->dbHost . ";dbname=" . $this->dbName, $this->dbUserName, $this->dbPassword);
            $this->conn->exec("set names utf8");
           
        } catch(PDOException $exception) {
            echo "Erro na conexão: " . $exception->getMessage();
        }

        return $this->conn;
    }
}

?>
