<?php
session_start();
?>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
<h1>Проверка сессии</h1>
<p>Значение: <?php echo (isset($_SESSION['myValue']) ? $_SESSION['myValue'] : 'Нет значения' ) ?></p>

<form method="POST" action="handler.php">
    <label>Введите значение:</label>
    <input type="text" name="myValue">
    <button type="submit">Отправить</button>
</form>

<a href="destroy-session.php">Выйти</a>

</body>
</html>
