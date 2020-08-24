<?php

//importando classes Conexão e VeiculoDAO
include_once '..\Persistence\Conexao.php';
include_once '..\Persistence\VeiculoDAO.php';

//recuperando via POST os dados originais do registro
$ano = $_POST['cano'];
$placa = $_POST['cplaca'];
$modelo = $_POST['cmodelo'];
$marca = $_POST['cmarca'];

//criando nova conexão com o bd
$conexao = new Conexao();
$conexao = $conexao->getConexao();

//instanciando DAO para editar o registro no bd
$veiculodao = new VeiculoDAO();
$veiculodao = $veiculodao->editarVeiculo($placa, $ano, $modelo, $marca, $conexao);

//retornando a tela principal
echo "<html> <script> window.location='../View/Veiculos.php' </script> </html>";

?>