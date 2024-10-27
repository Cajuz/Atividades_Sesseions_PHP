<?php
session_start(); 

$_SESSION['nome2'] = $_POST['nome2'];
$_SESSION['idade2'] = $_POST['idade2'];
$_SESSION['peso2'] = $_POST['peso2'];
$_SESSION['altura2'] = $_POST['altura2'];

//recebendo dados das sessões
$nome1 = $_SESSION['nome1'];
$idade1 = $_SESSION['idade1'];
$peso1 = $_SESSION['peso1'];
$altura1 = $_SESSION['altura1'];

$nome2 = $_SESSION['nome2'];
$idade2 = $_SESSION['idade2'];
$peso2 = $_SESSION['peso2'];
$altura2 = $_SESSION['altura2'];

// Comparações 
if ($altura1 > $altura2) {
    $maior_altura = $nome1 ." é o(a) mais alto(a)";
} elseif ($altura1 < $altura2) {
    $maior_altura = $nome2 ." é o(a) mais alto(a)";
} else {
    $maior_altura = "Ambos têm a mesma altura";
}

if ($idade1 > $idade2) {
    $mais_velho = $nome1 . " é o(a) mais velho(a)";
} elseif ($idade1 < $idade2) {
    $mais_velho = $nome2 . " é o(a) mais velho(a)";
} else {
    $mais_velho = "Ambos têm a mesma idade";
}

if ($peso1 > $peso2) {
    $maior_peso = $nome1 . " Tem o maior peso";
} elseif ($peso1 < $peso2) {
    $maior_peso = $nome2  . " Tem o maior peso";
} else {
    $maior_peso = "Ambos têm o mesmo peso";
}
?>

<!DOCTYPE html>
<html>
<head>C
    <title>Comparação de Dados</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Comparação dos Dados</h2>
        <div class="mt-4">
            <p><strong>Quem tem a maior altura:</strong> <?php echo $maior_altura; ?></p>
            <p><strong>Quem é mais velho:</strong> <?php echo $mais_velho; ?></p>
            <p><strong>Quem tem o maior peso:</strong> <?php echo $maior_peso; ?></p>
        </div>
        <a href="tela1.php" class="btn btn-danger btn-block mt-3">Reiniciar</a>
    </div>
</body>
</html>