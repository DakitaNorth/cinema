<?php
	session_start();
	if (!empty($_SESSION['login'])){exit("
		<p>Вы уже вошли, чертовы наглецы!</p>
		<a href='../index.php'>Вернуться на главную</a>
	 ");}
?>
<html>
 	<head>
 		<meta charset="utf-8">
 		<link href="../css/phpMM.css" rel="stylesheet" type="text/css" />
 	</head>
 	<body>
 		<div id="header"><h1>Кинцо от Вадима</h1></div>
 		<div id="content">
 		<h1>Авторизируйтесь молю вас</h1>
 		<p>Введите ваш логин, пароль ниже </p>
 		<form action="scripts/getAuto.php" method="POST">
 			<fieldset>
 				<label for="login">Логин:</label>
 				<input type="text" name="login" size="20">
 				<label for="password">Пароль:</label>
 				<input type="text" name="password" size="20">
 			</fieldset>
 			<fieldset>
 				<input type="submit" value=Авторизироваться>
 				<input type="reset" value="Очистить и начать все с начала">
 			</fieldset>
 		</form>
 		<form action="scripts/resPass.php" method="POST">
 			<fieldset>
 				<label for="login">Логин для восстановления:</label>
 				<input type="text" name="login" size="20">
 			</fieldset>
 			<fieldset>
 				<input type="submit" value="Восстановить пароль">
 			</fieldset>
 		</form>
</html>