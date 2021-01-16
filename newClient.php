<?php

require_once('classes/client.php');

$nome = $_POST['nome']; 
$empresa = $_POST['empresa'];

$novoCliente = new Client();
$novoCliente->setClient($nome);
$novoCliente->setEnterprise($empresa);
$novoCliente->insert();

header('Location:home.php');
?>