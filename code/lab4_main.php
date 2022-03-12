<?php
require_once "vendor/autoload.php";
error_reporting(E_ERROR | E_PARSE);

$categoriesNameList = ['(1) Купля', '(2) Продажа', '(3) Пообщаться'];

$googleClient = new Google_Client();
$googleClient->setApplicationName('Google Sheets API Implementation');
$googleClient->setScopes(Google_Service_Sheets::SPREADSHEETS_READONLY);
$googleClient->setAuthConfig('credentials.json');
$googleClient->setAccessType('offline');
$googleClient->setPrompt('select_account consent');

$sheetsService = new Google_Service_Sheets($googleClient);
$spreadsheetId = "1jRUuLDXI1Ng-VZwl51cUYggmDr4CUlzW_-CaXNpEWGI";
$response = $sheetsService->spreadsheets_values->get($spreadsheetId, "Sheet1!A1:D");
$adTable = $response->getValues();


?><!DOCTYPE html>
<html>
<head>
    <title>Adboard (Lab 4)</title>
    <meta charset="UTF-8">
</head>

<body>
    <form name="userAd" action="lab4_sendAd.php" method="post">
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
        foreach ($adTable as $ad) {
            echo "<tr>";
            echo "<td>" . $ad[0] . "</td>";
            echo "<td>" . $ad[1] . "</td>";
            echo "<td>" . $ad[2] . "</td>";
            echo "<td>" . $ad[3] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
