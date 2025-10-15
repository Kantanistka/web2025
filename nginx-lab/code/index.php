<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная страница</title>
</head>
<body>
    <h1>Статус подписки</h1>

    <?php if (isset($_SESSION['formData'])): ?>
        <div style="color: green;">
            <h3>🧩 Подписка успешно оформлена:</h3>
            <ul>
                <li>Имя: <?= $_SESSION['formData']['userName'] ?></li>
                <li>Дата окончания: <?= $_SESSION['formData']['endDate'] ?></li>
                <li>Журнал: <?= $_SESSION['formData']['magazine'] ?></li>
                <li>Электронная версия: <?= $_SESSION['formData']['eVersion'] ?></li>
                <li>Оплата: <?= $_SESSION['formData']['paymentFormat'] ?></li>
            </ul>
        </div>
    <?php else: ?>
        <p>Данных о последней подписке пока нет.</p> <?php endif; ?>

    <hr>
    <a href="form.html">Заполнить форму ещё раз</a> |
    <a href="view.php">Посмотреть все оформленные подписки</a>

</body>
</html>
