<?php
require_once("includes/common.php");
// Eğer kullanıcı giriş yapmamışsa, ana sayfaya yönlendir
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ayarlar | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <div class="container-fluid" id="content">
            <div class="col-lg-4 col-md-6">
                    <img src="img/settings.jpg" alt="Ayarlar Resmi">
                </div>
            <div class="row">
                <div class="col-lg-4 col-md-6" id="settings-container">
                    <h4>Şifreyi Değiştir</h4>
                    <form action="settings_script.php" method="POST">
                        <div class="form-group">
                            <input type="password" class="form-control" name="old-password"  placeholder="Eski Şifre" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Yeni Şifre" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password1"  placeholder="Yeni Şifreyi Tekrar Gir" required = "true">
                        </div>
                        <button type="submit" class="btn btn-primary">Değiştir</button>
                       <?php if(isset($_GET['error'])) echo $_GET['error']; ?>
                    </form>
                </div>
            </div>
        </div>
        <?php include("includes/footer.php"); ?>
    </body>
</html>
