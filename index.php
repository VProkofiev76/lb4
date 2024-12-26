<?php
session_start();
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторна робота №4</title>
</head>
<body>
    <h1>Поле для введення</h1>
    <form action="process.php" method="POST">
        <label for="username">Ім'я користувача:</label>
        <input type="text" id="username" name="username" required>
        <button type="submit">Відправити</button>
    </form>
</body>
</html>