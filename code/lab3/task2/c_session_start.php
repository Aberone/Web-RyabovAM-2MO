<?php
if (!session_start()) {
    echo "Ошибка: не удалось начать сессию";
    return;
}
if (!isset($_POST['userName'], $_POST['userAge'], $_POST['userSalary'], $_POST['userSuffer'])) {
    echo "Ошибка: часть входных данных не установлена";
    return;
}

$_SESSION['userAnswers'] = [$_POST['userName'], $_POST['userAge'], $_POST['userSalary'], $_POST['userSuffer']];

header("Location: c.html");
