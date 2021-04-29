<?php 
	class controller_users extends controller {
		public function __construct(){
			parent::__construct();
			
			require_once('model/model_users.php');
			require_once('model/model_register.php');

			$model_users = new model_users();
			$model_register = new model_register();

			$users = $model_users->users();

			
			if(isset($_GET["act"])){
				$act = $_GET["act"];
				
				if($act == "add")
					include "view/users/add.php";
				
				elseif($act == "list"){
					
					$arrs = $model_users->users();
					include "view/users/list.php";
										
					if(isset($_GET["do"])&&$_GET["do"]=="del"&&isset($_GET["id"])){
						$id = $_GET["id"];
						
						$count_id = $this->model->fetch_count("
							select id from user where id = '$id'
						");

						if($count_id==1)
							$this->model->query("
								delete from user where id = '$id'
							");
						header("location:index.php?controller=users&act=list");
					}
					if(isset($_GET["do"])&&$_GET["do"]=="edit"&&isset($_GET["id"])){
						$id = $_GET["id"];

						$count_id = $this->model->fetch_count("
							select id from user where id = '$id'
						");

						if($count_id==1)
							header("location:index.php?controller=users&act=edit&id=".$id."");
					}	
				}

				elseif($act == "profile"){
					$email = $_SESSION["loged"];
	
					$arr = $model_register->checkExists($email);
					$arr = $arr->fetch_array();
					include "view/users/profile.php";

					if(isset($_POST["edit_user"]))
						$this->edit_user();
				}
				elseif($act=="edit"){
					$id = $_GET["id"];

					$arr = $model_users->getUser($id);
					include "view/users/edit.php";

					if(isset($_POST["edit_user"]))
						$this->edit_user();
				}
				else
					echo "Error";

			}

			if(isset($_POST["add_user"]))
				$this->add_user();
		}



		public function act($act){
			if(file_exists("view/users/".$act.".php"))
				include "view/users/".$act.".php";
		}

		public function add_user(){
			$model_register = new model_register();
			$model_users = new model_users();

			$name = $_POST["name"];
			$email = $_POST["email"];
			$pass1 = $_POST["pass1"];
			$pass2 = $_POST["pass2"];
			$created_date = date("Y-m-d H:i:s");

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
			else {			
				$pass = md5($pass1);
				$model_users->addUser($name, $email, $created_date, $updated_date, $pass);
			}
			header("location:index.php?controller=users&act=list");
		}

		public function edit_user(){
			$model_users = new model_users();

			$id = $_GET["id"];
			$name = $_POST["name"];
			$email = $_POST["email"];
			$updated_date = date("Y-m-d H:i:s");
			$passnew0 = $_POST["pass0"];
			$passnew1 = $_POST["pass1"];
			$passnew2 = $_POST["pass2"];

			$kt_edituser = $model_users->getUser($id);

			$passold = md5($passnew0);
			if ($kt_edituser["password"]==$passold){
				if ($passnew1==$passnew2&&$passnew0!=$passnew1&&$passnew1!='') {
					$passnew = md5($passnew1);
					$model_users->editUserUpdateNewPassword($name, $email, $updated_date, $passnew, $id);
				} 
				elseif ($passnew1==''&&$passnew2=='') {
					$model_users->editUserNotNewPassword($name, $email, $updated_date, $id);
				}
				elseif ($passnew1!=''&&$passnew0==$passnew1) {
					echo '<div class="message">The new password must be different from the old one!</div>';
					die();
				}
				else {
					echo '<div class="message">Please enter the same value again.</div>';
					die();
				}
			}
			else {
				echo '<div class="message">Please enter your current password correctly!</div>';
				die();
			}
			header("location:index.php?controller=users&act=list");
		}

	}
	new controller_users();
?>