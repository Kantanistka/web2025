<?php
session_start();

$errors = [];

if (empty($_POST['userName'])) {
    $errors[] = "Имя не может быть пустым";
}
if (empty($_POST['endDate'])) {
    $errors[] = "Дата окончания подписки не выбрана";
}
if (empty($_POST['magazine'])) {
    $errors[] = "Журнал не выбран";
}
if (empty($_POST['paymentFormat'])) {
    $errors[] = "Формат оплаты не выбран";
}

if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    header("Location: index.php");
    exit();
}


$userName = htmlspecialchars($_POST['userName']);
$endDate = htmlspecialchars($_POST['endDate']);
$magazine = htmlspecialchars($_POST['magazine']);
$paymentFormat = htmlspecialchars($_POST['paymentFormat']);

$eVersion = isset($_POST['eVersion']) ? 'Да' : 'Нет';

$_SESSION['formData'] = [
    'userName' => $userName,
    'endDate' => $endDate,
    'magazine' => $magazine,
    'eVersion' => $eVersion,
    'paymentFormat' => $paymentFormat,
];

$line = implode(";", $_SESSION['formData']) . "\n";
file_put_contents("data.txt", $line, FILE_APPEND);

require_once 'ApiClient.php';
$api = new ApiClient();

$url = 'https://api.spaceflightnewsapi.net/v4/articles/'; // пример
$apiData = $api->request($url);

$_SESSION['api_data'] = $apiData;


header("Location: index.php");
exit();
?>
