<?php
if (!session_start()) {
    echo "Ошибка: не удалось начать или продолжить сессию";
    return;
}
if (!isset($_SESSION['userAnswers'])) {
    echo "Ошибка: часть входных данных не установлена";
    return;
}

echo "Ваши ответы:<br>";
echo "<ul>";
foreach ($_SESSION['userAnswers'] as $answer) {
    echo "<li>" . $answer . "</li>";
}
echo "</ul>";
