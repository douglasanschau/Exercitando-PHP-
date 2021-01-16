<?php

class Client {
     private $cliente;
     private $empresa; 
     private $conn;

    public function __construct() {
    	$this->conn = new PDO('mysql:dbname=vendas;host=localhost', 'root', '');
    }

    public function setClient($cliente) {
     	$this->cliente = $cliente;
    }

    public function getClient() {
     	return $this->cliente;
    }

    public function setEnterprise($empresa) {
     	$this->empresa = $empresa;
    }

    public function getEnterprise() {
     	return $this->empresa;
    }

    public function insert() {
    	$stm = $this->conn->prepare('INSERT INTO empresa (nome, empresa) VALUES (:NOME, :EMPRESA)');
    	$cliente = $this->cliente;
        $empresa = $this->empresa;
        $stm->bindParam(":NOME", $cliente);
        $stm->bindParam(":EMPRESA", $empresa);
        $stm->execute();
    }


}

?>