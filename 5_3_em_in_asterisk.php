<?php
$lorem = '*Lorem ipsum* dolor sit amet, consectetur adipiscing elit. Proin mollis orci sagittis, maximus mi at, ultricies nibh. Nunc faucibus eros vitae eros tempus venenatis. Mauris malesuada laoreet nunc, vitae auctor purus vestibulum sit amet. Nunc dignissim nibh in felis euismod rhoncus. Integer tortor mi, ornare sed tellus at, tincidunt porttitor eros. Maecenas vulputate mattis rutrum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porta, turpis sit amet interdum interdum, eros nisl tincidunt arcu, eget pretium ligula massa at eros.
Aenean ultricies vel dui nec placerat. In sapien leo, convallis quis nisl sed, luctus maximus ipsum. Sed vel consectetur dolor. Nam suscipit ligula sapien, ut lobortis diam mollis ac. Curabitur venenatis, augue in dapibus *faucibus*, orci arcu condimentum nulla, consequat porttitor quam dolor non orci. Praesent egestas nisl eget mi porta porttitor. Curabitur pharetra ipsum a enim commodo molestie.
Nulla imperdiet condimentum sapien, eget interdum nisl. *Fusce aliquam enim vitae arcu gravida*, sit amet finibus quam consequat. Morbi in fringilla ipsum, sed efficitur justo. Morbi porta mollis dolor, vel lacinia turpis. Vestibulum finibus, libero **finibus efficitur** congue, neque enim tempor nisi, at sagittis eros nulla in justo. Quisque pellentesque finibus est. Nunc ante orci, cursus eu ultricies id, convallis sit amet mi. Donec magna dolor, egestas in cursus quis, lacinia in mauris. Proin elementum odio neque, eu porttitor nisi rutrum in. Proin pellentesque odio vitae eros euismod, id mollis orci imperdiet. Nullam sit amet turpis **ut risus** gravida rutrum.';
echo 'Original text:<br>' . $lorem . '<br>';

$matches = [];
preg_match_all('/(\*(\w+(\s+){0,}\w+){1,}\*)(?!\*)/i', $lorem, $matches);
foreach ($matches[0] as $match) {
	$lorem = str_replace($match, '<em>' . str_replace('*', '', $match) . '</em>', $lorem);
}

echo '<br>Text after italicization:<br>' . $lorem;