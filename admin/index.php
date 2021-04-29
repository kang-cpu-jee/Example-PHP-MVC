<?php
	include "../config.php";
	session_start();
	ob_start();
	include "model/model.php";
	include "controller/controller.php";
	$db = new model();
?>
<?php

	if(isset($_GET["act"]))
		if($_GET["act"]=="logout"){
			unset($_SESSION["loged"]);
			header("location:index.php");
		}
?>
<?php
	if(isset($_GET["page"]))
		if($_GET["page"]=="register"){
			include "controller/controller_register.php";
			ob_end_flush();
		}
		else {
			include "controller/controller_login.php";
			ob_end_flush();
		}
	else 
		include "controller/controller_login.php";
		ob_end_flush();
?>
<?php 
	$db->closeDatabase();
?>