<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Кинцо</title>
</head>
<body>
	<?php 
	if (empty($_SESSION['login'])){
		echo "<a href='reg/reg_form.php'>Регистрация</a>";
		echo "<a href='auto/authorization_form.php'>Позвольте войти</a>";
	} ?>
	
	<a href="auto/disconnect_form.php">Позвольте выйти</a>
</body>
</html>


 <?php
    // Проверяем, пусты ли переменные логина и id пользователя
    if (empty($_SESSION['login']) or empty($_SESSION['id'])) {
    	echo("<p>Вы вошли как гость</p>");
    } else {
    	echo("<p>Привет, ". $_SESSION['login'] . "!</p>");
    }
?>
