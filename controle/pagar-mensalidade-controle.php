<?php
include '../db.php';


$id_pagamento = $_GET['id_pagamento'];


//modifica no banco de dados a turma
$query = "UPDATE mensalidade SET status = 1 where id = $id_pagamento";

$consulta = mysqli_query($conexao,$query);

header('location:../view/pagamentos.php?acerto');

/*
id_mensalidade
id_forma_pagamamento
valor_pago
data_pagamento
parcelas
observacao
*/