<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post">Введите число
        <input autofocus type="number" name="enter"/>
        <input type="submit" value="Посчитать"/>
    </form>
</body>
</html>

<?php
if (!empty($_POST['enter']) && is_numeric($_POST['enter'])) {
    $result = 0;
    for ($i = 1; $i <= $_POST['enter']; $i++){
        $result += $i;
    }
    echo $result;
}
// Сначала я написала то, что ниже, и решила оставить на всякий случай
/*
$source = $_POST['enter'];
if (isset($source)){
    $arr = array();
    for ($i = 1; $i <= $source; $i++){
        array_push($arr, $i);
    }
    $result = array_sum($arr);
    echo $result;
}*/
?>
