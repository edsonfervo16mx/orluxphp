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
	}
?>