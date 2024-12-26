<?php
session_start();
$username_session = $_SESSION['username'] ?? 'Немає даних (сесія)';
$username_cookie = $_COOKIE['username'] ?? 'Немає даних (кукі)';
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторна робота №4</title>
</head>
<body>
    <h1>Збереженні дані</h1>
    <p><strong>Ім'я користувача (сесія):</strong> <?php echo ($username_session); ?></p>
    <p><strong>Ім'я користувача (кукі):</strong> <?php echo ($username_cookie); ?></p>
    <a href="clear.php">Очистити дані</a>
</body>
</html>
