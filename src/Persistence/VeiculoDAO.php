<?php

class VeiculoDAO {

    //construtor padrão
    function __construct() {}

    //Crud - cadastro de novo veículo
    function salvar($veiculo, $conn) {
        //comando SQL
        $insert =  "INSERT INTO veiculo(Placa, Modelo, Marca, Ano, Cliente_CPF) VALUES ('" .
        $veiculo->getPlaca() . "','" . $veiculo->getModelo() . "','" .
        $veiculo->getMarca() . "'," . $veiculo->getAno() . ",'12345678912')";

        //caso seja bem sucedido
        if ($conn -> query($insert) == TRUE) {
            echo "<html> <script> alert('Veiculo inserido com sucesso!') </script> </html>"; //mensagem de confimação
        }

        //caso não seja bem sucedido
        else {
            echo "Erro na inserção do veículo: <br>".$conn->error; //mensagem de erro
        }
    }

    //cRud - consultar todos os veículos de um cliente
    function consultarTodosVeiculos($conn) {
        //comando SQL
        $select = "SELECT Placa, Modelo, Marca, Ano FROM `veiculo`";
        $res = $conn -> query($select); //executando linha de comando e recuperando registros

        return $res; //retorna a tabela
    }

    //cRud - consultar um único veículo (usado na edição)
    function consultarVeiculo($placa, $conn) {
        //comando SQL
        $select = "SELECT `Modelo`, `Marca`, `Ano` FROM `veiculo` WHERE `Placa`='" . $placa . "'";
        $res = $conn->query($select); //executando linha de comando e recuperando o unico registro

        return $res; //retorna o registro
    }

    //cruD - deletar um único veículo
    function excluirVeiculo($placa, $conn) {
        //comando SQL
        $delete = "DELETE FROM `veiculo` WHERE `Placa`='" . $placa . "'";
        $res = $conn->query($delete); //executando linha de comando, excluindo unico registro e retornando booleano
        
        //caso seja bem sucedido
        if ($res == TRUE) {
            echo "<html> <script> alert('Veiculo removido com sucesso!') </script> </html>"; //mensagem de confirmação
        }

        //caso não seja bem sucedido
        else {
            echo "Erro na remocao do veículo: <br>".$conn->error; //mensagem de erro
        }
    }

    //crUd - editar informações um único veículo
    function editarVeiculo($placa, $ano, $modelo, $marca, $conn) {
        //comando SQL
        $update = "UPDATE `veiculo` SET `Modelo`='" . $modelo . "', `Marca`='" . $marca .
        "', `Ano`='" . $ano ."' WHERE `Placa`='" . $placa . "'";
        $res = $conn->query($update); //executando linha de comando, editando registro e retornando booleano

        //caso seja bem sucedido
        if ($res == TRUE) {
            echo "<html> <script> alert('Veiculo editado com sucesso!') </script> </html>"; //mensagem de confirmação
        }

        //caso não seja bem sucedido
        else {
            echo "Erro na edicao do veículo: <br>".$conn->error; //mensagem de erro
        }
    }
}

?>