<?php

session_start();

include '../db.php';
$id_aluno =  $_SESSION['id_aluno'];

$query = "select * from medidas where id_aluno = $id_aluno;";
$medidas = mysqli_query($conexao,$query);

$data = array();
foreach($medidas as $row){
    $data[] = $row;
}



$medidas->close();
print json_encode($data);

