<?php
$files = array_diff(scandir('./8_1_upload'), array('.', '..'));

foreach ($files as $img) {
	echo '<img src="./8_1_upload/' . $img . '">';
}