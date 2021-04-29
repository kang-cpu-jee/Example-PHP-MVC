<?php 
	class controller_register extends controller {
		public function __construct(){
			
			require_once('model/model_register.php');

 
			if(!isset($_SESSION["loged"])||$_SESSION["loged"]=="")
					include "view/login/register.php";
				else
					include "view/layout/layout.php";

			if(isset($_POST["register"]))
				$this->register();
 
		}

		public function register(){
			$model_register = new model_register();

			$name = $_POST["name"];
			$email = $_POST["email"];
			$created_date = date("Y-m-d H:i:s");
			$pass1 = $_POST["pass1"];
			$pass2 = $_POST["pass2"];
			$check = $model_register->checkExists($email);

			if ($check->num_rows > 0) {
				echo '1';
			}
			elseif (!$name || !$email || !$pass1 || !$pass2){
				echo '2';
			}
			elseif ($pass1!=$pass2){
				echo '3';
			}
			else				
				$pass = md5($pass1);
				$model_register->register($name, $email, $created_date, $updated_date, $pass);

				$_SESSION["loged"] = $email;
				header("location:index.php");
		}
 
	}
	new controller_register();
?>