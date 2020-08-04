<?php

#NÃO FUNCIONA

include_once '..\Persistence\Conexao.php';
include_once '..\Persistence\VeiculoDAO.php';

$placa = $_POST['_placa'];

$conexao = new Conexao();
$conexao = $conexao->getConexao();

$veiculodao = new VeiculoDAO();
$consulta = $veiculodao->consultarVeiculo($placa, $conexao);

if ($consulta->num_rows == 1) {
    $registro = $consulta->fetch_assoc();

    $p = $registro['Placa'];
}

$res = $veiculodao->excluirVeiculo($p, $conexao);

echo "<html> <script> window.location='../View/Veiculos.php' </script> </html>";

?>