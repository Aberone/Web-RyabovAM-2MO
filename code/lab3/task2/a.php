<?php
$text = $_POST['textArea'];
if (!isset($text)) {
    return;
}
echo "Количество слов: " . str_word_count($text) . "<br>";
echo "Количество символов: " . strlen($text) . "<br>";
