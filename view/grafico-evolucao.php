<?php
include '../cabecalho.php';
include '../header.php';

include '../db.php';

?>

<section>



    <div class="row mr-3 ml-3">
            <div class="col-md-4 "> 
                    <canvas id="grafico-peso"></canvas>
            </div>
            <div class="col-md-4 "> 
                    <canvas id="grafico-peitoral"></canvas>
            </div>
            <div class="col-md-4 "> 
                    <canvas id="grafico-biceps_direito"></canvas>
            </div>
    </div>
<hr>
    <div class="row mr-3 ml-3">
            <div class="col-md-4 "> 
                    <canvas id="grafico-biceps_esquerdo"></canvas>
            </div>
            <div class="col-md-4 "> 
                    <canvas id="grafico-cintura_direita"></canvas>
            </div>
            <div class="col-md-4 "> 
                    <canvas id="grafico-cintura_esquerda"></canvas>
            </div>
    </div>
<hr>
    <div class="row mr-3 ml-3">
            <div class="col-md-4 "> 
                    <canvas id="grafico-quadril"></canvas>
            </div>
            <div class="col-md-4 "> 
                    <canvas id="grafico-coxa_direita"></canvas>
            </div>
            <div class="col-md-4 "> 
                    <canvas id="grafico-coxa_esquerda"></canvas>
            </div>
    </div>
<hr>
    <div class="row mr-3 ml-3">
            <div class="col-md-4 "> 
                    <canvas id="grafico-gemeos_direito"></canvas>
            </div>
            <div class="col-md-4 "> 
                    <canvas id="grafico-gemeos_esquerdo"></canvas>
            </div>
            <div class="col-md-4 "> 
                    <canvas id="grafico-teste"></canvas>
            </div>
    </div>



</section>
<?php
include '../footer.php';
?>

