<?php
include '../db.php';


$id_turma = $_GET['id_turma'];
$data = date("Y-m-d");  
session_start();
$id_aluno =  $_SESSION['id_aluno'];

//modifica no banco de dados a turma
$query = "INSERT INTO `studiocontrol`.`aluno_turma` (`id_turma`, `id_aluno`, `data_matricula`) VALUES ('$id_turma', '$id_aluno', '$data');";

$consulta = mysqli_query($conexao,$query);

header('location:../view/turma.php?acerto');
