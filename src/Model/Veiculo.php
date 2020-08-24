<?php

class Veiculo {
    private $ano; //ano do veiculo
    private $marca; //marca do veiculo
    private $modelo; //modelo do veiculo
    private $placa; //placa do veiculo
    private $cpf_dono;

    //construtor padrão. as variaveis com _ antes são atributos
    function __construct($_ano, $_marca, $_modelo, $_placa) {
        $this->ano = $_ano;
        $this->marca = $_marca;
        $this->modelo = $_modelo;
        $this->placa = $_placa;
        $this->cpf_dono = '12345678912';
    }

    //getters
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

    function getCPF() {
        return $this->cpf_dono;
    }
}

?>