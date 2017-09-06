<?php
	print '<meta http-equiv="REFRESH" content="0; url=view/empresa/lista.php">';

	#require_once 'core/connection.php';

	//CONSULTA
	/*
	$fields = array('nombre','rfc');
	$where = array('nombre' => 'DIGITALSOFT', 'rfc' => 'DISO251199HTC');
	$data = $conn->getData($key,'empresa',$fields,$where);
	echo @$data->nombre;
	#print_r($data);
	/**/
	//INSERTAR
	/*
	$fields = array(
					'nombre' => utf8_decode('QERYSOFT'),
					'rfc' => utf8_decode('QERY121089HTV')
				);
	$data = $conn->insertData($key,'empresa',$fields);
	#print_r($data);
	echo @$data->nombre;
	/**/
	//MODIFICAR
	/*
	$fields = array(
					'nombre' => utf8_decode('QERYSOFTTEST2'),
					'rfc' => utf8_decode('QERY121089HTV')
				);
	$where = array('nombre' => 'QERYSOFTTEST');
	$conn->updateData($key, 'empresa',$fields,$where);
	#->creando una consulta despues de modificar
	$fields = array('nombre','rfc');
	$where = array('nombre' => 'QERYSOFTTEST2');
	$data = $conn->getData($key,'empresa',$fields,$where);
	echo @$data->nombre;
	echo @$data->rfc;
	/**/
?>