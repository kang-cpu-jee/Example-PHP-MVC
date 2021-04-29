<?php 
	class controller_login extends controller {
		public function __construct(){
 			
 			require_once('model/model_login.php');

			if(!isset($_SESSION["loged"])||$_SESSION["loged"]=="")
					include "view/login/login.php";
				else
					include "view/layout/layout.php";
 
			if(isset($_POST["signin"]))
				$this->login();
 
		}

		public function login(){
			$model_login = new model_login();

			$email = $_POST['email_lg'];
			$pass = md5($_POST['passlg']);

			if ($email && $pass) {
				$result = $model_login->login($email, $pass);
				$check = $result->num_rows;

				if ($check > 0) {
					$data = $result->fetch_array();
					$_SESSION['loged'] = $data["email"];
					header("location:index.php");
				} else {
					header("location:index.php");
				}
			}
		}
	}
	new controller_login();
?>
