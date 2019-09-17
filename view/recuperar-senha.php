<?php
include '../cabecalho.php';
include '../header.php';
?>

<section class="">

<div class="container ">
<div class="row">
    
    <div class="col-md-6 ">
        <p> Esqueceu a senha? </p>
        <form class=" " method="post" action="../controle/esqueceu-senha-controle.php">
            
            <div class="form-group">
                <label for="exampleInputEmail1">Digite seu Usuario</label>
                    <input  type="text" class="form-control" id="exampleInputEmail1" name="usuario" placeholder="Insira seu email">
            
            </div>
            <div class="form-group">
                 <label for="exampleInputPassword1">Digite sua nova senha</label>
                    <input  type="password" class="form-control" id="exampleInputPassword1" name="senha" placeholder="Senha">
            </div>
            <div class="form-group">
                 <label for="exampleInputPassword1">Confirmar senha</label>
                    <input  type="password" class="form-control" id="exampleInputPassword1" name="senhaNova" placeholder="Senha">
            </div>
        <button type="submit" value="esqueceu-senha" class="btn btn-primary">Modificar</button>
        <br><br>
        
        <?php if( isset($_GET['erro'] )){ ?>
            <div class=" alert alert-danger mt-3" role="alert">
            Parece que esse usuario não existe
            </div>
        <?php } ?>
    </form>

    </div>
    <div class="col-md-6 "></div>
    </div>
    </div>
</section>



<?php
include '../footer.php';
?>