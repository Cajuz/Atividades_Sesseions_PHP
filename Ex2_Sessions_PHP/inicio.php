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
        <h2 class="text-center">Quiz - Você realmente conhece o Juncookie?</h2>
        <form action="quest.php" method="post" class="mt-4">
            <div class="form-group">
                <label for="nome1">Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="idade1">Idade:</label>
                <input type="number" name="idade" id="idade" class="form-control" required>
            </div>
            </div>
            <button type="reset" class="btn btn-warning text">Limpar</button><br><br>
            <button type="submit" class="btn btn-outline-success btn-block">Iniciar</button>
            
        </form>
    </div>

    <div class="container mt-5">
        <h2 class="text">Ranking:</h2>
        <p>1º Gabriel Minelli - 10/10pts.</p>
        <p>2º Aurivan - 9/10pts.</p>
        <p>3º Laércio - 9/10pts.</p>
        <p>4º Fábio - 9/10pys.</p>
        <p>5º Neymar - 8/10pts.</p>
        <p>6º Alvaro Sáteles - 0/10pts.</p>
        
    </div>

</body>
</html>