
<?php 

$title = "Produtos";
require_once('layout/main.php')

?>

<table class="table table-ordered table-hover">
  <thead>
  	<tr>
  		<th>Código</th>
  		<th>Produto</th>
  		<th>Quantidade</th>
  		<th>Valor</th>
  	</tr>
  </thead>
  <tbody>
  	<?php
       $conn = new PDO("mysql:dbname=vendas;host=localhost", 'root', '');
       $stm = $conn->prepare("SELECT * FROM produto");
       $stm->execute();
       $produtos = $stm->fetchAll(PDO::FETCH_ASSOC);

       foreach($produtos as $produto) {
       	echo "<tr>".
       	"<td>".$produto['id']."</td>".
       	"<td>".$produto['nome']."</td>".
       	"<td>".$produto['quantidade']."</td>".
       	"<td> R$".$produto['preco']."</td>".
       	"</tr>";
       }
  	?>
  </tbody>
</table>