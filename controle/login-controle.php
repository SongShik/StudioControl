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



    //pegar as informacoes do aluno 
    $id_perfil = $_SESSION['id_perfil'];
    $query2= "select * from aluno where id_perfil = $id_perfil";
    $consulta2 = mysqli_query($conexao,$query2);
    $aluno = mysqli_fetch_assoc($consulta2);
    if(mysqli_num_rows($consulta) == 1){
    $_SESSION['id_aluno'] = $aluno['id'];
    $_SESSION['objetivo'] = $aluno['objetivo'];
    $_SESSION['id_plano']= $aluno['id_plano'];
    }
    header('location:../view/home.php');
}
else{
    header('location:../index.php?erro');
   
}


