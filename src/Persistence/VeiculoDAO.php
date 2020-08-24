<?php

class VeiculoDAO {

    function __construct() {
    }

    function salvar($veiculo, $conn) {
        $insert =  "INSERT INTO veiculo(Placa, Modelo, Marca, Ano, Cliente_CPF) VALUES ('" .
        $veiculo->getPlaca() . "','" . $veiculo->getModelo() . "','" .
        $veiculo->getMarca() . "'," . $veiculo->getAno() . ",'12345678912')";

        if ($conn -> query($insert) == TRUE) {
            echo "<html> <script> alert('Veiculo inserido com sucesso!') </script> </html>";
        }

        else {
            echo "Erro na inserção do veículo: <br>".$conn->error;
        }
    }

    function consultarTodosVeiculos($conn) {
        $select = "SELECT Placa, Modelo, Marca, Ano FROM `veiculo`";
        $res = $conn -> query($select);

        return $res;
    }

    function consultarVeiculo($placa, $conn) {
        $select = "SELECT `Modelo`, `Marca`, `Ano` FROM `veiculo` WHERE `Placa`='" . $placa . "'";
        $res = $conn->query($select);

        return $res;
    }

    function excluirVeiculo($placa, $conn) {
        $delete = "DELETE FROM `veiculo` WHERE `Placa`='" . $placa . "'";
        $res = $conn->query($delete);
        
        if ($res == TRUE) {
            echo "<html> <script> alert('Veiculo removido com sucesso!') </script> </html>";
        }

        else {
            echo "Erro na remocao do veículo: <br>".$conn->error;
        }
    }

    function editarVeiculo($placa, $ano, $modelo, $marca, $conn) {
        $update = "UPDATE `veiculo` SET `Modelo`='" . $modelo . "', `Marca`='" . $marca . "', `Ano`='" . $ano . "' WHERE `Placa`='" . $placa . "'";
        $res = $conn->query($update);

        if ($res == TRUE) {
            echo "<html> <script> alert('Veiculo editado com sucesso!') </script> </html>";
        }

        else {
            echo "Erro na edicao do veículo: <br>".$conn->error;
        }
    }
}

?>