<?php

//importando as classes Conexao, Veiculo e VeiculoDAO
include_once '..\Persistence\Conexao.php';
include_once '..\Model\Veiculo.php';
include_once '..\Persistence\VeiculoDAO.php';

//recuperando as informações de cadastro via POST
$ano = $_POST['cano'];
$placa = $_POST['cplaca'];
$modelo = $_POST['cmodelo'];
$marca = $_POST['cmarca'];

//criando nova conexão
$conexao = new Conexao();
$conexao = $conexao->getConexao();

//instanciando objeto Veiculo com as informações recuperadas
$veiculo = new Veiculo($ano, $marca, $modelo, $placa);

//instanciando um DAO para inserir o veículo no bd
$veiculodao = new VeiculoDAO();
$veiculodao->salvar($veiculo, $conexao);

//retornando a tela principal
echo "<html> <script> window.location='../View/Veiculos.php' </script> </html>"

?>