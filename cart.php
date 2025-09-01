<?php
require("includes/common.php"); // Bağlantı ve oturum başlatma

// Eğer oturum açılmamışsa giriş sayfasına yönlendir
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sepet | Life Style Store</title>

    <!-- CSS ve JS dosyaları -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-fluid" id="content">
        <?php include 'includes/header.php'; ?>

        <div class="col-lg-4 col-md-6 ">
            <img src="img/confirmorder.png" style="float: left;">
        </div>

        <div class="row decor_bg">
            <div class="col-md-6">
                <table class="table table-striped">

                    <!-- Sadece sepette ürün varsa tabloyu göster -->
                    <?php
                    $sum = 0;
                    $id = '';
                    $user_id = $_SESSION['user_id']; // Kullanıcı ID alınır

                    // Kullanıcının sepetteki ürünlerini getir
                    $query = "SELECT items.price AS Price, items.id As id, items.name AS Name 
                              FROM user_item 
                              JOIN items ON user_item.item_id = items.id 
                              WHERE user_item.user_id='$user_id' and `status`=1";
                    $result = mysqli_query($con, $query) or die(mysqli_error($con));

                    if (mysqli_num_rows($result) >= 1) {
                    ?>
                        <thead>
                            <tr>
                                <th>Ürün No</th>
                                <th>Ürün Adı</th>
                                <th>Fiyat</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_array($result)) {
                                $sum += $row["Price"]; // Toplam fiyatı güncelle
                                $id .= $row["id"] . ", "; // Ürün id'lerini sıraya ekle

                                // Her ürün satırı
                                echo "<tr>
                                        <td>#" . $row["id"] . "</td>
                                        <td>" . $row["Name"] . "</td>
                                        <td>₺" . $row["Price"] . "</td>
                                        <td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'>Kaldır</a></td>
                                      </tr>";
                            }

                            $id = rtrim($id, ", "); // Son virgülü sil
                            
                            // Toplam ve siparişi onayla butonu
                            echo "<tr>
                                    <td></td>
                                    <td>Toplam</td>
                                    <td>₺" . $sum . "</td>
                                    <td><a href='success.php?itemsid=" . $id . "' class='btn btn-primary'>Siparişi Onayla</a></td>
                                  </tr>";
                            ?>
                        </tbody>
                    <?php
                    } else {
                        // Sepet boşsa uyarı ver
                        echo "!!! Sepetiniz boş. Lütfen önce ürün ekleyin.";
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <?php include("includes/footer.php"); ?>
</body>
</html>
