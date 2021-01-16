<?php

require_once('classes/product.php');


$nome = $_POST['nome'];
$quantidade = $_POST['quantidade'];
$preco = $_POST['preco'];


$produto = new Product();
$produto->setName($nome);
$produto->setQuantity($quantidade);
$produto->setPrice($preco);
$produto->insert();

header('Location:home.php')


?>