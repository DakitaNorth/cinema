<?php
	//проверка логина на пустое значение
	if (isset($_REQUEST["login"])) {
		$login = $_REQUEST["login"];
		if ($login == ""){
			unset($login);
		}
	}
	//проверка пароля на пустое значение
	if (isset($_REQUEST["password"])) {
		$password = $_REQUEST["password"];
		if ($password == ""){
			unset($password);
		}
	}

	if (empty($login) or empty($password)) {
		exit("<p>Введена не вся информация</p>
			<a href='../../index.php'>Вернуться на главную</a>");
	}

	//удаление пробелов по бокам, спец символов и значений

	$login = stripcslashes($login);
	$password = stripcslashes($password);
	$login = htmlspecialchars($login);
	$password = htmlspecialchars($password);
	$login = trim($login);
	$password = trim($password);
	return array($login,$password);
?>