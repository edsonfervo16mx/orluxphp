<?php
	require_once '../../../core/Autoload.php';

	$fields = array(
		'nombre' => utf8_decode($_POST['nombre']),
		'rfc' => utf8_decode($_POST['rfc'])
	);

	$empresa = new Empresa;
	$data = $empresa->registrar($key,$fields);
	#print_r($data);
	print '<meta http-equiv="REFRESH" content="0; url=../../../view/empresa/ver.php?id='.@$data->nombre.'">';
?>