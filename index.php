<?php

// Veritabanına bağlantı kur ve oturumu başlat
require("includes/common.php");

// Eğer kullanıcı zaten giriş yaptıysa, ürünler sayfasına yönlendir
if (isset($_SESSION['email'])) {
  header('location: products.php');
}

?>

<!-- Belgenin HTML olduğunu belirtir -->
<!DOCTYPE html>
<!-- Sayfanın dilinin İngilizce olduğunu belirtir -->
<html lang="en">
    <head>
        <!-- Sayfanın boyutlarını ve ölçeklendirmesini kontrol etmek için tarayıcıya talimat verir -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Anasayfa başlığı -->
        <title>Hoş Geldiniz | Life Style Mağazası</title>
        <!-- Bootstrap Ana CSS Dosyası -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Özel Stil Dosyası -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body style="padding-top: 50px;">
        <!-- Üst Menü (Header) -->
        <?php
        include 'includes/header.php';
        ?>
        <!-- Üst Menü Sonu -->

        <div id="content">
            <!-- Ana afiş görseli -->
            <div id="banner_image">
                <div class="container"> 
                    <center>
                        <div id="banner_content">
                            <h1>Yaşam tarzı satıyoruz.</h1>
                            <p>Seçkin markalarda %40 İNDİRİM</p>
                            <br/>
                            <a href="products.php" class="btn btn-danger btn-lg active">Şimdi Alışveriş Yap</a>
                        </div>
                    </center>
                </div>
            </div>
            <!-- Ana afiş görseli sonu -->

            <!-- Ürün kategorileri listesi -->
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="products.php#cameras">
                            <div class="thumbnail">
                                <img src="img/1.jpg" alt="">
                                <div class="caption">
                                    <h3>Kameralar</h3>
                                    <p>Dünyanın en iyileri arasından seçin.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#watches">
                            <div class="thumbnail">
                                <img src="img/10.jpg" alt="">
                                <div class="caption">
                                    <h3>Saatler</h3>
                                    <p>En iyi markalardan orijinal saatler.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#shirts">
                            <div class="thumbnail">
                                <img src="img/13.jpg" alt="">
                                <div class="caption">
                                    <h3>Gömlekler</h3>
                                    <p>Özenle seçilmiş gömlek koleksiyonumuz.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Ürün kategorileri listesi sonu -->
        </div>
        
        <!-- Alt Menü (Footer) -->
        <?php
        include 'includes/footer.php';
        ?>
        <!-- Alt Menü Sonu -->
   
    </body> 
</html>
