<?php

include '../db.php';
$id_aluno = 1;
$peso =addslashes($_POST['peso']);
$biceps_esquerdo =addslashes($_POST['biceps_esquerdo']);
$cintura_esquerda =addslashes($_POST['cintura_esquerda']);
$coxa_esquerda =addslashes($_POST['coxa_esquerda']);
$gemeos_esquerdo =addslashes($_POST['gemeos_esquerdo']);
$quadril =addslashes($_POST['quadril']);
$peitoral =addslashes($_POST['peitoral']);
$biceps_direiro =addslashes($_POST['biceps_direiro']);
$cintura_direira =addslashes($_POST['cintura_direira']);
$coxa_direira =addslashes($_POST['coxa_direira']);
$gemeos_direiro =addslashes($_POST['gemeos_direiro']);
$data =addslashes($_POST['data']);

$query = "insert into medida(id_aluno,peso,biceps_esquerdo,cintura_esquerda,
                            coxa_esquerda,gemeos_esquerdo,quadril,
                            peitoral,biceps_direiro,cintura_direira,coxa_direira,
                            gemeos_direiro,data) values (
    '$id_aluno',
    '$peso',
   '$biceps_esquerdo',
    '$cintura_esquerda',
    '$coxa_esquerda',
    '$gemeos_esquerdo',
    '$quadril',
    '$peitoral',
    '$biceps_direiro',
    '$cintura_direira',
    '$coxa_direira',
    '$gemeos_direiro',
    '$data')";

$consulta = mysqli_query($conexao,$query);

header('location:../view/medidas.php?ok');


