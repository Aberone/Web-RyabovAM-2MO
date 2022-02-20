<?php
if (!session_start()) {
    echo "Ошибка: не удалось начать или продолжить сессию";
    return;
}
if (!isset($_SESSION['userName'], $_SESSION['userSurname'], $_SESSION['userAge'])) {
    echo "Ошибка: часть входных данных не установлена";
    return;
}

$userName = $_SESSION['userName'];
$userSurname = $_SESSION['userSurname'];
$userAge = $_SESSION['userAge'];

echo "Добро пожаловать на сайт, {$userName} {$userSurname}, {$userAge}!";
