<?php 

$title = "Home";
require_once('layout/main.php');


?>


<form class="form-group" action="newClient.php" method="POST">
   <h3>Novo Cliente</h3>
    <label>Nome</label>
    <input class="form-control" type="text" name="nome">
    <label>Empresa</label>
    <input class="form-control" type="text" name="empresa"> 
    <hr>
    <button type="submit" class="btn btn-outline-primary">Salvar</button>
</form>
   
<form class="form-group produto" action="newProduct.php" method="POST">
   <h3>Novo Produto</h3>
    <label>Nome</label>
    <input class="form-control" type="text" name="nome">
    <label>Quantidade</label>
    <input class="form-control" type="number" name="quantidade">
    <label>Preço</label>
    <input class="form-control" type="text" name="preco"> 
    <hr>
    <button type="submit" class="btn btn-outline-primary">Salvar</button>
</form>
