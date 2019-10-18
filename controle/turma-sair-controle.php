<?php
include '../db.php';


$id = $_GET['id'];


//modifica no banco de dados a turma
$query = "delete from aluno_turma where id=$id;";
$consulta = mysqli_query($conexao,$query);

header('location:../view/turma-sair.php?acerto');
