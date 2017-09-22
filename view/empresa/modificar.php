<?php 
	require_once '../../core/Autoload.php';
	$title = 'Modificar';
	$layout = new Layout;
	$layout->renderHead($title);
	require_once '../../layers/containers/empresa/menu.empresa.php';
	require_once '../../layers/containers/empresa/modificar.empresa.php';
	$layout->renderFooter();
?>