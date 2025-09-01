<?php

// Bu sayfa kullanıcı şifresini günceller
require("includes/common.php");

// Eğer kullanıcı giriş yapmamışsa, ana sayfaya yönlendir
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

// Eski şifreyi al ve güvenli hale getir
$old_pass = $_POST['old-password'];
$old_pass = mysqli_real_escape_string($con, $old_pass);
$old_pass = MD5($old_pass);

// Yeni şifreyi al ve güvenli hale getir
$new_pass = $_POST['password'];
$new_pass = mysqli_real_escape_string($con, $new_pass);
$new_pass = MD5($new_pass);

// Yeni şifreyi tekrar al ve güvenli hale getir
$new_pass1 = $_POST['password1'];
$new_pass1 = mysqli_real_escape_string($con, $new_pass1);
$new_pass1 = MD5($new_pass1);

// Kullanıcının mevcut şifresini veritabanından al
$query = "SELECT email, password FROM users WHERE email ='" . $_SESSION['email'] . "'";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$row = mysqli_fetch_array($result);
$orig_pass = $row['password'];

// Eğer iki yeni şifre uyuşmuyorsa, hata mesajı göster
if ($new_pass != $new_pass1) {
    $error = "<span class='red'>İki şifre eşleşmiyor</span>";
    header('location: settings.php?error= ' . $error);
} else {
    // Eğer eski şifre doğruysa, yeni şifreyi güncelle
    if ($old_pass == $orig_pass) {
        $query = "UPDATE users SET password = '" . $new_pass . "' WHERE email = '" . $_SESSION['email'] . "'";
        mysqli_query($con, $query) or die(mysqli_error($con));
        $error = "<span class='red'>Şifre Güncellendi</span>";
        header('location: settings.php?error= ' . $error);
    } else {
        // Eski şifre yanlışsa hata mesajı göster
        $error = "<span class='red'>Yanlış Eski Şifre</span>";
        header('location: settings.php?error= ' . $error);
    }
}
?>
