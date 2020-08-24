<?php

    //importando classes Conexão e OrcamentoDAO
    include_once '..\Persistence\Conexao.php';
    include_once '..\Persistence\OrcamentoDAO.php';

    //criando nova conexão com bd
    $conexao = new Conexao();
    $conexao = $conexao->getConexao();

    //recuperando id do orçameento a ser editado
    $id = $_POST['_id'];

    //instanciando DAO para realizar a consulta dos dados pre-cadastrados
    //para servirem de value no form
    $orcamentodao = new OrcamentoDAO();
    $resultado = $orcamentodao->consultarOrcamento($id, $conexao);

    //transformando o registro
    $registro = $resultado->fetch_assoc();

    //atribuindo variaveis para melhor utilização
    $descricao = $registro['Descricao_Servico'];
    $placa = $registro['Veiculo_Placa'];

    //formulario em html (muito semelhante a "Form-orcamento.php")
    echo "<head>
            <title>Editar orcamento</title>
          </head>

          <body style='background-color: #5B96B8;'>
            <h1 style='text-align: center;'>Editar orcamento</h1>
            <br><br>
    
            <!-- Formulário de edição orçamento -->
            <form action='..\controller\EditarOrcamento.php' method='POST' autocomplete='off'>
              Placa do Veiculo: " . $placa . "<br><br>
              Descricao: <br> <textarea name='cdescricao' rows='10' cols='50'>" . $descricao . "</textarea> <br><br>
              <input type='hidden' name='cid' value='" . $id . "'>
              <br><br>
              <input type='submit' value='Confirmar'>
              <input type='reset' value='Limpar'>
              <button onclick='document.location='servicos.php''>Voltar</button>
            </form>
          </body>";
    
?>