<?php
$z = [1, 2, 4, 6, 100, 300, 700];
$user = 700;
$count = count($z);
$i = (ceil($count / 2)) - 1;
if ($user == $z[$i]) {
	echo $z[$i];
	
} else if ($user < $z[$i]) {
	while ($user < $z[$i]) {
		if ($i == 1) {
			$i = floor($i / 2);
		} else {
			$i = ceil($i / 2);
		}
	}
	if ($user == $z[$i]) {
		echo $z[$i];
	} else {
		echo 'There is no such number in the array';
	}
	
} else if ($user > $z[$i]) {
	while ($user > $z[$i]) {
		$i = ceil($count + $i) / 2;
	}
	
	if ($user == $z[$i]) {
		echo $z[$i];
	} else {
		echo 'There is no such number in the array';
	}
	
}
