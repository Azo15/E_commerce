<!-- Veritabanı bağlantısını kurar ve oturumu başlatır -->
<?php
// Veritabanı bağlantısını kuruyoruz: localhost, kullanıcı adı 'root', şifre yok, veritabanı adı 'store'.
// Eğer bağlantı hatalı olursa, mysqli_error($con) fonksiyonu ile hata mesajı gösterilir.
$con = mysqli_connect("localhost", "root", "", "store")or die(mysqli_error($con));

// Eğer oturum başlatılmamışsa (PHP_SESSION_NONE), oturum başlatıyoruz.
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
?>
