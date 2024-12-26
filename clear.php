<?php
// clear.php: Очищення сесії та кукі
session_start();

// Видалення змінної сесії
session_unset();
session_destroy();

// Видалення кукі
setcookie('username', '', time() - 3600);

// Перенаправлення на головну сторінку
header('Location: index.php');
exit();
?>