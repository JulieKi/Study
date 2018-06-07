<?php
$mix = array("numbers" => array(1, 2, 3, 4, 5),
			 "colors"  => array("black", "white", "red", "blue", "green"),
			 "fruits"  => array("apple", "pear", "watermelon", "pineapple",
								"citrus" => array("lemon", "orange", "grapefruit", "lime")));
print_r($mix);
echo '<br><br><br>';
function recursion($arr) {
	echo 'Array ( ';
	foreach ($arr as $key => $elem) {
		if (is_array($elem)) {
			echo ' [' . $key . '] => ';
			recursion($elem);
		} else {
			echo ' [' . $key . '] => ' . $elem . ' ';
		}
	}
	echo ' )';
	return;
}

recursion($mix);