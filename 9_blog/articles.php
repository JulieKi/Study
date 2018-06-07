<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Блог</title>
</head>
<body>
<form action="/blog/">
	<input type="submit" value="Вернуться на главную"/>
</form>
</body>
<?php
$mysqli = new mysqli('localhost', 'root', '', 'blog');

$res = $mysqli->query("SELECT * FROM post limit 10");

	while ($row = $res->fetch_assoc())
	{
		echo '<h2>' . $row['title'] . '</h2>' . '<img src="' . $row['image'] . '" alt=""><br>' . $row['body'] . '<br><br>Автор: ' . $row['author'] . '<br><br>';
	}