<?php

//importando as classes Conexao e VeiculoDAO
include_once '..\Persistence\Conexao.php';
include_once '..\Persistence\VeiculoDAO.php';

//criando nova conexão com bd
$conexao = new Conexao();
$conexao = $conexao->getConexao();

//instanciando um DAO para realizar a consulta a tabela Veiculos
$veiculodao = new VeiculoDAO();
$resultado = $veiculodao->consultarTodosVeiculos($conexao);

//caso haja resultado positivo
if ($resultado->num_rows > 0) {

    //cabeçalho da tabela
    echo "<table>
            <tr>
                <th> Marca </th>
                <th> Modelo </th>
                <th> Ano </th>
                <th> Placa </th>
                <th> Opcoes </th>
            </tr>";

    //montando a tabela a medida que os registros são acessados
    while ($linha = $resultado->fetch_assoc()) {
        echo "<tr>";

        echo "<td>" . $linha['Marca'] . "</td>" .
             "<td>" . $linha['Modelo'] . "</td>" .
             "<td>" . $linha['Ano'] . "</td>" .
             "<td>" . $linha['Placa'] . "</td>" .
             
             //botões de edição e exclusão, respectivamente
             //a informação é enviada via um input invisível por POST
             "<td> 
                    <form action='..\View\EditForm-veiculos.php' method='POST'>
                        <input type='hidden' name='_placa' value=" . $linha['Placa'] . ">
                        <button type='submit'> <img src='../View/Icons/edit-2-16.png'> </button>
                    </form>
                        
                    <form action='..\Controller\ExcluirVeiculo.php' method='POST'>
                        <input type='hidden' name='_placa' value=" . $linha['Placa'] . ">
                        <button type='submit'> <img src='../View/Icons/x-mark-16.png'> </button>
                    </form>
              </td>";
        
        echo "</tr>";
    }

    echo "</table>";
}

?>