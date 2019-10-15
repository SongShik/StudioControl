<?php

$servidor = "localhost";
$usuario = "studiocontrol";
$senha="123456@studio";
$database = "StudioControl";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);
/*
if($conexao){
    echo "<br>";
    echo "concectado com sucesso";
}else{
    echo "erro ao conectar imbecil";
}*/

