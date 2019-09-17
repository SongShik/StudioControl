<?php

include '../db.php';
// identificador do id_perfil
session_start();
$id_perfil = $_SESSION['id_perfil'];
// aluno

$nome_completo =addslashes($_POST['nome_completo']);
$rg =addslashes($_POST['rg']);
$cpf =addslashes($_POST['cpf']);
$email =addslashes($_POST['email']);
//$data_nascimento = addslashes($_POST['data_nascimento']);

// telefone
$telefone =addslashes($_POST['telefone']);
//$telefone =addslashes($_POST['telefone']);


//localizacao
$nome_rua =addslashes($_POST['nome_rua']);
$cep =addslashes($_POST['cep']);
$numero =addslashes($_POST['numero']);
$cidade =addslashes($_POST['cidade']);
//$estado =addslashes($_POST['estado']);
$bairro =addslashes($_POST['bairro']);
//$logradouro =addslashes($_POST['tipo_logradouro']);
//$complemento = addslashes($_POST['complemento']);






//var $sql_ferfil = "update perfil SET nome_completo='$nome_completo',
//data_nascimento='$data_nascimento',email='$email',rg='$rg',cpf='$cpf' WHERE id=$id_perfil";

//upando o perfil
$sql_perfil = "update perfil SET nome_completo='$nome_completo',email='$email',rg='$rg',cpf='$cpf' WHERE id=$id_perfil";

// upando o perfil
//var $sql_endereco = "update endereco SET nome_rua='$nome_rua',bairro='$bairro',cep='$cep',
//                  complemento='$complemento',numero='$numero',cidade='$cidade',estado='$estado',
//                    tipo_logradouro=$logradouro WHERE id_perfil=$id_perfil";
$sql_endereco = "update endereco SET nome_rua='$nome_rua',bairro='$bairro',cep='$cep',
                    numero='$numero',cidade='$cidade'
                     WHERE id_perfil=$id_perfil";

// upando o telefone
$sql_telefone = "update telefone SET telefone='$telefone' where id_perfil=$id_perfil";


$consulta_perfil = mysqli_query($conexao,$sql_perfil);
$consulta_endereco = mysqli_query($conexao,$sql_endereco);
$consulta_telefone = mysqli_query($conexao,$sql_telefone);


header('location:../view/home.php');