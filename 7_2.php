<?php
function recursion($dir, &$result) {
	$files = array_diff(scandir($dir), array('.', '..'));
	
	foreach ($files as $file) {
		if (!is_dir($dir . '/' . $file)) {
			$result[] = $file;
		} else {
			recursion($dir . '/' . $file, $result[$dir]);
		}
	}
	print_r($result);
	echo '<pre>';
}

$arr = array();
recursion(__DIR__, $arr);
