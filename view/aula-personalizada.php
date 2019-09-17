<?php
include '../cabecalho.php';
include '../header.php';
include '../db.php';

$query_treino = "select * from treino";
$consulta_treino = mysqli_query($conexao,$query_treino);

$query_professores = "select * from professor";
$consulta_professores = mysqli_query($conexao,$query_professores);

?>

<section>

<div class="container ">
<form action="../controle/novas-medidas-controle.php" method="post">
    <p class="fonte-20">Aula Personalizada</p>
    <div class="row  mt-3 fonte-20">
       
        <div class="col-md-6 ">
        <div class="form-group">
                <label >Data e hora:</label>
                <input  type="text" name="data_hora" class="form-control">
        </div>
        
        <div class="form-group">
                <label >Professor:</label>
                <select name="id_professor" id="">
                    <?php while ($linha_professor = mysqli_fetch_array($consulta_professores)) { ?>
                        <option value="<?php echo  $linha_professor ['id']; ?>" > 
                            <?php echo  $linha_professor ['nome']; ?>
                        </option>
                    <?php }?>
                </select>
                </div>

                <div class="form-group">
                <label >Treino:</label>
                <select name="id_treino" id="">
                    <?php while ($linha_treino = mysqli_fetch_array($consulta_treino)) { ?>
                        <option value="<?php echo  $linha_treino ['id']; ?>" > 
                            <?php echo  $linha_treino ['nome']; ?>
                        </option>
                    <?php }?>
                </select>
                </div>


                <button type="submit" value="login" class="btn btn-primary w-25 mt-3 mb-3 ">Agendar</button>
        </div>

        <div class="col-md-6 "></div>
       

    </div>
</form>
</div>
<?php
include '../footer.php';
?>