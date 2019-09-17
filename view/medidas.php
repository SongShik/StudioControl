<?php
include '../cabecalho.php';
include '../header.php';
?>

<section>

<div class="container ">
<div class="row">
    <div class="col-md-9 ">
    <div class="row">
        
            <div class="col-sm-4 "> 
                <a href="grafico-evolucao.php">
                <div class="card text-left" >
                    <img class="card-img-top" src="../img/gradico-evolucao-imagem.jpg" alt="dados">
                        <div class="card-body">
                         <h4 class="card-title">Grafico de evolução</h4>
                            
                         </div>
                </div>
                </a>
            </div>
            
            <div class="col-sm-4 "> 
                <a href="#Medidas">
                <div class="card text-left " >
                    <img class="card-img-top" src="../img/evolucao-foto-imagem.jpg" alt="medidas">
                        <div class="card-body">
                         <h4 class="card-title">Evolução por foto</h4>
                            
                         </div>
                </div>
                </a>
            </div>

            <div class="col-sm-4 "> 
                <a href="novas-medidas.php">
                <div class="card text-left " >
                    <img class="card-img-top" src="../img/novas-medidas-imagem.jpg" alt="medidas">
                        <div class="card-body">
                         <h4 class="card-title">Novas medidas</h4>
                            
                         </div>
                </div>
                </a>
            </div>
    </div>


    </div>

    <div class="col-md-3 barra-lateral">
    <p>turma do aluno:<br>
    turma 2
    <hr>
    Situação Financeira:<br>
    Nenhuma Pendencia
    </p>
    <?php if( isset($_GET['ok'])){ ?>
            <div class=" alert alert-success mt-5" role="alert">
            Cadastrado nova medida.
            </div>

        <?php } ?>
    </div>
</div>
</div>
</section>

<?php
include '../footer.php';
?>