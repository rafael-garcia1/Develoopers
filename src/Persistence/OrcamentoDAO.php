<?php

class OrcamentoDAO {
    //construtor padrão
    function __construct() {}

    //Crud - cadastrar um novo orcamento
    function cadastrarOrcamento($orcamento, $conn) {
        //comando SQL
        $insert =  "INSERT INTO `orcamento`(`Descricao_Servico`, `Funcionario_cpf`, `Veiculo_Placa`, `Veiculo_Cliente_CPF`) VALUES
        ('" . $orcamento->getDescricao() . "','" . $orcamento->getFuncionario() . "','"
        . $orcamento->getPlaca() . "','" .  $orcamento->getCliente() . "')";

        $res = $conn->query($insert); //executando linha de codigo e recebendo booleano

        //caso seja bem sucedido
        if ($res == TRUE) {
            echo "<html> <script> alert('Orcamento cadastrado com sucesso!') </script> </html>"; //mensagem de confimação
        }

        //caso não seja bem sucedido
        else {
            echo "Erro no cadastro do orçamento: <br>".$conn->error; //mensagem de erro
        }
    }

    //cRud - consultar todos os orçamentos de um cliente
    function consultarTodosOrcamentos($conn) {
        //comando SQL
        $select = "SELECT * FROM `orcamento`";
        $res = $conn -> query($select); //executando linha de comando e recuperando registros

        return $res; //retorna a tabela
    }

    //cRud - consultar um orçamento específico
    function consultarOrcamento($id, $conn) {
        //comando SQL
        $select = "SELECT `Descricao_Servico`, `Veiculo_Placa` FROM `orcamento` WHERE `id_Orcamento`='" . $id . "'";
        $res = $conn->query($select); //executando linha de comando e recuperando o unico registro

        return $res; //retorna o registro
    }

    //crUd - editar um orçamento específico
    function editarOrcamento($id, $descricao, $conn) {
        //comando SQL
        $update = "UPDATE `orcamento` SET `Descricao_Servico`='" . $descricao . "' WHERE `id_Orcamento`='" . $id . "'";
        $res = $conn->query($update); //executando linha de comando, editando registro e retornando booleano

        //caso seja bem sucedido
        if ($res == TRUE) {
            echo "<html> <script> alert('Orçamento editado com sucesso!') </script> </html>"; //mensagem de confirmação
        }

        //caso não seja bem sucedido
        else {
            echo "Erro na edição do orçamento: <br>".$conn->error; //mensagem de erro
        }
    }

    //cruD - excluir um orçamento específico
    function excluirOrcamento($id, $conn) {
        //comando SQL
        $delete = "DELETE FROM `orcamento` WHERE `id_Orcamento`='" . $id . "'";
        $res = $conn->query($delete); //executando linha de comando, excluindo unico registro e retornando booleano

        //caso seja bem sucedido
        if ($res == TRUE) {
            echo "<html> <script> alert('Orcamento removido com sucesso!') </script> </html>"; //mensagem de confirmação
        }

        //caso não seja bem sucedido
        else {
            echo "Erro na remocao do orçamento: <br>".$conn->error; //mensagem de erro
        }

        
    }
}

?>