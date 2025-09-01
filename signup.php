<?php
// Ortak dosya dahil ediliyor (veritabanı bağlantısı ve oturum yönetimi)
require("includes/common.php");

// Kullanıcı zaten giriş yaptıysa, direkt ürünler sayfasına yönlendiriliyor.
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kayıt Ol | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <!-- Sayfanın baş kısmı dahil ediliyor (header.php) -->
        <?php include 'includes/header.php'; ?>
        
        <div class="container-fluid decor_bg" id="content">
            <div class="col-lg-4 col-md-6">
                <img src="img/signup1.png"> <!-- Kayıt ile ilgili görsel -->
            </div>
            <div class="row">
                <div class="container">
                    <div class="col-lg-4 col-lg-offset-3 col-md-6">
                        <h2>KAYIT OL</h2>
                        <form action="signup_script.php" method="POST"> <!-- Kayıt formu -->
                            <!-- Ad Soyad Girişi -->
                            <div class="form-group">
                                <input class="form-control" placeholder="Ad Soyad" autofocus="on" name="name" required="true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <!-- E-posta Girişi (Geçerli format kontrolü) -->
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Geçerli bir E-posta adresi girin" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="e-mail" required="true">
                                <?php if (isset($_GET['m1'])) echo $_GET['m1']; ?> <!-- Hata mesajı için -->
                            </div>
                            <!-- Şifre Girişi (Geçerli format kontrolü) -->
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Şifre" title="Şifre 8 karakter olmalı ve en az 1 büyük harf, 1 küçük harf ve rakam içermelidir" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="password" required="true">
                            </div>
                            <!-- Telefon Numarası Girişi -->
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Telefon (ör. 5388787000)" maxlength="10" size="10" name="contact" required="true">
                                <?php if (isset($_GET['m2'])) echo $_GET['m2']; ?> <!-- Telefon hatası için -->
                            </div>
                            <!-- Şehir Girişi -->
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Şehir" name="city" required="true">
                            </div>
                            <!-- Adres Girişi -->
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Adres" name="address" required="true">
                            </div>
                            <!-- Formu gönder butonu -->
                            <button type="submit" name="submit" class="btn btn-primary">Gönder</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Sayfanın alt kısmı dahil ediliyor (footer.php) -->
        <?php include "includes/footer.php"; ?>
    </body>
</html>
