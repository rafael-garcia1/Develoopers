<?php

include_once '..\Persistence\Conexao.php';
include_once '..\Persistence\VeiculoDAO.php';

$conexao = new Conexao();
$conexao = $conexao->getConexao();

$veiculodao = new VeiculoDAO();
$resultado = $veiculodao->consultarTodosVeiculos($conexao);

if ($resultado->num_rows > 0) {

    echo "<table>
            <tr>
                <th> Marca </th>
                <th> Modelo </th>
                <th> Ano </th>
                <th> Placa </th>
                <th> Opcoes </th>
            </tr>";

    while ($linha = $resultado->fetch_assoc()) {
        echo "<tr>";

        echo "<td>" . $linha['Marca'] . "</td>" .
             "<td>" . $linha['Modelo'] . "</td>" .
             "<td>" . $linha['Ano'] . "</td>" .
             "<td>" . $linha['Placa'] . "</td>" .
             "<td> <img src='../View/Icons/edit-2-16.png'>
                        
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