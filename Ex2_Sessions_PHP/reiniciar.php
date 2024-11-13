<?php
session_start();

// Resetando a pontuação ao reiniciar
$_SESSION['pont'] = 0;

header("Location: inicio.php"); // Redireciona para a página inicial do quiz
exit();
?>
