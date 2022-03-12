<?php
require_once "vendor/autoload.php";
error_reporting(E_ERROR | E_PARSE);

if (!isset($_POST['adCategory'], $_POST['adTitle'], $_POST['adEmail'], $_POST['adText'])) {
    return;
}

$googleClient = new Google_Client();
$googleClient->setApplicationName('Google Sheets API Implementation');
$googleClient->setScopes(Google_Service_Sheets::SPREADSHEETS);
$googleClient->setAuthConfig('credentials.json');
$googleClient->setAccessType('offline');
$googleClient->setPrompt('select_account consent');

$sheetsService = new Google_Service_Sheets($googleClient);
$spreadsheetId = "1jRUuLDXI1Ng-VZwl51cUYggmDr4CUlzW_-CaXNpEWGI";

$valueRangeStr = "Sheet1!A:D";
$values = [[
    $_POST["adCategory"], $_POST["adTitle"], $_POST["adEmail"], $_POST["adText"]
]];
$valueRange = new Google_Service_Sheets_ValueRange(['values' => $values]);
$params = ['valueInputOption' => 'RAW'];
$newLine = $sheetsService->spreadsheets_values->append($spreadsheetId, $valueRangeStr, $valueRange, $params);

header("Location: lab4_main.php");
