<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.8, user-scalable=no ">
    <title> Studio Control</title>
    

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css'>

    <link rel="stylesheet" href="css/style.css" type="text/css">

    <!--jquery -->
    <script src='js/jquery-3.4.1.min.js'></script>

</head>

<body>
<section class="login-fundo">

<div class="container ">
<div class="row">
    <div class="col-md-8 "></div>
    <div class="col-md-4 ">

        <form class="login " method="post" action="controle/login-controle.php">
            <p class="text-center">Studio Control</p>
            <br>
            <div class="form-group">
                <label for="exampleInputEmail1">Usuario</label>
                    <input value="leoo_aprigio" type="text" class="form-control" id="exampleInputEmail1" name="usuario" placeholder="Insira seu email">
            
            </div>
            <div class="form-group">
                 <label for="exampleInputPassword1">Senha</label>
                    <input value="12345678" type="password" class="form-control" id="exampleInputPassword1" name="senha" placeholder="Senha">
            </div>
        <button type="submit" value="login" class="btn btn-primary">Entrar</button>
        <br><br>
        <a href="view/recuperar-senha.php" class="">Esqueceu a senha?</a>
        <?php if( isset($_GET['erro'])){ ?>
            <div class=" alert alert-danger mt-3" role="alert">
            Usuario e/ou senha invalidos.
            </div>
        <?php } ?>
    </form>

    </div>
    </div>
    </div>
</section>






</body>
<!--bootstrap-->
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js'></script>

<!--carousel-->
<script src='../js/owl.carousel.js'></script>
<script src="../js/parallax.js"></script>
<!--animate wow-->
<link rel="stylesheet" href="../css/animate.css">
<script src="../js/wow.min.js"></script>
<!--validação jquey-->
<script src="../js/jquery.validate.min.js"></script>

<script src="../js/index.js"></script>

</html>

