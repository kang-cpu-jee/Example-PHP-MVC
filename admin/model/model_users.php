<?php 
	class model_users extends model {
		protected $db;

		public function __construct(){
			$this->db = new model();
			$this->db->connect();
 		}

		public function addUser($name, $email, $created_date, $updated_date, $pass)
		{	
			$this->db->conn->real_escape_string($name);
			$this->db->conn->real_escape_string($email);
			$this->db->conn->real_escape_string($created_date);
			$this->db->conn->real_escape_string($updated_date);
			$this->db->conn->real_escape_string($pass);
			$sql = "INSERT INTO user (name,email,created_date,updated_date,password)
					VALUES ('$name','$email','$created_date','','$pass')";
			$this->db->conn->query($sql);
		}

		public function getUser($id){
			$sql = "SELECT * FROM user WHERE id = $id";
			$result = $this->db->conn->query($sql);
			$data = $result->fetch_array();

			return $data;
		}

	    public function users(){
			$sql = "SELECT * FROM user";
			$result = $this->db->conn->query($sql);
			$list = array();
			while($data = $result->fetch_array()) {
				$list[] = $data;
			}

			return $list;
		}

		public function editUserNotNewPassword($name, $email, $updated_date, $id){
			$sql = "UPDATE user SET name = '$name', email = '$email', updated_date = '$updated_date' WHERE id = $id";
			
			return $this->db->conn->query($sql);
		}
		public function editUserUpdateNewPassword($name, $email, $updated_date, $passnew, $id){
			$sql = "UPDATE user SET name = '$name', email = '$email', password = '$passnew', updated_date = '$updated_date' WHERE id = $id";
			
			return $this->db->conn->query($sql);
		}
	}
?>
