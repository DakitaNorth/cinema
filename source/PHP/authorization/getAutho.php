<?php
 	session_start();
 	//проверка логина пароля
	$arr = require "../scripts/input_login_pass.php";
	$login = $arr[0];
	$password = $arr[1];
	//подключение к бд
	$link = require "../scripts/database_connection.php";
	//проверка логина пароля на наличие в бд
	$query = "SELECT * FROM users WHERE login = '" . $login."' and password = '" . $password . "';";
	$answer = mysqli_query($link, $query);
	$myRow = mysqli_fetch_array($answer);
	if (empty($myRow['id'])) {
		exit("<p>Неправильно введен логин/пароль</p>");
	} else{
		$filename = "../../index.php"; 
		$_SESSION['login'] = $myRow['login'];
		$_SESSION['id'] = $myRow['id'];
		$data = file_get_contents($filename);
		echo $data;
	};

?>
