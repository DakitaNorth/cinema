<?php
	session_start();
	$_SESSION['login'] = FALSE;
	$_SESSION['id'] = FALSE;
	echo "<p>Вы успешно вышли" . $_SESSION['login'] . "</p>";
?>

<a href="../index.php">Вернуться на главную</a>