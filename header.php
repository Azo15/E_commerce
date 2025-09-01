<!-- Bu kod, web sitesinin üst bilgi (header) navigasyon çubuğudur -->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <!-- Ekran genişliği küçüldüğünde menü seçeneklerini butonla göstermek için -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <!-- Logo veya ana sayfa bağlantısı -->
            <a class="navbar-brand" href="index.php" style="font-family: bold;">LIFESTYLE</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <!-- Eğer kullanıcı giriş yaptıysa, bu seçenekler gösterilir -->
                <?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Sepetim🛒 </a></li>
                    <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Ayarlar⚙️</a></li>
                    <li><a href = "orderhistory.php"><span class = "glyphicon glyphicon-file"></span> Sipariş Geçmişi📥</a></li>
                    <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Çıkış Yap📍</a></li>
                    <?php
                } else {
                    ?>
                    <!-- Eğer kullanıcı giriş yapmadıysa, bu seçenekler gösterilir -->
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Kayıt Ol📝</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Giriş Yap🔐</a></li>
                    <li><a href="aboutus.php"><span class="glyphicon glyphicon-tasks"></span> Hakkımızda❔</a></li>
                    <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> İletişim💬</a></li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
</div>
