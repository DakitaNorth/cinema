<?php
	require 'app_config.php';
	$link = mysqli_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD) or die("<p>Ошибка подключения к базе данных: " . mysqli_error($link) . "</p>");
	mysqli_select_db($link, DATABASE_NAME) or die("<p>Ошибка выбора БД: " . mysqli_error($link) . "</p>");
 	return $link;
?>