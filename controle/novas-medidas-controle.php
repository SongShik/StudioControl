<?php

include '../db.php';
session_start();
$id_aluno = $id_aluno =  $_SESSION['id_aluno'];;
$peso =addslashes($_POST['peso']);
$biceps_esquerdo =addslashes($_POST['biceps_esquerdo']);
$cintura_esquerda =addslashes($_POST['cintura_esquerda']);
$coxa_esquerda =addslashes($_POST['coxa_esquerda']);
$gemeos_esquerdo =addslashes($_POST['gemeos_esquerdo']);
$quadril =addslashes($_POST['quadril']);
$peitoral =addslashes($_POST['peitoral']);
$biceps_direito =addslashes($_POST['biceps_direito']);
$cintura_direita =addslashes($_POST['cintura_direita']);
$coxa_direita =addslashes($_POST['coxa_direita']);
$gemeos_direito =addslashes($_POST['gemeos_direito']);
$data =addslashes($_POST['data']);
$query = "insert into medidas(
    id_aluno,
    peso,
    biceps_esquerdo,
    cintura_esquerda,
    coxa_esquerda,
    gemeos_esquerdo,
    quadril,
    peitoral,
    biceps_direito,
    cintura_direita,
    coxa_direita,
    gemeos_direito,
    data_atualizacao) 
    values (
    '$id_aluno',
    '$peso',
    '$biceps_esquerdo',
    '$cintura_esquerda',
    '$coxa_esquerda',
    '$gemeos_esquerdo',
    '$quadril',
    '$peitoral',
    '$biceps_direito',
    '$cintura_direita',
    '$coxa_direita',
    '$gemeos_direito',
    '$data')";




$consulta = mysqli_query($conexao,$query);

header('location:../view/medidas.php?ok');


