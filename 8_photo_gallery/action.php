<html>
<head>
	<meta charset="UTF-8">
</head>
</html>
<?php
//var_dump($_FILES['image']);
$upload_dir = './8_1_upload';
$name = ($_FILES['image']['name']);
if (move_uploaded_file($_FILES['image']['tmp_name'],$upload_dir . '/' . $name)) {
	echo "Файл успешно сохранён";
} else {
	echo "Ошибка загрузки файла";
}
echo '<br><a href="./gallery.php">В галерею</a><br>';
echo '<a href="./index.html">На главную</a>';