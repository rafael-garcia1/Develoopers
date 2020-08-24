<!DOCTYPE html>
<head>
    <title>Adicionar orcamento</title>
</head>

<body style="background-color: #5B96B8;">
    <h1 style="text-align: center;">Cadastro de novo orcamento</h1>
    <br><br>
    
    <!-- Formulário de orçamento -->
    <form action="..\controller\cadastrarOrcamento.php" method="POST" autocomplete="off">
        Veiculo: <?php include("../Controller/listarVeiculos.php") ?> <br><br>
        Descricao: <br> <textarea name="cdescricao" rows="10" cols="50"></textarea> <br><br>

        <br><br>
        <input type="submit" value="Registrar">
        <input type="reset" value="Limpar">
        <button onclick="document.location='servicos.php'">Voltar</button>
    </form>
</body>