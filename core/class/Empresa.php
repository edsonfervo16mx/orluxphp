<?php 
	class Empresa{

		public function test(){
			echo 'Ok...';
		}

		public function listar($key){
			$conn = new Connection;
			$conn->open($key);
			/**/
			$fields = array('nombre','rfc','status');
			$where = array();
			$data = $conn->getData($key,'empresa',$fields,$where);
			return($data);
			/**/
		}

		public function registrar($key, $fields){
			$conn = new Connection;
			$conn->open($key);
			$data = $conn->insertData($key,'empresa',$fields);
			return($data);
		}

		public function ver($key, $where){
			$conn = new Connection;
			$conn->open($key);
			/**/
			$fields = array('nombre','rfc','status');
			$data = $conn->getData($key,'empresa',$fields,$where);
			return($data);
		}

		public function modificar($key, $fields){

		}

		public function eliminar($key, $fields){

		}
	}


?>