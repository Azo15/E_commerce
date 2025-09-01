<?php
require("includes/common.php"); // Veritabanı bağlantısı ve diğer gerekli dosyaların dahil edilmesi.

if (!isset($_SESSION['email'])) { // Eğer kullanıcı oturum açmamışsa
    header('location: index.php'); // Kullanıcıyı ana sayfaya yönlendirir.
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Confirmation | Life Style Store</title> <!-- Sayfa başlığı -->
        <link href="css/bootstrap.css" rel="stylesheet"> <!-- Bootstrap stil dosyasının dahil edilmesi -->
        <link href="css/style.css" rel="stylesheet"> <!-- Özel stil dosyasının dahil edilmesi -->
        <script src="js/jquery.js"></script> <!-- jQuery kütüphanesinin dahil edilmesi -->
        <script src="js/bootstrap.min.js"></script> <!-- Bootstrap JavaScript dosyasının dahil edilmesi -->
    </head>
    <body>
        <?php include 'includes/header.php'; ?> <!-- Header dosyasının dahil edilmesi -->

        <div class="container-fluid" id="content"> <!-- İçeriğin başlatılması -->
            <div class="col-md-12"> <!-- Kolon genişliği 12 birim -->
                <div class="jumbotron"> <!-- Ana içerik kutusu -->
                    <h3 align="center">Siparişiniz başarıyla alınmıştır. Bizimle alışveriş yaptığınız için teşekkür ederiz.</h3><hr> <!-- Başarı mesajı -->
                    <p align="center">Siparişiniz 2 gün içinde teslim edilecektir.</p><hr> <!-- Teslimat süresi mesajı -->
                    <p align="center">Başka bir ürün satın almak için <a href="products.php">buraya</a> tıklayın.</p> <!-- Diğer ürün alımına yönlendirme -->
                </div>
            </div>
        </div>

        <?php include("includes/footer.php"); ?> <!-- Footer dosyasının dahil edilmesi -->
    </body>
</html>
