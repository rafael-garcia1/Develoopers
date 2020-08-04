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

    #NÃO FUNCIONA
    function consultarVeiculo($placa, $conn) {
        $select = "SELECT * FROM veiculo WHERE Placa =" . $placa;
        $res = $conn->query($select);

        return $res;
    }

    #NEM CHEGA NESSA PARTE
    function excluirVeiculo($placa, $conn) {
        $delete = "DELETE FROM veiculo WHERE Placa=" . $placa;
        $res = $conn->query($delete);
        
        if ($res == TRUE) {
            echo "<html> <script> alert('Veiculo removido com sucesso!') </script> </html>";
        }

        else {
            echo "Erro na remocao do veículo: <br>".$conn->error;
        }
    }
}

?>