<?php

include '../db.php';
$usuario =addslashes($_POST['usuario']);
$senha =addslashes($_POST['senha']);

// testa se existe no banco de dados
$teste = "select * from usuario where usuario='$usuario'";
$faz_o_teste = mysqli_query($conexao,$teste);

if(mysqli_num_rows($faz_o_teste) == 1){
//modifica no banco de dados a senha
$query = "update usuario SET usuario = '$usuario' , senha= '$senha' WHERE  usuario = '$usuario'";
$consulta = mysqli_query($conexao,$query);

header('location:../index.php');
}else{
    header('location:../view/recuperar-senha.php?erro');
}



