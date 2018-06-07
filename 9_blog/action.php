<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Блог</title>
</head>
<?php
$mysqli = new mysqli('localhost', 'root', '', 'blog');
if ($mysqli->connect_errno) {
	var_dump($mysqli->connect_error);
}
if (!empty($_POST['title']) && !empty($_POST['body'])) {
	$insert = $mysqli->query("INSERT INTO post (title, body, author) VALUES ('" . $_POST['title'] . "', '" . $_POST['body'] . "', '" .
		(empty($_POST['author']) ? 'Аноним' : $_POST['author']) . "')");
	
	if ($_FILES['image']['error'] == 0) {
		$last_id = $mysqli->insert_id;
		$upload_dir = './images/';
		$filename = $_FILES['image']['name'];
		$ext = substr($filename, strpos($filename, '.'));
		move_uploaded_file($_FILES['image']['tmp_name'], $upload_dir . $last_id . $ext);
		$query = $mysqli->query("UPDATE post SET image = '" . $upload_dir . $last_id . $ext . "' WHERE id = $last_id");
	}
	echo 'Статья успешно добавлена<br><br>';
	echo '<form action="/blog/articles.php"> <input type="submit" value="Перейти ко всем статьям"/></form>';
}  else {
	echo 'Ошибка добавления статьи. Проверьте, все ли поля заполнены (поле "Автор" не обязательно).<br><br>';
	echo 'Ошибка добавления статьи. Проверьте, все ли поля заполнены (поле "Автор" не обязательно).<br><br>';
	echo '<form action="/blog/"> <input type="submit" value="Вернуться назад"/></form>';
}