<?php 
	require_once '../../core/Autoload.php';
	$title = 'Ver';
	$layout = new Layout;
	$layout->renderHead($title);
	require_once '../../layers/containers/empresa/menu.empresa.php';
	require_once '../../layers/containers/empresa/ver.empresa.php';
	$layout->renderFooter();
?>