<?php

require_once ('..\src\Model\Veiculo.php');

    class TestVeiculo extends PHPUnit\Framework\TestCase {

        public function testGetAno(){
            $veiculo = new Veiculo("2019", "Renault", "Sandero", "PPP1234");
            $this->assertEquals("2019", $veiculo->getAno());
        }
        public function testeGetMarca(){
            $veiculo = new Veiculo("2019", "Renault", "Sandero", "PPP1234");
            $this->assertEquals("Renault", $veiculo->getMarca());
        }
        public function testeGetModelo(){
            $veiculo = new Veiculo("2019", "Renault", "Sandero", "PPP1234");
            $this->assertEquals("Sandero", $veiculo->getModelo());
        }
        public function testeGetPlaca(){
            $veiculo = new Veiculo("2019", "Renault", "Sandero", "PPP1234");
            $this->assertEquals("PPP1234", $veiculo->getPlaca());
        }
        public function testeGetCPF(){
            $veiculo = new Veiculo("2019", "Renault", "Sandero", "PPP1234");
            $this->assertEquals("12345678912", $veiculo->getCPF());
        }
    }

?>