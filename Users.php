<?php 
	class Users{
		protected $db;

		public function __construct(){
			$this->db = Database::instance();
		}

		public function get($table, $fields = array()){
			$columns = implode(', ', array_keys($fields));
			//sql query
			$sql = "SELECT * FROM `{$table}` WHERE `{$columns}` = :{$columns}";
			//check if sql query is set
			if($stmt = $this->db->prepare($sql)){
				foreach ($fields as $key => $value) {
					//bind columns
					$stmt->bindValue(":{$key}", $value);
				}
				//execute the query
				$stmt->execute();
				return $stmt->fetch(PDO::FETCH_OBJ);
			}
		}

?>