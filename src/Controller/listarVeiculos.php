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

    //cabeçalho da lista de seleção
    echo "<select name='cplaca' required>";

    //montando a lista a medida que os registros são acessados
    while ($linha = $resultado->fetch_assoc()) {
        echo "<option value=" . $linha['Placa'] . ">" . $linha['Marca'] . " " . $linha["Modelo"] . "</option>";
    }

    echo "</select>";
}
?>