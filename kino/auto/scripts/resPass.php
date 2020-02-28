<?php
	$_REQUEST["password"] = 1234;
	$arr = require "../../scripts/input_login_pass.php";
	$login = $arr[0];
	$password = $arr[1];
	$link = require "../../scripts/database_connection.php";
	$query = "SELECT * FROM users WHERE login = '" . $login . "';";
	$answer = mysqli_query($link,$query);
	$myRow = mysqli_fetch_array($answer);
	if (empty($myRow['id'])) {
		exit("Такого логина не существует, обманщик");
	}
	


?>