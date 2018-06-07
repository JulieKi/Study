<?php
$arr = ['Hello, ', 'World', '!'];
$text = implode($arr);
echo $text . '<br>';
$arr[0] = 'Bye, ';
$text = implode($arr);
echo $text;
