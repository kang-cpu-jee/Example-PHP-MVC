<?php 
	class model_register extends model {
		protected $db;

		public function __construct(){
			$this->db = new model();
			$this->db->connect();
 		}

 		public function register($name, $email, $created_date, $updated_date, $pass)
		{	
			$sql = "INSERT INTO user (name,email,created_date,updated_date,password)
					VALUES ('$name','$email','$created_date','','$pass')";
			$this->db->conn->query($sql);
		}

		public function checkExists($email){

			$sql = "SELECT * FROM user WHERE email = '$email'";
			$result = $this->db->conn->query($sql);
		
			return $result;
		}
	}
?>