<?php
include '../cabecalho.php';
include '../header.php';

$id_perfil = $_SESSION['id_perfil'];
include '../db.php';
$query = "select * from perfil where id=$id_perfil";
$query_endereco = "select * from endereco where id_perfil=$id_perfil";
$query_telefone = "select * from telefone where id_perfil=$id_perfil";

// procura no banco de dados
$consulta = mysqli_query($conexao,$query);
$consulta_endereco = mysqli_query($conexao,$query_endereco);
$consulta_telefone = mysqli_query($conexao,$query_telefone);

// pega as informacoes do usuario e atribui em uma variavel
$perfil = mysqli_fetch_assoc($consulta);
$endereco = mysqli_fetch_assoc($consulta_endereco);
$telefone = mysqli_fetch_assoc($consulta_telefone);

?>

<section>

<div class="container ">
<form action="../controle/dados-controle.php" method="post">
<div class="row  mt-3 fonte-20"><p>Dados Pessoais</p></div>
<div class="row dados-pessoais">
<!-- dados pessoais -->

<div class="col-md-4 "> 
    <div class="form-group">
         <label >Nome:</label>
            <input  type="text" name="nome_completo" value="<?php echo $perfil['nome_completo'];  ?>" class="form-control">
        </div>
</div>

<div class="col-md-4 "> 
    <div class="form-group">
         <label >RG:</label>
            <input  type="text" name="rg" value="<?php echo $perfil['rg'];  ?>" class="form-control">
        </div>
</div>

<div class="col-md-4 "> 
    <div class="form-group">
         <label >CPF:</label>
            <input  type="text" name="cpf" value="<?php echo $perfil['cpf'];  ?>" class="form-control">
        </div>
</div>

</div>
<div class="row  mt-3 fonte-20"><p>Dados de contato  </p></div>
<div class="row   dados-pessoais">
<!-- dados de contato -->
<div class="col-md-4 "> 
    <div class="form-group">
         <label >E-mail:</label>
            <input  type="text" name="email" value="<?php echo $perfil['email'];  ?>" class="form-control">
        </div>
</div>

<div class="col-md-4 "> 
    <div class="form-group">
         <label >Telefone:</label>
            <input  type="text" name="telefone" value="<?php echo $telefone['telefone'];  ?>" class="form-control">
        </div>
</div>

<div class="col-md-4 "> 
    <div class="form-group">
         <label >Celular:</label>
            <input  type="text" name="telefone" value="<?php echo $telefone['telefone'];  ?>" class="form-control">
        </div>
</div>

</div>
<div class="row  mt-3 fonte-20"><p>Dados localização</p></div>
<div class="row   dados-pessoais">
<!-- dados de endereco -->
<div class="col-md-6 "> 
    <div class="form-group">
         <label >RUA:</label>
            <input  type="text" name="nome_rua" value="<?php echo $endereco['nome_rua']; ?>"  class="form-control">
        </div>
</div>

<div class="col-md-4 "> 
    <div class="form-group">
         <label >CEP:</label>
            <input  type="text" name="cep" value="<?php echo $endereco['cep']; ?>" class="form-control">
        </div>
</div>

<div class="col-md-2 "> 
    <div class="form-group">
         <label >Numero:</label>
            <input  type="text" name="numero" value="<?php echo $endereco['numero']; ?>" class="form-control">
        </div>
</div>

</div>


<div class="row mt-2 dados-pessoais">

<!-- dados de continuacao -->
<div class="col-md-4 "> 
    <div class="form-group">
         <label >Cidade:</label>
            <input  type="text" name="cidade" value="<?php echo $endereco['cidade']; ?>" class="form-control">
        </div>
</div>

<div class="col-md-4 "> 
    <div class="form-group">
         <label > Estado:</label>
            <select name="estados " name="estado" class="form-control">

                <option value="<?php echo $telefone['estado'];  ?>"><?php echo $endereco['estado'];  ?></option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
            </select>
        </div>
</div>

<div class="col-md-4 "> 
    <div class="form-group">
         <label >Bairro:</label>
            <input  type="text" name="bairro" value="<?php echo $endereco['bairro']; ?>" class="form-control">
        </div>
</div>

</div>
<button type="submit" value="enviar" class="btn btn-primary w-25 mt-5">Enviar</button>
</div>
</form>
</section>
<?php
include '../footer.php';
?>