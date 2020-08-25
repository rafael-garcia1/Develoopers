<?php

require_once ('..\src\Model\Orcamento.php');

    class TestVeiculo extends PHPUnit\Framework\TestCase {

        public function testGetDescricao(){
            $orcamento = new Orcamento("Defeito lataria", "PPP1234");
            $this->assertEquals("Defeito lataria", $orcamento->getDescricao());
        }
        public function testeGetPlaca(){
            $orcamento = new Orcamento("Defeito lataria", "PPP1234");
            $this->assertEquals("PPP1234", $orcamento->getPlaca());
        }
        public function testeGetFuncionario(){
            $this->assertEquals("98765432109", $orcamento->getFuncionario());
        }
        public function testeGetCliente(){
            $this->assertEquals("12345678912", $orcamento->getCliente());
        }
    }

?>