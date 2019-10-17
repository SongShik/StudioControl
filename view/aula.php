<?php
include '../cabecalho.php';
include '../header.php';

include '../db.php';

$id_aluno =  $_SESSION['id_aluno'];
$query= "SELECT * FROM agendamento_aula where id_aluno=$id_aluno;";
$consulta_turmas = mysqli_query($conexao,$query);

?>

<section>

<div class="container ">
<div class="row">
    <div class="col-md-9 ">
    <div class="row">
        
            <div class="col-sm-6 "> 
                <a href="turma-sair.php">
                <div class="card text-left" >
                    <img class="card-img-top" src="../img/aula-personalizada.jpg" alt="dados">
                        <div class="card-body">
                         <h4 class="card-title">Turmas que você esta matriculado</h4>
                            
                         </div>
                </div>
                </a>
            </div>
            
            <div class="col-sm-6 "> 
                <a href="turma.php">
                <div class="card text-left " >
                    <img class="card-img-top" src="../img/turmas.jpg" alt="medidas">
                        <div class="card-body">
                         <h4 class="card-title">Entre em uma turma</h4>
                            
                         </div>
                </div>
                </a>
            </div>

    </div>


    </div>

    <div class="col-md-3 barra-lateral">
        <?php include 'barra-lateral.php';  ?>
    </div>
</div>
</div>
</section>

<?php
include '../footer.php';
?>