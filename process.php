<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
    
    $_SESSION['username'] = $username;

    setcookie('username', $username, time() + 7 * 24 * 60 * 60);

    header('Location: page.php');
    exit();
}
?>