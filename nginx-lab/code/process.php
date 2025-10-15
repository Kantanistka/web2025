<?php
session_start();

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

header("Location: index.php");
exit();
?>
