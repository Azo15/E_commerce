<?php
require("includes/common.php");

// Kullanıcı daha önce giriş yaptıysa, doğrudan ürünler sayfasına yönlendiriyoruz
if (isset($_SESSION['email'])) {
    header('location: products.php'); // Kullanıcı giriş yaptıysa ürünler sayfasına yönlendiriliyor
}
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Giriş | Life Style Mağazası</title>

    <!-- CSS ve JS dosyaları dahil ediliyor -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <?php include 'includes/header.php'; ?> <!-- Üst menüyü dahil ediyoruz -->

    <div id="content">
        <div class="container-fluid decor_bg" id="login-panel">
            <div class="col-lg-4 col-md-6">
                <img src="img/login.png"> 
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-3 col-md-4">
                    <!-- Giriş paneli -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>GİRİŞ</h4> <!-- Panel başlığı -->
                        </div>
                        <div class="panel-body">
                            <p class="text-warning"><i>Satın alma işlemi için giriş yapınız</i></p> <!-- Bilgilendirme metni -->
                            <form action="login_submit.php" method="POST"> <!-- Giriş formu başlatılıyor -->
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="E-posta" autofocus="on" name="e-mail" required="true"> <!-- E-posta girişi -->
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Şifre" name="password" required="true"> <!-- Şifre girişi -->
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary">Giriş Yap</button><br><br> <!-- Giriş butonu -->
                                <?php if(isset($_GET['error'])) echo $_GET['error']; ?> <!-- Hata mesajı varsa göster -->
                            </form><br/>
                        </div>
                        <div class="panel-footer">
                            <p>Hesabınız yok mu? <a href="signup.php">Kayıt Ol</a></p> <!-- Kayıt olma bağlantısı -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?> <!-- Alt kısmı dahil ediyoruz -->
</body>
</html>
