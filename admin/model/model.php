<?php 
	class model {
		public $connect;
		
		public $conn = NULL;
		private $server = 'localhost';
		private $dbName = 'training_php4_db';
		private $user = 'root';
		private $password = '';

		public function __construct(){
			global $connect_db;
			$this->connect=$connect_db;
		}

		public function fetch_all($query){
			
			$query_results=mysqli_query($this->connect,$query);
			//lưu vào 1 mảng:
			$arr=array();
			while($rows= mysqli_fetch_array($query_results))
				$arr[]=$rows;
			return $arr;
		}
		
		public function fetch_one($query){
			$query_results=mysqli_query($this->connect,$query);
			$row=mysqli_fetch_array($query_results);
			return $row;
		}

		public function fetch_count($query) {
			$query_results=mysqli_query($this->connect,$query);
			return mysqli_num_rows($query_results);
		}

		public function query($query){
			mysqli_query($this->connect,$query);
		}
		
		public function connect(){
			$this->conn = new mysqli($this->server, $this->user, $this->password, $this->dbName);

			if ($this->conn->connect_error) {
				printf($this->conn->connect_error);
				exit();
			}
			$this->conn->set_charset("utf8");
		}

        public function closeDatabase(){
			if ($this->conn) {
				$this->conn->close();
			}
		}
	}
 ?>