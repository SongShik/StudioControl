<?php

include '../db.php';
$usuario =addslashes($_POST['usuario']);
$senha =addslashes($_POST['senha']);

$query = "select * from credencial where usuario= '$usuario' and senha='$senha'";

// procura no banco de dados
$consulta = mysqli_query($conexao,$query);

// pega as informacoes do usuario e atribui em uma variavel
$usuario_logado = mysqli_fetch_assoc($consulta);

if(mysqli_num_rows($consulta) == 1){
    session_start();
    $_SESSION['id_perfil'] = $usuario_logado['id_perfil']; 
    $_SESSION['login'] = true;
    $_SESSION['usuario'] = $usuario;
    
    header('location:../view/home.php');
}
else{
    header('location:../index.php?erro');
   
}


