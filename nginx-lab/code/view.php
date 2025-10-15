<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Все данные</title>
</head>
<body>
    <h2>Все сохранённые данные:</h2>

    <?php
    $dataFile = 'data.txt';
    if (file_exists($dataFile)) {
        $lines = file($dataFile, FILE_IGNORE_NEW_LINES);
        if (empty($lines)) {
            echo "<p>Данных пока нету.</p>";
        } else {
            echo "<table border='1' cellpadding='5' cellspacing='0'>";
            echo "<tr><th>Имя</th><th>Дата окончания</th><th>Журнал</th><th>Эл. версия</th><th>Оплата</th></tr>";
            foreach ($lines as $line) {
                list($name, $date, $magazine, $eVersion, $payment) = explode(";", $line);
                echo "<tr>";
                echo "<td>" . htmlspecialchars($name) . "</td>";
                echo "<td>" . htmlspecialchars($date) . "</td>";
                echo "<td>" . htmlspecialchars($magazine) . "</td>";
                echo "<td>" . htmlspecialchars($eVersion) . "</td>";
                echo "<td>" . htmlspecialchars($payment) . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
    } else {
        echo "<p>Данных нет</p>";
    }
    ?>

    <br>
    <a href="index.php">На главную</a>
</body>
</html>
