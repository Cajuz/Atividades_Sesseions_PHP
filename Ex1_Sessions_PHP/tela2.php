<?php
//Recebendo dados do formulário
session_start();
    $_SESSION['nome1'] = $_POST['nome1'];
    $_SESSION['idade1'] = $_POST['idade1'];
    $_SESSION['peso1'] = $_POST['peso1'];
    $_SESSION['altura1'] = $_POST['altura1'];
?>

<html>
<head>
    <title>Cadastro de Dados - Pessoa 2</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Dados da Segunda Pessoa</h2>
        <form action="tela3.php" method="post" class="mt-4">
            <div class="form-group">
                <label for="nome2">Nome:</label>
                <input type="text" name="nome2" id="nome2" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="idade2">Idade:</label>
                <input type="number" name="idade2" id="idade2" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="peso2">Peso:</label>
                <input type="number" name="peso2" id="peso2" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="altura2">Altura:</label>
                <input type="number" step="0.01" name="altura2" id="altura2" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success btn-block">Enviar</button>
            <button type="reset" class="btn btn-warning btn-block">Limpar</button>
        </form>
    </div>
   
</body>
</html>
