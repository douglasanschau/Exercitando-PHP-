<?php


class Product {
      private $conn;
      private $nome;
      private $quantidade;
      private $preco;


      public function __construct(){
        $this->conn = new PDO('mysql:dbname=vendas;host=localhost', 'root', '');
      }

      public function setName($nome) {
          $this->nome = $nome;
      }

      public function setQuantity($quantidade) {
          $this->quantidade = $quantidade;
      }

      public function setPrice($preco) {
          $this->preco = $preco;
      }

      public function getName() {
      	   return $this->nome;
      }

      public function getQuantity() {
      	   return $this->quantidade;
      }
      
      public function getPrice() {
      	   return $this->preco;
      }

      public function insert() {
      	$stm = $this->conn->prepare('INSERT INTO produto (nome, quantidade, preco) VALUES (:NOME, :QUANTIDADE, :PRECO)');
        $nome = $this->nome;
        $quantidade = $this->quantidade; 
        $preco = $this->preco;
        $stm->bindParam(":NOME", $nome);
        $stm->bindParam(':QUANTIDADE', $quantidade);
        $stm->bindParam(':PRECO', $preco);
        $stm->execute();
      }
      
      
}


?>