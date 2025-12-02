<?php
class Database {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbname = "dbsarah";
    private $conn;

    public function __construct() {
        $this->connect();
    }

    private function connect() {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);

        if ($this->conn->connect_error) {
            die("Conexão falhou: " . $this->conn->connect_error);
        }
    }

    public function getConnection() {
        return $this->conn;
    }

    public function closeConnection() {
        if ($this->conn) {
            $this->conn->close();
        }
    }
}

/**
*    $servername = "localhost";
*    $username = "root";
*    $password = "";
*    $dbname = "dbsarah";
*
*    $conn = new mysqli($servername, $username, $password, $dbname);
*
*    if ($conn->connect_error) {
*        die("Conexão falhou: " . $conn->connect_error);
*    }
*
*/

?>

