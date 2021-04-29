<?php 
	$connect_db = mysqli_connect('localhost','root','','training_php4_db');
	mysqli_set_charset($connect_db,"utf8");

	define('admin', 1);
	define('client', 0);

?>