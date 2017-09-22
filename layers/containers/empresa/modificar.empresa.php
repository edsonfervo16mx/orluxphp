<?php 
	$empresa = new Empresa;
	$where = array('nombre' => $_GET['id']);
	$datos = $empresa->ver($key, $where);
?>
<div class="container">
	<form action="../../layers/controller/empresa/edit.empresa.php" method="POST">
		<input type="text" name="nombre" placeholder="Ingresar nombre de la empresa" value="<?php echo @$datos->nombre; ?>"><br>
		<input type="text" name="rfc" placeholder="Ingresar rfc de la empresa" value="<?php echo @$datos->rfc; ?>"><br>
		<input type="submit" value="Editar">
	</form>
</div>