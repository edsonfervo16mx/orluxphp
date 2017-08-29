<?php
	require_once 'config/key.php';

	class Database{

		public function test(){
			echo 'Ok...';
		}

		public function connectDB($key){
			$host = $key['host'];
			$user = $key['user'];
			$pass = $key['pass'];
			$db = $key['db'];
			$connection = mysqli_connect($host,$user,$pass,$db) or die ('Error');
			return($connection);
		}

		public function closeDB($conn){
			mysqli_close($conn);
		}

		public function triggerDB($key,$sql){
			$conn = $this->connectDB($key);
			$result = $conn->query($sql);
			$this->closeDB($conn);
			return($result);
		}

		public function getData($key, $table, $fields, $where){
			$where_condition = $this->getWhereCondition($where);
			$sql="SELECT ".implode(",", $fields)." FROM $table $where_condition";
			$res = $this->triggerDB($key,$sql);
			$i=0;
			$line = null;
			while ($row = mysqli_fetch_assoc($res)) {
				$line[$i] = array_map('utf8_encode', $row) ;
				$i++;
			}
			$data = json_encode($line);
			$data = json_decode($data);
			if ($data) {
				foreach ($data as $k) {}
				return ($k);
			}else{
				return(null);
			}
		}

		public function getWhereCondition($where){
			$where_sql = "";
			if (empty($where)) {
				return $where_sql;
			}else{
				$i = 0;
				foreach ($where as $key => $value) {
					$i++;
				}
				foreach ($where as $k => $v) {
					#echo $k.' = "'.$v.'"';
					if ($i > 1) {
						$where_sql = $where_sql.$k.' = "'.$v.'" and ';
					}else{
						$where_sql = $where_sql.$k.' = "'.$v.'" ';
					}
					$i--;
				}
			}
			return " WHERE ".$where_sql;
		}

		public function insertData($key,$table, $fields){
			$colum = '';
			$values = '';
			$i = 0;
			foreach ($fields as $k => $v) {
				$i++;
			}
			foreach ($fields as $k => $v) {
				if ($i > 1 ) {
					$colum = $colum.$k.',';
					$values = $values.'"'.$v.'",';
				}else{
					$colum = $colum.$k.'';
					$values = $values.'"'.$v.'"';
				}
				$i--;
			}
			$sql = 'INSERT INTO '.$table.'('.$colum.') VALUES ('.$values.')';
			$this->triggerDB($key,$sql);
			$where_condition = $this->getWhereCondition($fields);
			$sql = 'SELECT * FROM '.$table.$where_condition;
			$res = $this->triggerDB($key,$sql);
			/**/
			$i=0;
			$line = null;
			while ($row = mysqli_fetch_assoc($res)) {
				$line[$i] = array_map('utf8_encode', $row) ;
				$i++;
			}
			$data = json_encode($line);
			$data = json_decode($data);
			if ($data) {
				foreach ($data as $k) {}
				return ($k);
			}else{
				return(null);
			}
			/**/
		}
		//PENDIENTE
		public function updateData($key,$table,$fields,$where){
			$string = '';
			$i = 0;
			foreach ($fields as $k => $v) {
				$i++;
			}
			foreach ($fields as $k => $v) {
				if ($i > 1 ) {
					$string = $string.$k.'= upper("'.$v.'"), ';
				}else{
					$string = $string.$k.'= upper("'.$v.'")';
				}
				$i--;
			}
			$where_condition = $this->getWhereCondition($where);
			$sql = 'UPDATE '.$table.' SET '.$string.''.$where_condition;
			#echo $sql;
			$this->triggerDB($key,$sql);
			$sql = 'SELECT * FROM '.$table.$where_condition;
			$res = $this->triggerDB($key,$sql);
			/**/
			$i=0;
			$line = null;
			while ($row = mysqli_fetch_assoc($res)) {
				$line[$i] = array_map('utf8_encode', $row) ;
				$i++;
			}
			$data = json_encode($line);
			$data = json_decode($data);
			if ($data) {
				foreach ($data as $k) {}
				return ($k);
			}else{
				return(null);
			}
		}
	}
?>