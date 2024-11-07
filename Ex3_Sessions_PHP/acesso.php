<?php
session_start();
$usuario = $_SESSION['login'];
$senha = $_SESSION['senha'];

echo "Seja bem vindo Sr. $usuario";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <h3 class="text"> Informações</h3>
        <p>Nível de acesso: <?php echo "$senha";?>
        </p><br>
        
        <a href="sair.php">Deslogar e voltar para tela de login</a>
        
    </div>

</body>
</html>
