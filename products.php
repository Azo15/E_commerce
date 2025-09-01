<?php
//veritabanına bağlantı kuruluyor ve oturum başlatılıyor
require("includes/common.php");
?>

<!--Belge türünün HTML olduğunu belirtir-->
<!DOCTYPE html>
<!--Sayfa dilini İngilizce olarak belirtir-->
<html lang="en">
    <head>
        <!--Tarayıcının sayfa boyutlarını ve ölçeklendirmeyi nasıl kontrol edeceğini belirtir-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Ürünler sayfasının başlığı-->
        <title>Ürünler | Life Style Store</title>
        <!-- Bootstrap Ana CSS Dosyası -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Özel CSS Dosyası -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Ana JavaScript Dosyası -->
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>
        <div class="container" id="content">
            <!-- Jumbotron Başlık Alanı -->
            <div class="jumbotron home-spacer" id="products-jumbotron">
                <h1>Life Style Mağazamıza Hoş Geldiniz!</h1>
                <p>Sizin için en iyi kameralar, saatler ve gömlekler bizde. Aramanıza gerek yok, hepsi tek bir yerde.</p>
            </div>
            <hr>

<div class="row text-center" id="cameras">

    <!-- Canon EOS -->
    <div class="col-md-3 col-sm-6 home-feature">
        <div class="thumbnail" style="cursor:pointer;" data-toggle="modal" data-target="#productModal1">
            <img src="img/5.jpg" alt="">
            <div class="caption">
                <h3>Canon EOS</h3>
                <p>Fiyat: 6000.00 $</p>
            </div>
        </div>
    </div>

    <!-- Nikon DSLR -->
    <div class="col-md-3 col-sm-6 home-feature">
        <div class="thumbnail" style="cursor:pointer;" data-toggle="modal" data-target="#productModal2">
            <img src="img/2.jpg" alt="">
            <div class="caption">
                <h3>Nikon DSLR</h3>
                <p>Fiyat: 4000.00 $</p>
            </div>
        </div>
    </div>

    <!-- Sony DSLR -->
    <div class="col-md-3 col-sm-6 home-feature">
        <div class="thumbnail" style="cursor:pointer;" data-toggle="modal" data-target="#productModal3">
            <img src="img/3.jpg" alt="">
            <div class="caption">
                <h3>Sony DSLR</h3>
                <p>Fiyat: 4500,00 $</p>
            </div>
        </div>
    </div>

    <!-- Olympus DSLR -->
    <div class="col-md-3 col-sm-6 home-feature">
        <div class="thumbnail" style="cursor:pointer;" data-toggle="modal" data-target="#productModal4">
            <img src="img/4.jpg" alt="">
            <div class="caption">
                <h3>Olympus DSLR</h3>
                <p>Fiyat: 5000,00 $</p>
            </div>
        </div>
    </div>

</div>

<!-- Modallar -->

<!-- Canon EOS Modal -->
<div class="modal fade" id="productModal1" tabindex="-1" role="dialog" aria-labelledby="productModalLabel1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Kapat">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="productModalLabel1">Canon EOS Detayları</h4>
      </div>
      <div class="modal-body">
        <img src="img/5.jpg" alt="Canon EOS" class="img-responsive mb-3">
        <p><strong>Fiyat:</strong> 6000.00 $</p>
        <p><strong>Çözünürlük:</strong> 26.2 MP</p>
        <p><strong>Lens:</strong> 24-70mm Kit Lens</p>
        <p><strong>Video:</strong> 4K 24fps</p>
        <p><strong>Açıklama:</strong> Canon EOS profesyonel fotoğrafçılar için tasarlanmış yüksek performanslı DSLR.</p>
      </div>
      <div class="modal-footer">
        <?php if (!isset($_SESSION['email'])) { ?>
          <a href="login.php" class="btn btn-primary">Giriş Yap</a>
        <?php } else {
          if (check_if_added_to_cart(1)) {
            echo '<button class="btn btn-success" disabled>Sepete Eklendi</button>';
          } else { ?>
            <a href="cart-add.php?id=1" class="btn btn-primary">Sepete Ekle</a>
          <?php }
        } ?>
        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
      </div>
    </div>
  </div>
</div>

<!-- Nikon DSLR Modal -->
<div class="modal fade" id="productModal2" tabindex="-1" role="dialog" aria-labelledby="productModalLabel2" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Kapat">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="productModalLabel2">Nikon DSLR Detayları</h4>
      </div>
      <div class="modal-body">
        <img src="img/2.jpg" alt="Nikon DSLR" class="img-responsive mb-3">
        <p><strong>Fiyat:</strong> 4000.00 $</p>
        <p><strong>Çözünürlük:</strong> 20.9 MP</p>
        <p><strong>Lens:</strong> 18-55mm Kit Lens</p>
        <p><strong>Video:</strong> Full HD 1080p</p>
        <p><strong>Açıklama:</strong> Nikon DSLR, hem amatör hem profesyonel fotoğrafçılar için ideal seçim.</p>
      </div>
      <div class="modal-footer">
        <?php if (!isset($_SESSION['email'])) { ?>
          <a href="login.php" class="btn btn-primary">Giriş Yap</a>
        <?php } else {
          if (check_if_added_to_cart(2)) {
            echo '<button class="btn btn-success" disabled>Sepete Eklendi</button>';
          } else { ?>
            <a href="cart-add.php?id=2" class="btn btn-primary">Sepete Ekle</a>
          <?php }
        } ?>
        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
      </div>
    </div>
  </div>
</div>

<!-- Sony DSLR Modal -->
<div class="modal fade" id="productModal3" tabindex="-1" role="dialog" aria-labelledby="productModalLabel3" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Kapat">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="productModalLabel3">Sony DSLR Detayları</h4>
      </div>
      <div class="modal-body">
        <img src="img/3.jpg" alt="Sony DSLR" class="img-responsive mb-3">
        <p><strong>Fiyat:</strong> 4500,00 $</p>
        <p><strong>Çözünürlük:</strong> 24.3 MP</p>
        <p><strong>Lens:</strong> 16-50mm Kit Lens</p>
        <p><strong>Video:</strong> 4K 30fps</p>
        <p><strong>Açıklama:</strong> Sony DSLR, üstün görüntü kalitesi ve hız sunar.</p>
      </div>
      <div class="modal-footer">
        <?php if (!isset($_SESSION['email'])) { ?>
          <a href="login.php" class="btn btn-primary">Giriş Yap</a>
        <?php } else {
          if (check_if_added_to_cart(3)) {
            echo '<button class="btn btn-success" disabled>Sepete Eklendi</button>';
          } else { ?>
            <a href="cart-add.php?id=3" class="btn btn-primary">Sepete Ekle</a>
          <?php }
        } ?>
        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
      </div>
    </div>
  </div>
</div>

<!-- Olympus DSLR Modal -->
<div class="modal fade" id="productModal4" tabindex="-1" role="dialog" aria-labelledby="productModalLabel4" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Kapat">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="productModalLabel4">Olympus DSLR Detayları</h4>
      </div>
      <div class="modal-body">
        <img src="img/4.jpg" alt="Olympus DSLR" class="img-responsive mb-3">
        <p><strong>Fiyat:</strong> 5000,00 $</p>
        <p><strong>Çözünürlük:</strong> 24.2 MP</p>
        <p><strong>Lens:</strong> 18-55mm Kit Lens</p>
        <p><strong>Video:</strong> 4K 30fps</p>
        <p><strong>Açıklama:</strong> Profesyonel düzeyde fotoğrafçılık için ideal bir DSLR makinedir.</p>
      </div>
      <div class="modal-footer">
        <?php if (!isset($_SESSION['email'])) { ?>
          <a href="login.php" class="btn btn-primary">Giriş Yap</a>
        <?php } else {
          if (check_if_added_to_cart(4)) {
            echo '<button class="btn btn-success" disabled>Sepete Eklendi</button>';
          } else { ?>
            <a href="cart-add.php?id=4" class="btn btn-primary">Sepete Ekle</a>
          <?php }
        } ?>
        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
      </div>
    </div>
  </div>
</div>
    <!--saatler -->

<div class="row text-center" id="watches">
    <!-- Titan Model #301 -->
    <div class="col-md-3 col-sm-6 home-feature">
        <div class="thumbnail" style="cursor:pointer;" data-toggle="modal" data-target="#productModal5">
            <img src="img/18.jpg" alt="">
            <div class="caption">
                <h3>Titan Model #301</h3>
                <p>Fiyat: 1500,00 $</p>
            </div>
        </div>
    </div>

    <!-- Titan Model #201 -->
    <div class="col-md-3 col-sm-6 home-feature">
        <div class="thumbnail" style="cursor:pointer;" data-toggle="modal" data-target="#productModal6">
            <img src="img/19.jpg" alt="">
            <div class="caption">
                <h3>Titan Model #201</h3>
                <p>Fiyat: 1200,00 $</p>
            </div>
        </div>
    </div>

    <!-- HMT Milan -->
    <div class="col-md-3 col-sm-6 home-feature">
        <div class="thumbnail" style="cursor:pointer;" data-toggle="modal" data-target="#productModal7">
            <img src="img/20.jpg" alt="">
            <div class="caption">
                <h3>HMT Milan</h3>
                <p>Fiyat: 1300,00 $</p>
            </div>
        </div>
    </div>

    <!-- Faber Luba #111 -->
    <div class="col-md-3 col-sm-6 home-feature">
        <div class="thumbnail" style="cursor:pointer;" data-toggle="modal" data-target="#productModal8">
            <img src="img/21.jpg" alt="">
            <div class="caption">
                <h3>Faber Luba #111</h3>
                <p>Fiyat: 1000,00 $</p>
            </div>
        </div>
    </div>
</div>

<!-- MODALLAR -->
<!-- Titan Model #301 Modal -->
<div class="modal fade" id="productModal5" tabindex="-1" role="dialog" aria-labelledby="productModalLabel5">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
        <h4 class="modal-title" id="productModalLabel5">Titan Model #301 Detayları</h4>
      </div>
      <div class="modal-body">
        <img src="img/18.jpg" alt="Titan Model #301" class="img-responsive mb-3">
        <p><strong>Fiyat:</strong> 1500,00 $</p>
        <p><strong>Kasa:</strong> Paslanmaz çelik</p>
        <p><strong>Kordon:</strong> Deri</p>
        <p><strong>Su Geçirmezlik:</strong> 50 metre</p>
        <p><strong>Açıklama:</strong> Şık tasarımı ve kaliteli mekanizmasıyla Titan Model #301, modern tarzı zarafetle buluşturur.</p>
      </div>
      <div class="modal-footer">
        <?php if (!isset($_SESSION['email'])) { ?>
          <a href="login.php" class="btn btn-primary">Giriş Yap</a>
        <?php } else {
          if (check_if_added_to_cart(5)) {
            echo '<button class="btn btn-success" disabled>Sepete Eklendi</button>';
          } else { ?>
            <a href="cart-add.php?id=5" class="btn btn-primary">Sepete Ekle</a>
          <?php }
        } ?>
        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
      </div>
    </div>
  </div>
</div>

<!-- Titan Model #201 Modal -->
<div class="modal fade" id="productModal6" tabindex="-1" role="dialog" aria-labelledby="productModalLabel6">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
        <h4 class="modal-title" id="productModalLabel6">Titan Model #201 Detayları</h4>
      </div>
      <div class="modal-body">
        <img src="img/19.jpg" alt="Titan Model #201" class="img-responsive mb-3">
        <p><strong>Fiyat:</strong> 1200,00 $</p>
        <p><strong>Kasa:</strong> Alüminyum alaşım</p>
        <p><strong>Kordon:</strong> Silikon</p>
        <p><strong>Fonksiyon:</strong> Takvim, Kronometre</p>
        <p><strong>Açıklama:</strong> Günlük kullanım için tasarlanmış sade ve zarif bir saat modeli.</p>
      </div>
      <div class="modal-footer">
        <?php if (!isset($_SESSION['email'])) { ?>
          <a href="login.php" class="btn btn-primary">Giriş Yap</a>
        <?php } else {
          if (check_if_added_to_cart(6)) {
            echo '<button class="btn btn-success" disabled>Sepete Eklendi</button>';
          } else { ?>
            <a href="cart-add.php?id=6" class="btn btn-primary">Sepete Ekle</a>
          <?php }
        } ?>
        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
      </div>
    </div>
  </div>
</div>

<!-- HMT Milan Modal -->
<div class="modal fade" id="productModal7" tabindex="-1" role="dialog" aria-labelledby="productModalLabel7">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
        <h4 class="modal-title" id="productModalLabel7">HMT Milan Detayları</h4>
      </div>
      <div class="modal-body">
        <img src="img/20.jpg" alt="HMT Milan" class="img-responsive mb-3">
        <p><strong>Fiyat:</strong> 1300,00 $</p>
        <p><strong>Cam:</strong> Safir kristal</p>
        <p><strong>Kordon:</strong> Paslanmaz çelik</p>
        <p><strong>Garanti:</strong> 2 yıl</p>
        <p><strong>Açıklama:</strong> Klasik stil sevenler için ideal, zamanın ötesinde bir tasarım sunar.</p>
      </div>
      <div class="modal-footer">
        <?php if (!isset($_SESSION['email'])) { ?>
          <a href="login.php" class="btn btn-primary">Giriş Yap</a>
        <?php } else {
          if (check_if_added_to_cart(7)) {
            echo '<button class="btn btn-success" disabled>Sepete Eklendi</button>';
          } else { ?>
            <a href="cart-add.php?id=7" class="btn btn-primary">Sepete Ekle</a>
          <?php }
        } ?>
        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
      </div>
    </div>
  </div>
</div>

<!-- Faber Luba #111 Modal -->
<div class="modal fade" id="productModal8" tabindex="-1" role="dialog" aria-labelledby="productModalLabel8">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
        <h4 class="modal-title" id="productModalLabel8">Faber Luba #111 Detayları</h4>
      </div>
      <div class="modal-body">
        <img src="img/21.jpg" alt="Faber Luba #111" class="img-responsive mb-3">
        <p><strong>Fiyat:</strong> 1000,00 $</p>
        <p><strong>Stil:</strong> Analog</p>
        <p><strong>Çalışma Tipi:</strong> Quartz</p>
        <p><strong>Kasa Kalınlığı:</strong> 10mm</p>
        <p><strong>Açıklama:</strong> Minimalist çizgiler taşıyan bu model, hem şıklık hem konfor sunar.</p>
      </div>
      <div class="modal-footer">
        <?php if (!isset($_SESSION['email'])) { ?>
          <a href="login.php" class="btn btn-primary">Giriş Yap</a>
        <?php } else {
          if (check_if_added_to_cart(8)) {
            echo '<button class="btn btn-success" disabled>Sepete Eklendi</button>';
          } else { ?>
            <a href="cart-add.php?id=8" class="btn btn-primary">Sepete Ekle</a>
          <?php }
        } ?>
        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
      </div>
    </div>
  </div>
</div>

    <!-- gomlekler -->

<div class="row text-center" id="shirts">

    <!-- H&W -->
    <div class="col-md-3 col-sm-6 home-feature">
        <div class="thumbnail" style="cursor:pointer;" data-toggle="modal" data-target="#productModal9">
            <img src="img/22.jpg" alt="">
            <div class="caption">
                <h3>H&W</h3>
                <p>Fiyat: 1800,00 TL</p>
            </div>
        </div>
    </div>

    <!-- Luis Phil -->
    <div class="col-md-3 col-sm-6 home-feature">
        <div class="thumbnail" style="cursor:pointer;" data-toggle="modal" data-target="#productModal10">
            <img src="img/23.jpg" alt="">
            <div class="caption">
                <h3>Luis Phil</h3>
                <p>Fiyat: 1000,00 TL</p>
            </div>
        </div>
    </div>

    <!-- John Zok -->
    <div class="col-md-3 col-sm-6 home-feature">
        <div class="thumbnail" style="cursor:pointer;" data-toggle="modal" data-target="#productModal11">
            <img src="img/24.jpg" alt="">
            <div class="caption">
                <h3>John Zok</h3>
                <p>Fiyat: 900,00 TL</p>
            </div>
        </div>
    </div>

    <!-- Jhalsani -->
    <div class="col-md-3 col-sm-6 home-feature">
        <div class="thumbnail" style="cursor:pointer;" data-toggle="modal" data-target="#productModal12">
            <img src="img/25.jpg" alt="">
            <div class="caption">
                <h3>Jhalsani</h3>
                <p>Fiyat: 1300,00 TL</p>
            </div>
        </div>
    </div>

</div>

<!-- Modallar -->

<!-- H&W Modal -->
<div class="modal fade" id="productModal9" tabindex="-1" role="dialog" aria-labelledby="productModalLabel9" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Kapat"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="productModalLabel9">H&W Detayları</h4>
      </div>
      <div class="modal-body">
        <img src="img/22.jpg" alt="H&W" class="img-responsive mb-3">
        <p><strong>Fiyat:</strong> 1800,00 TL</p>
        <p><strong>Materyal:</strong> %100 Pamuk</p>
        <p><strong>Kesim:</strong> Slim Fit</p>
        <p><strong>Kol Tipi:</strong> Uzun Kol</p>
        <p><strong>Açıklama:</strong> Modern ve şık görünüm isteyenler için ideal, ofis ve günlük kullanımda rahatlık sunar.</p>
      </div>
      <div class="modal-footer">
        <?php if (!isset($_SESSION['email'])) { ?>
          <a href="login.php" class="btn btn-primary">Giriş Yap</a>
        <?php } else {
          if (check_if_added_to_cart(9)) {
            echo '<button class="btn btn-success" disabled>Sepete Eklendi</button>';
          } else { ?>
            <a href="cart-add.php?id=9" class="btn btn-primary">Sepete Ekle</a>
          <?php }
        } ?>
        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
      </div>
    </div>
  </div>
</div>

<!-- Luis Phil Modal -->
<div class="modal fade" id="productModal10" tabindex="-1" role="dialog" aria-labelledby="productModalLabel10" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Kapat"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="productModalLabel10">Luis Phil Detayları</h4>
      </div>
      <div class="modal-body">
        <img src="img/23.jpg" alt="Luis Phil" class="img-responsive mb-3">
        <p><strong>Fiyat:</strong> 1000,00 TL</p>
        <p><strong>Materyal:</strong> %70 Pamuk, %30 Polyester</p>
        <p><strong>Kesim:</strong> Regular Fit</p>
        <p><strong>Kol Tipi:</strong> Kısa Kol</p>
        <p><strong>Açıklama:</strong> Sıcak yaz günleri için nefes alabilir kumaş yapısıyla ferah bir tercih.</p>
      </div>
      <div class="modal-footer">
        <?php if (!isset($_SESSION['email'])) { ?>
          <a href="login.php" class="btn btn-primary">Giriş Yap</a>
        <?php } else {
          if (check_if_added_to_cart(10)) {
            echo '<button class="btn btn-success" disabled>Sepete Eklendi</button>';
          } else { ?>
            <a href="cart-add.php?id=10" class="btn btn-primary">Sepete Ekle</a>
          <?php }
        } ?>
        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
      </div>
    </div>
  </div>
</div>

<!-- John Zok Modal -->
<div class="modal fade" id="productModal11" tabindex="-1" role="dialog" aria-labelledby="productModalLabel11" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Kapat"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="productModalLabel11">John Zok Detayları</h4>
      </div>
      <div class="modal-body">
        <img src="img/24.jpg" alt="John Zok" class="img-responsive mb-3">
        <p><strong>Fiyat:</strong> 900,00 TL</p>
        <p><strong>Materyal:</strong> %100 Keten</p>
        <p><strong>Kesim:</strong> Slim Fit</p>
        <p><strong>Kol Tipi:</strong> Uzun Kol</p>
        <p><strong>Açıklama:</strong> Yaz aylarında terletmeyen yapısıyla doğallığı sevenler için mükemmel bir seçim.</p>
      </div>
      <div class="modal-footer">
        <?php if (!isset($_SESSION['email'])) { ?>
          <a href="login.php" class="btn btn-primary">Giriş Yap</a>
        <?php } else {
          if (check_if_added_to_cart(11)) {
            echo '<button class="btn btn-success" disabled>Sepete Eklendi</button>';
          } else { ?>
            <a href="cart-add.php?id=11" class="btn btn-primary">Sepete Ekle</a>
          <?php }
        } ?>
        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
      </div>
    </div>
  </div>
</div>

<!-- Jhalsani Modal -->
<div class="modal fade" id="productModal12" tabindex="-1" role="dialog" aria-labelledby="productModalLabel12" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Kapat"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="productModalLabel12">Jhalsani Detayları</h4>
      </div>
      <div class="modal-body">
        <img src="img/25.jpg" alt="Jhalsani" class="img-responsive mb-3">
        <p><strong>Fiyat:</strong> 1300,00 TL</p>
        <p><strong>Materyal:</strong> %100 Pamuk</p>
        <p><strong>Kesim:</strong> Classic Fit</p>
        <p><strong>Kol Tipi:</strong> Uzun Kol</p>
        <p><strong>Açıklama:</strong> Klasik görünüm ve rahatlık arayanların favorisi olan bu gömlek, her stile hitap eder.</p>
      </div>
      <div class="modal-footer">
        <?php if (!isset($_SESSION['email'])) { ?>
          <a href="login.php" class="btn btn-primary">Giriş Yap</a>
        <?php } else {
          if (check_if_added_to_cart(12)) {
            echo '<button class="btn btn-success" disabled>Sepete Eklendi</button>';
          } else { ?>
            <a href="cart-add.php?id=12" class="btn btn-primary">Sepete Ekle</a>
          <?php }
        } ?>
        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
      </div>
    </div>
  </div>
</div>

<hr>
</div>

<?php include("includes/footer.php"); ?>
</body>

</html>
