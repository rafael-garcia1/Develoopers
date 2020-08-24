<?php

//importando classes Conexão e OrcamentoDAO
include_once '..\Persistence\Conexao.php';
include_once '..\Persistence\OrcamentoDAO.php';

//recuperando via POST o dado original do registro
$descricao = $_POST['cdescricao'];
$id = $_POST['cid'];

//criando nova conexão com o bd
$conexao = new Conexao();
$conexao = $conexao->getConexao();

//instanciando DAO para editar o registro no bd
$orcamentodao = new OrcamentoDAO();
$orcamentodao = $orcamentodao->editarOrcamento($id, $descricao, $conexao);

//retornando a tela principal
echo "<html> <script> window.location='../View/servicos.php' </script> </html>";

?>