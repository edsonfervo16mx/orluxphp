<?php
	require_once 'config/key.php';
	spl_autoload_register(function ($class) {
		if ($class == 'Connection') {
			require_once 'config/'.$class.'.php';
		}else{
			require_once 'class/'.$class .'.php';
		}
	});
?>