<?php

include_once '..\Persistence\Conexao.php';
include_once '..\Model\Veiculo.php';
include_once '..\Persistence\VeiculoDAO.php';

$ano = $_POST['cano'];
$placa = $_POST['cplaca'];
$modelo = $_POST['cmodelo'];
$marca = $_POST['cmarca'];

$conexao = new Conexao();
$conexao = $conexao->getConexao();

$veiculo = new Veiculo($ano, $marca, $modelo, $placa);

$veiculodao = new VeiculoDAO();
$veiculodao->salvar($veiculo, $conexao);

echo "<html> <script> window.location='../View/Veiculos.php' </script> </html>"

?>