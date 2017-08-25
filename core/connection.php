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

		/*
		public function trigger($table,$data){
			$query_col = array();
			$query_v = array();
			$data = $this->escape($data);
			foreach ($data as $k => $v) {
				$query_col[] = '`'.$k.'`';
				if (is_array($v)&&isset($v['type'])&& $v["type"] == 'MYSQL_FUNCTION') {
					$query_v[] = $v['value'];
				}else{
					$query_v[] = "'$v'";
				}
			}
			$query = "INSERT INTO " . $table . "(" . implode(", ", $query_col) . ")VALUES(" . implode(", ", $query_v) . ")";
			return  $this->query($query);
		}
		/**/

		public function selectFromArray($table, $fields, $where){
			$where_condition = $this->getWhereCondition($where);
			$query="SELECT ".implode(",", $fields)." FROM $table $where_condition";
			echo $query;
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

		/*
		public function getInsertId(){
			return $this->mysqli->insert_id;
		}
		/**/
	}

?>