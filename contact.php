<!DOCTYPE html>
<html lang="tr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>İletişim | Azo İsmail</title>

    <!-- Stil tanımı -->
    <style type="text/css">
        .p1 {
            text-align: justify;
        }
    </style>

    <!-- Bootstrap ve stil dosyaları -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <div class="container" id="content">
        <div class="row">
            <div class="col-lg">
                <img src="img/contact.png" style="float: right;">
                <h1>Benimle İletişime Geçin</h1>
                <p class="p1">
                    Merhaba, ben Azo İsmail. Yazılım mühendisliği öğrencisiyim...<br>
                    Eğer yazılım projeleri, iş birliği, staj fırsatları veya danışmak istediğiniz konular varsa, formu doldurabilirsiniz.
                </p>
            </div><br><br>

            <div class="col-lg">
                <div style="float: right;">
                    <h1>İLETİŞİM BİLGİLERİ</h1><br>
                    <p class="p1">Kırklareli, Türkiye</p><br>
                    <p class="p1">Telefon : +90 538 878 7000</p><br>
                    <p class="p1">E-posta : ismailazo260@gmail.com</p><br>
                    <p class="p1">LinkedIn : <a href="https://www.linkedin.com/in/ismailazo" target="_blank">ismailazo</a></p><br>
                    <p class="p1">GitHub : <a href="https://github.com/Azo15" target="_blank">Azo15</a></p>
                </div>

                <!-- iletişim formu -->
                <h1>MESAJ GÖNDER</h1>
                <div style="float: left;">
                    <form action="process_contact.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Adınız" autofocus class="form-control" required pattern="^[A-Za-zçÇğĞıİöÖşŞüÜ\s]{1,}[\.]{0,1}[A-Za-zçÇğĞıİöÖşŞüÜ\s]{0,}$">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="E-posta" class="form-control" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                        </div>
                        <div class="form-group">
                            <textarea name="message" rows="5" cols="60" placeholder="Mesajınızı buraya yazın..." class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Gönder</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
