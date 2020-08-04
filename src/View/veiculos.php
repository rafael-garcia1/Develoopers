<!DOCTYPE html>
<head>
    <title>Veiculos</title>
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
    <h1>Veiculos</h1> <br><br>

    <?php include("../Controller/consultarTodosVeiculos.php") ?>

    <br><br><br>
    <button onclick="document.location='form-veiculos.html'">Cadastrar novo veiculo</button>
</body>