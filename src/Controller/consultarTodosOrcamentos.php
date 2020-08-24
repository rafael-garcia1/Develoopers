<?php

//importando as classes Conexao e OrcamentoDAO
include_once '..\Persistence\Conexao.php';
include_once '..\Persistence\OrcamentoDAO.php';

//criando nova conexão com bd
$conexao = new Conexao();
$conexao = $conexao->getConexao();

//instanciando um DAO para realizar a consulta a tabela Orcamentos
$orcamentodao = new OrcamentoDAO();
$resultado = $orcamentodao->consultarTodosOrcamentos($conexao);

//caso haja resultado positivo
if ($resultado->num_rows > 0) {

    //cabeçalho da tabela
    echo "<table>
            <tr>
                <th> ID </th>
                <th> Placa do Veículo </th>
                <th> CPF do Funcionário </th>
                <th> Descricao do Servico </th>
                <th> Opcoes </th>
            </tr>";

    //montando a tabela a medida que os registros são acessados
    while ($linha = $resultado->fetch_assoc()) {
        echo "<tr>";

        echo "<td>" . $linha['id_Orcamento'] . "</td>" .
             "<td>" . $linha['Veiculo_Placa'] . "</td>" .
             "<td>" . $linha['Funcionario_cpf'] . "</td>" .
             "<td>" . $linha['Descricao_Servico'] . "</td>" .
             
             //botões de edição e exclusão, respectivamente
             //a informação é enviada via um input invisível por POST
             "<td> 
                    <form action='..\View\EditForm-orcamento.php' method='POST'>
                        <input type='hidden' name='_id' value=" . $linha['id_Orcamento'] . ">
                        <button type='submit'> <img src='../View/Icons/edit-2-16.png'> </button>
                    </form>
                        
                    <form action='..\Controller\ExcluirOrcamento.php' method='POST'>
                        <input type='hidden' name='_id' value=" . $linha['id_Orcamento'] . ">
                        <button type='submit'> <img src='../View/Icons/x-mark-16.png'> </button>
                    </form>
              </td>";
        
        echo "</tr>";
    }

    echo "</table>";
}

?>