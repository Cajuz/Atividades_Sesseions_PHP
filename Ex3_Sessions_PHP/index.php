

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
    session_start();
    if(isset($_SESSION['login']) && in_array($_SESSION['login'], ["Administrador", "Visitante", "Colaborador"])){
        header("Location: logado.php");
        exit;
    }
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Tela de Login</h2>
        <form action="validar.php" method="post" class="mt-4">
            <div class="form-group">
                <label for="login">Login:</label>
                <input type="text" name="login" id="login" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="number" name="senha" id="senha" class="form-control" required>
            </div>
          
            <button type="submit" class="btn btn-primary btn-block">Submeter</button>
            <button type="reset" class="btn btn-warning btn-block">Limpar</button>
        </form>
    </div>

</body>
</html>