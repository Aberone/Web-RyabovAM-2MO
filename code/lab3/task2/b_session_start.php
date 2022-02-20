<?php
if (!session_start()) {
    echo "Ошибка: не удалось начать сессию";
    return;
}
if (!isset($_POST['userName'], $_POST['userSurname'], $_POST['userAge'])) {
    echo "Ошибка: часть входных данных не установлена";
    return;
}

$_SESSION['userName'] = $_POST['userName'];
$_SESSION['userSurname'] = $_POST['userSurname'];
$_SESSION['userAge'] = $_POST['userAge'];

header("Location: b.html");
