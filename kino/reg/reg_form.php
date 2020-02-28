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
 		<h1>Зарегистрируйтесь в нашем кинотеатре!</h1>
 		<p>Пожалуйста, введите ниже свои данные для связи:</p>
 		<form action="scripts/getReg.php" method="POST">
 			<fieldset>
 				<label for="login">Логин:</label>
 				<input type="text" name="login" size="20"><br>
 				<label for="password">Пароль:</label>
 				<input type="text" name="password" size="20"><br>
 			</fieldset>
 			<br>
 			<fieldset class="center">
 				<input type="submit" value="Зарегистрироваться">
 				<input type="reset" value="Очистить и начать все с начала">
 			</fieldset>
 		</form>
 	</body>
 </html>