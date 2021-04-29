<?php 
	class model_login extends model {
		protected $db;

		public function __construct(){
			$this->db = new model();
			$this->db->connect();
 		}
		public function login($email,$pass){

			$sql = "SELECT * FROM user WHERE email = '$email' AND password = '$pass'";
			$result = $this->db->conn->query($sql);
		
			return $result;
		}
	}
?>
