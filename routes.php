<?php 
	require_once 'core/connection.php';

	$conn = new Database;
	$conn->connectDB($key);
	$fields = array('nombre','rfc');
	$where = array('nombre' => 'DIGITALSOFT', 'rfc' => 'DISO251199HTC');
	$conn->selectFromArray('empresa',$fields,$where);
?>