<?php

class Orcamento {
    private $descricao; //descricao do problema
    private $funcionario_cpf; //funcionario alocado
    private $veiculo_placa; //placa do veiculo a ser orçado
    private $veiculo_cliente_cpf; //cpf do cliente

    //construtor padrão. as variaveis com _ antes são atributos
    function __construct($_descricao, $_placaVeiculo) {
        $this->descricao = $_descricao;
        $this->veiculo_placa = $_placaVeiculo;
        $this->funcionario_cpf = '98765432109';
        $this->veiculo_cliente_cpf = '12345678912';
    }

    //getters
    function getDescricao() {
        return $this->descricao;
    }

    function getFuncionario() {
        return $this->funcionario_cpf;
    }

    function getPlaca() {
        return $this->veiculo_placa;
    }

    function getCliente() {
        return $this->veiculo_cliente_cpf;
    }
}

?>