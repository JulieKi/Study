<?php
$z = [100, 2, 700, 1, 4, 6, 300];
$a = true;
while ($a) {
	for ($i = 0; $i < count($z); $i++) {
		if (!empty($z[$i + 1])) {
			if ($z[$i] > $z[$i + 1])    //if ($z[$i] < $z[$i + 1])
			{
				$j = $z[$i + 1];
				$z[$i + 1] = $z[$i];
				$z[$i] = $j;
				break;
			}
		} else {
			$a = false;
		}
	}
}
print_r($z);
