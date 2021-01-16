<?php
$title = "Clientes";
require_once('layout/main.php');

?>

<table class="table table-ordered table-hover">
  <thead>
  	<tr>
  		<th>Código</th>
  		<th>Cliente</th>
  		<th>Empresa</th>
  	</tr>
  </thead>
  <tbody>
  	<?php 
     $conn = new PDO('mysql:dbname=vendas;host=localhost', 'root', ''); 

     $stm = $conn->prepare('SELECT * FROM empresa');
     $stm->execute();
     $clientes = $stm->fetchAll(PDO::FETCH_ASSOC);

    foreach($clientes as $cliente) {
     	echo "<tr>".
     	"<td>".$cliente['id']."</td>".
     	"<td>".$cliente['nome']."</td>".
     	"<td>".$cliente['empresa']."</td>".
     	"</tr>";
     }
  	 ?>
  </tbody>
</table>