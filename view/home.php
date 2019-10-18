<?php
include '../cabecalho.php';
include '../header.php';
?>

<section class="">

<div class="container ">
<div class="row">
    <div class="col-md-9 ">
    <div class="row">
        
            <div class="col-md-4 "> 
                <a href="dados.php">
                <div class="card text-left" >
                    <img class="card-img-top" src="../img/dados-imagem.jpg" alt="dados">
                        <div class="card-body">
                         <h4 class="card-title">Dados</h4>
                            <p class="card-text">Veja seus dados </p>
                         </div>
                </div>
                </a>
            </div>
            
            <div class="col-md-4 "> 
                <a href="medidas.php">
                <div class="card text-left " >
                    <img class="card-img-top" src="../img/medias-imagem2.png" alt="medidas">
                        <div class="card-body">
                         <h4 class="card-title">Medidas</h4>
                            <p class="card-text">Veja seu desempenho</p>
                         </div>
                </div>
                </a>
            </div>

            <div class="col-md-4 "> 
                <a href="pagamentos.php">
                <div class="card text-left " >
                    <img class="card-img-top" src="../img/pagamentos-imagem.jpg" alt="pagamentos">
                        <div class="card-body">
                         <h4 class="card-title">Pagamentos</h4>
                            <p class="card-text">Veja seus Pagamentos</p>
                         </div>
                </div>
                </a>
            </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-4 "> 
                <a href="aula.php">
                <div class="card text-left " >
                    <img class="card-img-top" src="../img/aula-imagem.png" alt="aula">
                        <div class="card-body">
                         <h4 class="card-title">Aulas</h4>
                            <p class="card-text">Programe suas aulas</p>
                            
                         </div>
                </div>
                </a>
            </div>
            <div class="col-md-4 "> 
                <a href="meu-plano.php">
                <div class="card text-left " >
                    <img class="card-img-top" src="../img/meu-plano.jpg" alt="aula">
                        <div class="card-body">
                         <h4 class="card-title">Seu plano</h4>
                            <p class="card-text">informações sobre seu plano</p>
                            
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