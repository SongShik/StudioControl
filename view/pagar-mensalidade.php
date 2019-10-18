<?php
include '../cabecalho.php';
include '../header.php';
include '../db.php';

$id_pagamento = $_GET['id_pagamento'];
$id_aluno =  $_SESSION['id_aluno'];
$query = "select * from mensalidade where id_aluno = $id_aluno and id = $id_pagamento";
$consulta_pagamentos = mysqli_query($conexao,$query);

while ($linha = mysqli_fetch_array($consulta_pagamentos)) {
   $mes_referencia = $linha['mes_referencia'];
   $valor = $linha['valor'];
   $desconto = $linha['desconto'];
   $juros = $linha['juros'];
   $data_vencimento =  date('d/m/Y',strtotime($linha['data_vencimento']));
   $observacao = $linha['observacao'];
}
?>


<section>

<div class="container ">

    <div class="row  mt-3 fonte-20"><p>Informações do Pagamento</p></div>
        <div class="row dados-pessoais pt-5"> 

        <div class="pl-5 col-md-6">
                <h5>Valor a ser pago: <?php echo $valor; ?>R$</h5>
                <h5>Desconto: <?php echo $desconto; ?>R$</h5>
                <h5>Data Vencimento: <?php echo $data_vencimento; ?></h5>
        </div>
        <div class="pl-5 col-md-6 ">
                <h5>Mês referencia: <?php echo $mes_referencia; ?></h5>
                <h5>Juros: <?php echo $juros; ?>R$</h5>
                <h5>observacao: <?php echo $observacao; ?></h5>
                
        </div>
        
        <a href="../controle/pagar-mensalidade-controle.php?id_pagamento=<?php echo $id_pagamento?>" class="btn btn-block btn-primary btn-default text-white mt-5 mb-3 mr-3 ml-3"> Pagar</a>
           
    </div>
        


</div>
<?php
include '../footer.php';
?>