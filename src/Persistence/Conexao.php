<?php

class Conexao {

    private $server = "localhost";
    private $user = "root";
    private $pass = "";
    private $bd = "mydb";
    private $conn = null;

    function __construct(){}

    function getConexao() {
        if ($this->conn == null) {
            $this->conn = mysqli_connect($this->server, $this->user, $this->pass, $this->bd);
        }

        if (!$this->conn) {
            die("Conexão falhou: ". $this->conn->connect_error);
        }

        return $this->conn;
    }

    
}

?>