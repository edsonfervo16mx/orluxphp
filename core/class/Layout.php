<?php 
	class Layout{

		public function renderHead($title){
			$html = '
				<!DOCTYPE html>
				<html>
				<head>
					<meta charset="utf-8">
					<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
					<title>'.$title.'</title>
					<link rel="stylesheet" href="../../public/bootstrap3/bootstrap.css">
				</head>
				<body>';
			echo $html;
		}

		public function renderFooter(){
			$html = '
					<script src="../../public/bootstrap3/jquery-3.1.1.slim.min.js"></script>
					<script src="../../public/bootstrap3/bootstrap.js"></script>
				</body>
				</html>
			';
			echo $html;
		}

	}
?>