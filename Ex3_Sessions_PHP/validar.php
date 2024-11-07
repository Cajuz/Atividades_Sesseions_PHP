<?php
 $usuario = $_POST['login'];
$senha = $_POST['senha'];


if ($usuario == "admin" && $senha = "1234" ){
    session_start();
    $_SESSION['login'] = "Administrador";
    $_SESSION['senha'] = "Editor ADM";
    header('Location: acesso.php');

}
else if ($usuario == "visit" && $senha = "12345" ){
    session_start();
    $_SESSION['login'] = "Visitante";
    $_SESSION['senha'] = "Leitor";
    header('Location: acesso.php');

}
else if ($usuario == "colab" && $senha = "123456" ){
    session_start();
    $_SESSION['login'] = "Colaborador";
    $_SESSION['senha'] = "Comentador";
    header('Location: acesso.php');

}

else{
    header('Location: erro.php');
}





?>