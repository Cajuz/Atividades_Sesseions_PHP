<?php
session_start();


if (isset($_POST['exampleRadios'])) {
    $respostaAnterior = $_POST['exampleRadios'];
    if ($respostaAnterior == 'option1') { 
        $_SESSION['pont'] += 1;
    }
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 8</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="quests">
    <h2 class="text-center">Questão 8 <span class="badge badge-secondary"></span></h2><br>
    <h4 class="text-center">Qual é o nome do alien abaixo? <span class="badge badge-secondary"></span></h4>
    <div class="text-center">
        <img src="images/diamante.jpg" class="rounded" alt="Diamante">
    </div><br>

    <div class="text-center">
        <form action="quest9.php" method="post" class="mt-4">
            <div class="alter">
                <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">Diamante</label>
                </div>
            </div>
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">Gelado</label>
            </div><br>
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                <label class="form-check-label" for="exampleRadios3">Homem cristal</label>
            </div>
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
                <label class="form-check-label" for="exampleRadios4">Frosty</label>
            </div>
            <br> 
            <button type="reset" class="btn btn-warning text">Limpar</button><br>
            <button type="submit" class="btn btn-outline-success btn-block">Escolher</button>
        </form>
    </div>
</body>
</html>
