<?php

include_once '..\Persistence\Conexao.php';
include_once '..\Persistence\VeiculoDAO.php';

$placa = $_POST['_placa'];

$conexao = new Conexao();
$conexao = $conexao->getConexao();

$veiculodao = new VeiculoDAO();
$res = $veiculodao->excluirVeiculo($placa, $conexao);

echo "<html> <script> window.location='../View/Veiculos.php' </script> </html>";

?>