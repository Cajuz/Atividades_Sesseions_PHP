

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
        <h2 class="text-center">Cadastro de Dados - Pessoa 1</h2>
        <form action="tela2.php" method="post" class="mt-4">
            <div class="form-group">
                <label for="nome1">Nome:</label>
                <input type="text" name="nome1" id="nome1" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="idade1">Idade:</label>
                <input type="number" name="idade1" id="idade1" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="peso1">Peso:</label>
                <input type="number" name="peso1" id="peso1" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="altura1">Altura:</label>
                <input type="number" step="0.01" name="altura1" id="altura1" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
            <button type="reset" class="btn btn-warning btn-block">Limpar</button>
        </form>
    </div>

</body>
</html>