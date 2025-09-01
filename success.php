<?php

// Ortak dosya dahil ediliyor (veritabanı bağlantısı ve oturum yönetimi)
require("includes/common.php");

// Eğer kullanıcı oturum açmamışsa, ana sayfaya yönlendirilir
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

// Kullanıcı ID'si oturumdan alınıyor
$user_id = $_SESSION['user_id'];

// Kullanıcı tarafından satın alınan ürünlerin ID'leri URL üzerinden alınıyor
$item_ids_string = $_GET['itemsid'];

// Kullanıcının satın aldığı ürünlerin durumu 'Confirmed' (2) olarak güncelleniyor
$query = "UPDATE user_item SET status=2 WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status= 1 ";
mysqli_query($con, $query) or die(mysqli_error($con));

?>

<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Başarıyla Tamamlandı | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet"> <!-- Bootstrap stil dosyası -->
        <link href="css/style.css" rel="stylesheet"> <!-- Kendi stil dosyanız -->
    </head>
    <body>
        <!-- Sayfanın baş kısmı dahil ediliyor (header.php) -->
        <?php include 'includes/header.php'; ?>

        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="col-lg-4 col-md-6 ">
                    <!-- Başarı mesajı görseli -->
                    <img src="img/thanks.png" style="float: left;">
                </div>
                <div class="jumbotron">
                      <h3 align="center">Tebrikler!! Siparişiniz onaylandı. Bizimle alışveriş yaptığınız için teşekkür ederiz.</h3><hr>
                      <p align="center">Başka bir ürün almak için <a href="products.php">buraya tıklayın</a>.</p>
                </div>
            </div>
        </div>
        
        <!-- Sayfanın alt kısmı dahil ediliyor (footer.php) -->
        <?php include("includes/footer.php"); ?>
    </body>
</html>
