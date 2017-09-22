<?php 
	require_once '../../core/Autoload.php';
	$title = 'Registrar';
	$layout = new Layout;
	$layout->renderHead($title);
	require_once '../../layers/containers/empresa/menu.empresa.php';
	require_once '../../layers/containers/empresa/registrar.empresa.php';
	$layout->renderFooter();
?>