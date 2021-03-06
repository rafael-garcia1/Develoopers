<?php

//importando classes Conexão e VeiculoDAO
include_once '..\Persistence\Conexao.php';
include_once '..\Persistence\VeiculoDAO.php';

//recuperando placa relativa ao registro desejado
$placa = $_POST['_placa'];

//criando nova conexão com o bd
$conexao = new Conexao();
$conexao = $conexao->getConexao();

//instanciando DAO para excluir o registro do BD
$veiculodao = new VeiculoDAO();
$res = $veiculodao->excluirVeiculo($placa, $conexao);

//retornando a tela principal
echo "<html> <script> window.location='../View/Veiculos.php' </script> </html>";

?>