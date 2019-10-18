<?php
include '../cabecalho.php';
include '../header.php';
?>

<section>

<div class="container ">
<form action="../controle/novas-medidas-controle.php" method="post"> 
    <div class="row  mt-3 fonte-20"><p>Novas medidas</p></div>
        <div class="row dados-pessoais pt-5"> 

        <div class="col-md-6 ">
        <div class="col-md-11 "> 
            <div class="form-group">
                <label >Peso:</label>
                <input  type="text" name="peso" class="form-control">
            </div>
            <div class="form-group">
                <label >Bíceps esquerdo:</label>
                <input  type="text" name="biceps_esquerdo" class="form-control">
            </div>
            <div class="form-group">
                <label >Cintura esquerda:</label>
                <input  type="text" name="cintura_esquerda" class="form-control">
            </div>
            <div class="form-group">
                <label >Coxa esquerda:</label>
                <input  type="text" name="coxa_esquerda" class="form-control">
            </div>
            <div class="form-group">
                <label >Gemeos esquerdo:</label>
                <input  type="text" name="gemeos_esquerdo" class="form-control">
            </div>
            <div class="form-group">
                <label >Quadril:</label>
                <input  type="text" name="quadril" class="form-control">
            </div>
            
            
        </div>
        </div>
        <div class="col-md-6 ">
        <div class="col-md-11 "> 
        <div class="form-group">
                <label >Peitoral:</label>
                <input  type="text" name="peitoral" class="form-control">
            </div>
            <div class="form-group">
                <label >Bíceps direito:</label>
                <input  type="text" name="biceps_direito" class="form-control">
            </div>
            <div class="form-group">
                <label >Cintura direita:</label>
                <input  type="text" name="cintura_direita" class="form-control">
            </div>
            <div class="form-group">
                <label >Coxa direita:</label>
                <input  type="text" name="coxa_direita" class="form-control">
            </div>
            <div class="form-group">
                <label >Gemeos direito:</label>
                <input  type="text" name="gemeos_direito" class="form-control">
            </div>
            <div class="form-group">
                <label >Data Atualização:</label>
                <input  type="date" name="data" class="form-control">
            </div>
            </div>
        </div>
        <button type="submit" value="login" class="btn btn-primary w-25 mt-3 mb-3 ml-4">Cadastrar</button>
        </div>
        
</form>
</div>
<?php
include '../footer.php';
?>