<?php
session_start();

// Definir a pontuação inicial
if (!isset($_SESSION['pont'])) {
    $_SESSION['pont'] = 0;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quest 1</title>
</head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<body>
<div class="escolha">
    <h2 class="text-center">Questão 1 <span class="badge badge-secondary"></h2><br>
    <h4 class="text-center">Qual é o nome do alien abaixo? <span class="badge badge-secondary"></h3>
    <div class="text-center">
  <img src="images/fantasmatico.jpg" class="rounded" alt="Fantasmático">
</div><br>

    <div class="text-center">
    <form action="quest2.php" method="post" class="mt-4">
        <div class="alter">
    <div class="form-check-inline">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
  Fantasmático
  </label>
</div>
</div>
<div class="form-check-inline">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    Fantasmão
  </label>
</div><br>
<div class="form-check-inline">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios3">
    Gasparzinho
  </label>
</div>
<div class="form-check-inline">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios4">
    Manto frio
  </label>
</div>
</div>   
<br> <button type="reset" class="btn btn-warning text">Limpar</button><br>
            <button type="submit" class="btn btn-outline-success btn-block">Escolher</button>
            
</div>
        
            
            
        </form>
    
</body>
</html>

