<?php
	$empresa = new Empresa;
	$where = array('nombre' => $_GET['id']);
	$datos = $empresa->ver($key, $where);
	echo @$datos->nombre;
	echo '<br>';
	echo @$datos->rfc;
?>