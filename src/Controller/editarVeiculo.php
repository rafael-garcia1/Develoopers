<?php

include_once '..\Persistence\Conexao.php';
include_once '..\Persistence\VeiculoDAO.php';

$ano = $_POST['cano'];
$placa = $_POST['cplaca'];
$modelo = $_POST['cmodelo'];
$marca = $_POST['cmarca'];

$conexao = new Conexao();
$conexao = $conexao->getConexao();

$veiculodao = new VeiculoDAO();
$veiculodao = $veiculodao->editarVeiculo($placa, $ano, $modelo, $marca, $conexao);

echo "<html> <script> window.location='../View/Veiculos.php' </script> </html>";

?>