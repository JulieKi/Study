<?php
$files = ['2_2_from5to1.php', '2_3_multitable.php', '2_4_notfactorial.php', '3_1_sort.php', '3_2_search.php', 'aaa.txt', '4_1_recursion.php', 'bbb.doc', 'Directory\First.txt'];
echo 'Array before:<br>';
print_r($files);
foreach ($files as $key => $file) {
	if (!file_exists($file)) {
		unset($files[$key]);
	}
}
echo 'Array after:<br>';
print_r($files);
