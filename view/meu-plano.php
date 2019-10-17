<?php
include '../cabecalho.php';
include '../header.php';

include '../db.php';
$id_aluno =  $_SESSION['id_aluno'];
$id_plano =   $_SESSION['id_plano'];
$query= "SELECT * FROM plano where id =$id_plano;";
$consulta_turmas = mysqli_query($conexao,$query);

//campos da tabela plano
$plano =  mysqli_fetch_assoc($consulta_turmas);

$query2= " select 
aula.nome,
plano_aula.quantidade,
aula.duracao from Aula
inner join Plano_Aula on Plano_aula.id_aula=aula.id
inner join Agendamento_aula on Agendamento_aula.id_aula = aula.id
inner join Aluno on Aluno.id=Agendamento_aula.id_aluno
where Aluno.id=$id_aluno";
$consulta_aulas = mysqli_query($conexao,$query2);
$plano_detalhe = mysqli_fetch_assoc($consulta_aulas);

?>

<section>

<div class="container ">
    <div class="row">
        <div class="col-md-9 ">
            <h3 class="text-center"><?php echo $plano['nome'];  ?></h3><br>
                <h5> <?php echo $plano['descricao'];  ?></h5>
        
                    <div class="row mt-5 text-center" >

                        <?php
                    
                    while ($linha = mysqli_fetch_array($plano_detalhe)) {
                        echo '<div class="row mt-5 text-center" >';
                        echo '<div class="col-4 ">'.$linha['nome'].'</div>';
                        echo '<div class="col-4 ">'.$linha['quantidade'].'</div>';
                        echo '<div class="col-4 ">'.$linha['duracao'].'</div>';
                        echo'</div> <hr>';
                    }
                    
                    ?>   
                    </div>
                    <hr>
                    

                    

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
