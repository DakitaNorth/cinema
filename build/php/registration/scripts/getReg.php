<?php
	session_start();
	$arr = require "../../scripts/input_login_pass.php";
	$login = $arr[0];
	$password = $arr[1];
	$link = require "../../scripts/database_connection.php";
	//проверка уникальности логина
	$query = "SELECT id FROM users WHERE login = '" . $login ."';";
	$answer = mysqli_query($link,$query);
	$myRow = mysqli_fetch_array($answer);
	if (!empty($myRow['id'])) {
		exit("<p>Такой логин уже есть, братик :с</p>
			<a href='../../index.php'>Вернуться на главную</a>");
	}
	//запрос на регистрацию
	$query = "INSERT INTO users (login, password) VALUES('". $login . "','". $password ."');";
	$answer = mysqli_query($link, $query);
	if ($answer) {
		$query = "SELECT id, login FROM users WHERE login ='".$login."';";
		$answer = mysqli_query($link, $query);
		echo "<p>Вы успешно зарегестрировались!</p>";
		//id надо не забыть потом
		$myRow = mysqli_fetch_array($answer);
		$_SESSION['login'] = $myRow['login'];
		$_SESSION['id'] = $myRow['id'];
	} else{
		echo "<p>Технические шоколадки!</p>";
	};
?>
<a href="../../index.php">Вернуться на главную</a>