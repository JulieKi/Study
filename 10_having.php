<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
</head>
<?php
$mysqli = new mysqli('localhost', 'root', '', 'books');
if ($mysqli->connect_errno) {
	var_dump($mysqli->connect_error);
}
echo '<h1>Ниже предсталены все авторы и их книги</h1>';
$authors = $mysqli->query("SELECT * FROM `authors`");
$books = $mysqli->query("SELECT * FROM `books`");
while ($author = $authors->fetch_assoc() and $book = $books->fetch_assoc()) {
	echo '<b>Автор:</b> ' . $author['name'];
	echo '. <b>Книга:</b> "' . $book['name'] . '" <b>Год:</b> ' . $book['year'] . '<br>';
}
echo '<h1>Далее представлены авторы, написавшие 3 книги в 1988 году</h1>';
$speedy_authors = $mysqli->query("SELECT * FROM `authors` WHERE `id` IN (SELECT `authors_id` FROM `books_authors` WHERE `books_id` IN (SELECT `id` FROM `books` WHERE `year` = 1988) GROUP BY `authors_id` HAVING COUNT(`books_id`) =3)");
while ($speedy_author = $speedy_authors->fetch_assoc()) {
	echo '<b>Автор:</b>' . $speedy_author['name'];
}