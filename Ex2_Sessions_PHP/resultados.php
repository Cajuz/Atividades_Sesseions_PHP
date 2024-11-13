<?php
session_start();

if (isset($_POST['exampleRadios'])) {
    $respostaAnterior = $_POST['exampleRadios'];
    if ($respostaAnterior == 'option3') { 
        $_SESSION['pont'] += 1;
    }
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="text-center">
    <h1>Quiz Concluído!</h1>
    <p>Sua pontuação final é: <?php echo $_SESSION['pont']; ?> de 10.</p>
    <a href="reiniciar.php" class="btn btn-primary">Tentar novamente</a>
</div>
</body>
</html>


