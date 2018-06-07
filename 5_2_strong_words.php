<?php
$lorem = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam et tincidunt urna. Ut posuere ex ut laoreet vestibulum. Proin volutpat purus id tortor sodales dictum. Sed euismod sapien vitae quam convallis, in accumsan eros viverra. Quisque ut iaculis urna, sit amet ultrices eros. Nam pulvinar viverra sapien. Donec nec elit maximus, accumsan erat sit amet, pharetra diam. Morbi efficitur, dolor at lobortis dapibus, risus eros cursus velit, eget mattis urna elit et nisi. Quisque facilisis interdum tincidunt. Suspendisse pretium lorem magna, eget varius tortor pretium id.';
echo 'Original text:<br>' . $lorem . '<br>';

$matches = [];
preg_match_all('/(\b\w{2,}\b)(?=.*?\1)/i', $lorem, $matches);
foreach ($matches[0] as $match) {
	$lorem = preg_replace('/\b'.$match.'\b/', '<strong>' . $match . '</strong>', $lorem);
}

echo '<br>Text after tagging:<br>' . $lorem;
/*ПОЯСНЕНИЕ РЕГУЛЯРКИ
( - первая группа регулярного выражения (начало)
\b - граница (начало) слова
\w - любая буква, цифра или знак подчёркивания
{2,} - слово из минимум 2 символов
\b - граница (конец) слова
) - первая группа регулярного выражения (конец)
(вторая группа регулярного выражения (начало
?= - утверждение (позитивный просмотр вперёд) (обязательная последовательность)
.* - любою количество любых символов, кроме перевода строки
? - преобразование квантификатора * в ленивый
 */
