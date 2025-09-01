<?php
session_start(); // Oturumu başlatır.

if (!isset($_SESSION['email'])) { // Eğer oturumda e-posta adresi yoksa
    header('location: login.php'); // Kullanıcıyı giriş sayfasına yönlendirir.
}

session_destroy(); // Oturumu sonlandırır.

header('location: index.php'); // Kullanıcıyı ana sayfaya yönlendirir.
?>
