<?php
// Создание списка названий категорий и заготовки для ассоциативного массива $adsDict с объявлениями
$categoriesDir = opendir('categories');
$categoriesNameList = [];
$adsDict = [];  // Ключ — название категории, значение — массив троек элементов: [название, email, текст]
while ($categoryName = readdir($categoriesDir)) {
    if (is_dir('categories/' . $categoryName) && $categoryName != '.' && $categoryName != '..') {
        $categoriesNameList[] = $categoryName;
        $adsDict[$categoryName] = [];
    }
}

// Добавление объявлений из файлов в ассоциативный массив $adsDict
foreach ($categoriesNameList as $categoryName) {
    $categoryDir = opendir('categories/' . $categoryName);
    while ($fileName = readdir($categoryDir)) {
        if ($fileName != '.' && $fileName != '..') {
            $filePathName = 'categories/' . $categoryName . '/' . $fileName;
            $file = fopen($filePathName, 'r');
            $title = substr($fileName, 0, strlen($fileName) - 4);
            $email = fgets($file);
            $text = "";
            while (!feof($file)) {
                $text .= fgets($file) . "<br>";
            }
            fclose($file);
            $adsDict[$categoryName][] = ['title' => $title, 'email' => $email, 'text' => $text];
        }
    }
}


?><!DOCTYPE html>
<html>
<head>
    <title>Adboard (Lab 3 Task 3)</title>
    <meta charset="UTF-8">
</head>

<body>
    <form name="userAd" action="sendAd.php" method="post">
        <label>ДОБАВИТЬ ОБЪЯВЛЕНИЕ</label><br><br>
        <label>Категория объявления:</label><br>
        <select name="adCategory">
            <?php
            foreach ($categoriesNameList as $categoryName) {
                echo "<option>" . $categoryName . "</option>";
            }
            ?>
        </select><br><br>
        <label>Название объявления:</label>
        <input name="adTitle"><br><br>
        <label>Ваш email:</label>
        <input name="adEmail"><br><br>
        <label>Текст объявления:</label><br>
        <textarea name="adText" rows="10" cols="80"></textarea><br><br>
        <button type="submit">Отправить объявление</button>
    </form>

    ———————————————————————————————————————————————————————
    <p>СПИСОК ОБЪЯВЛЕНИЙ:</p>
    <table border="1">
        <tr>
            <th>Категория</th>
            <th>Название</th>
            <th>Email</th>
            <th>Текст</th>
        </tr>
        <?php
        foreach ($adsDict as $categoryName => $categoryData) {
            foreach ($categoryData as $titleEmailText) {
                echo "<tr>";
                echo "<td>" . $categoryName . "</td>";
                echo "<td>" . $titleEmailText['title'] . "</td>";
                echo "<td>" . $titleEmailText['email'] . "</td>";
                echo "<td>" . $titleEmailText['text'] . "</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
</body>
</html>
