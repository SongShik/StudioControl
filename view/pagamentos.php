<?php
include '../cabecalho.php';
include '../header.php';
include '../db.php';

$query = "select * from mensalidade";
$consulta_pagamentos = mysqli_query($conexao,$query);
?>

<section>
<div class="container ">
    <div class="row">
        <div class="col-md-6">
            <a href="pagaraula.php">
                <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Pagar aulas</h3>
                    <p class="card-text">pague suas aulas em dia</p>
                </div>
                </div>
            </a>
        </div>
       
        <div class="col-md-6">
            <a href="mensalidade.php">
                <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Mensalidade</h3>
                    <p class="card-text">pague suas mensalidades</p>
                </div>
                </div>
            </a>
      </div>
    </div>

<div class="row  mt-5 fonte-20"><p>Mensalidades pagas</p></div>
<table class="table table-hover table-striped" id="turmas">
    <thead>
        <tr>
            <th>mês</th>
            <th>valor</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            while ($linha =  mysqli_fetch_array($consulta_pagamentos)) {
                echo '<tr> <td>'.$linha['mes_referencia'].'</td>';
                echo '<td>'.$linha['valor'].'</td>';      
            }
        ?>
    
    </tbody>


</table>


</div>
</section>

<?php
include '../footer.php';
?>