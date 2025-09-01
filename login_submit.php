<?php

require("includes/common.php"); // Veritabanı bağlantısı için gerekli dosyayı dahil ediyoruz

// Kullanıcıdan gelen e-posta ve şifreyi alıyoruz
$email = $_POST['e-mail']; 

$email = mysqli_real_escape_string($con, $email); // Güvenlik için e-posta değerini temizliyoruz

$password = $_POST['password'];

$password = mysqli_real_escape_string($con, $password); // Güvenlik için şifreyi temizliyoruz

$password = MD5($password); // Şifreyi MD5 ile şifreliyoruz (güvenlik amacıyla)

// Kullanıcı girişi için veritabanında e-posta ve şifreyi kontrol ediyoruz
$query = "SELECT id, email FROM users WHERE email='" . $email . "' AND password='" . $password . "'"; 

$result = mysqli_query($con, $query) or die(mysqli_error($con)); // Sorguyu çalıştırıyoruz ve hata durumunda hata mesajı gösteriyoruz

$num = mysqli_num_rows($result); // Veritabanından dönen satır sayısını alıyoruz

// Eğer veritabanında eşleşen e-posta ve şifre bulunmazsa
if ($num == 0) {
    $error = "<span class='red'>Please enter correct E-mail id and Password</span>"; // Hata mesajını hazırlıyoruz
    header('location: login.php?error=' . $error); // Kullanıcıyı login sayfasına yönlendiriyoruz ve hata mesajını iletiyoruz
} else {  
    $row = mysqli_fetch_array($result); // Kullanıcı bilgilerini alıyoruz
    $_SESSION['email'] = $row['email']; // Kullanıcı e-posta adresini oturumda saklıyoruz
    $_SESSION['user_id'] = $row['id']; // Kullanıcı ID'sini oturumda saklıyoruz
    header('location: products.php'); // Kullanıcıyı ürünler sayfasına yönlendiriyoruz
}
?>
