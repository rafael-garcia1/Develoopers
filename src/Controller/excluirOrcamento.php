<?php

//importando classes Conexão e VeiculoDAO
include_once '..\Persistence\Conexao.php';
include_once '..\Persistence\OrcamentoDAO.php';

//recuperando placa relativa ao registro desejado
$id = $_POST['_id'];

//criando nova conexão com o bd
$conexao = new Conexao();
$conexao = $conexao->getConexao();

//instanciando DAO para excluir o registro do BD
$veiculodao = new OrcamentoDAO();
$res = $veiculodao->excluirOrcamento($id, $conexao);

//retornando a tela principal
echo "<html> <script> window.location='../View/servicos.php' </script> </html>";

?>