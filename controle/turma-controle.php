<?php



$id_turma = $_GET['id_turma'];
$data = date("d/m/Y HH:ii:ss");  
session_start();
$id_perfil = $_SESSION['id_perfil'];

//modifica no banco de dados a turma
$query = "update aluno_turma SET id_turma = '$id_turma' , data_matricula = '$data'  WHERE  id_aluno = '$id_perfil'";
$consulta = mysqli_query($conexao,$query);

header('location:../view/turma.php?acerto');
