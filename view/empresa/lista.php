<?php 
	require_once '../../core/Autoload.php';
	$title = 'Lista';
	$layout = new Layout;
	$layout->renderHead($title);
	require_once '../../layers/containers/empresa/menu.empresa.php';
	require_once '../../layers/containers/empresa/list.empresa.php';
	$layout->renderFooter();
?>