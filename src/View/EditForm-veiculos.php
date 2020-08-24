<?php

    //importando classes Conexão e VeiculoDAO
    include_once '..\Persistence\Conexao.php';
    include_once '..\Persistence\VeiculoDAO.php';

    //criando nova conexão com bd
    $conexao = new Conexao();
    $conexao = $conexao->getConexao();

    //recuperando placa do veiculo a ser editado
    $placa = $_POST['_placa'];

    //instanciando DAO para realizar a consulta dos dados pre-cadastrados
    //para servirem de value no form
    $veiculodao = new VeiculoDAO();
    $resultado = $veiculodao->consultarVeiculo($placa, $conexao);

    //transformando o registro
    $registro = $resultado->fetch_assoc();

    //atribuindo variaveis para melhor utilização
    $ano = $registro['Ano'];
    $marca = $registro['Marca'];
    $modelo = $registro['Modelo'];

    //formulario em html (muito semelhante a "Form-veiculos.html")
    echo "<head>
            <title>Editar veiculo</title>
          </head>

          <body style='background-color: #5B96B8;'>
            <h1 style='text-align: center;'>Edicao de veiculo</h1>
            <br><br>
    
            <form action='..\controller\EditarVeiculo.php' method='POST' autocomplete='off'>
                Ano: <input type='number' name='cano' value='" . $ano . "' min='1970' max='2020' size='5' required> <br><br>
                Placa: <input type='text' name='cplaca' value='" . $placa . "' size='10' readonly> <br><br>
                Modelo: <input type='text' name='cmodelo' value='" . $modelo . "' size='27' maxlength='25' required> <br><br>
                Marca: <input type='text' name='cmarca' value='" . $marca . "' size='27' maxlenght='25' required> <br><br>

                <input type='submit' value='Confirmar alteracao'>
            </form>
          </body>"
    
?>