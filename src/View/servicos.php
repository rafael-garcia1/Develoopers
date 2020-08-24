<!DOCTYPE html>
<head>
    <title>Servicos</title>
</head>

<style>
    table {
        border-collapse: collapse;
        width: 50%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: center;
        padding: 8px;
    }

    th {
        background-color: black;
        color: white;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }

    tr:nth-child(odd) {
        background-color: #eeeeee;
    }

</style>

<body style="background-color: #5B96B8;">
    <h1 style="text-align: center;">Servicos</h1> <br>
    <h2>Orcamentos</h2><br><br>

    <?php include("../Controller/consultarTodosOrcamentos.php") ?>

    <br><br><br>
    <button onclick="document.location='Form-orcamento.php'">Cadastrar novo orçamento</button>
    <button onclick="document.location='veiculos.php'">Voltar</button>
</body>