<?php

class Conexao {

    private $server = "localhost"; //nome do servidor
    private $user = "root"; //nome de usuário
    private $pass = ""; //senha
    private $bd = "mydb"; //nome do banco de dados
    private $conn = null; //conexão em si

    //construtor padrão
    function __construct(){}

    //inicializar conexão ao BD
    function getConexao() {
        if ($this->conn == null) {
            $this->conn = mysqli_connect($this->server, $this->user, $this->pass, $this->bd);
        }

        //cobrindo caso de falha
        if (!$this->conn) {
            die("Conexão falhou: ". $this->conn->connect_error);
        }

        return $this->conn;
    }

    
}

?>