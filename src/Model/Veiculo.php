<?php

class Veiculo {
    private $ano;
    private $marca; 
    private $modelo;
    private $placa;

    function __construct($_ano, $_marca, $_modelo, $_placa) {
        $this->ano = $_ano;
        $this->marca =  $_marca;
        $this->modelo = $_modelo;
        $this->placa = $_placa;
    }

    function getAno() {
        return $this->ano;
    }

    function getMarca() {
        return $this->marca;
    }

    function getModelo() {
        return $this->modelo;
    }

    function getPlaca() {
        return $this->placa;
    }
}

?>