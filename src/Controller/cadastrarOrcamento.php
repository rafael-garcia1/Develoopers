<?php

//importando as classes Conexao, Orcamento e OrcamentoDAO
include_once '..\Persistence\Conexao.php';
include_once '..\Model\Orcamento.php';
include_once '..\Persistence\OrcamentoDAO.php';

//recuperando as informações de cadastro via POST
$descricao = $_POST['cdescricao'];
$placa = $_POST['cplaca'];

//criando nova conexão
$conexao = new Conexao();
$conexao = $conexao->getConexao();

//instanciando objeto Orcamento com as informações recuperadas
$orcamento = new Orcamento($descricao, $placa);

//instanciando um DAO para inserir o orçamento no bd
$orcamentodao = new OrcamentoDAO();
$orcamentodao->cadastrarOrcamento($orcamento, $conexao);

//retornando a tela de servicos
echo "<html> <script> window.location='../View/servicos.php' </script> </html>"

?>