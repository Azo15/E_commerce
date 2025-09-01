<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sipariş Geçmişi | Life Style Store</title> <!-- Sayfa başlığı -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid" id="content">
            <?php include 'includes/header.php'; ?>
            <div class="col-lg-4 col-md-6">
                <img src="img/cart.png" style="float: left;">
            </div>
            <div class="row decor_bg">
                <div class="col-md-6">
                    <table class="table table-striped">
    
                        <!-- Tabloyu yalnızca sepete ürün eklenmişse göster -->
                        <?php
                        $sum = 0; $id='';
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT items.price AS Fiyat, items.id AS id, items.name AS İsim 
                                  FROM user_item 
                                  JOIN items ON user_item.item_id = items.id 
                                  WHERE user_item.user_id='$user_id' AND `status`=2";
                        $query1 = "SELECT user_item.date_time AS SiparişTarihi 
                                   FROM user_item 
                                   WHERE user_id='$user_id' AND `status`=2";
                        $result = mysqli_query($con, $query)or die(mysqli_error($con));
                        $result1 = mysqli_query($con, $query1)or die(mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <h1 style="margin-bottom: 20px; font-weight: 20;"><center>Sipariş Geçmişi</center></h1> <!-- Başlık -->
                            <thead>
                                <tr>
                                    <th>Ürün Adı</th> <!-- Ürün adı -->
                                    <th>Fiyat</th> <!-- Fiyat -->
                                    <th>Sipariş Tarihi ve Zamanı</th> <!-- Sipariş tarihi ve zamanı -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $total = 0;
                                while ($row = mysqli_fetch_array($result)) {
                                    $id .= $row["id"] . ", ";
                                    echo '<tr><td><a href="order.php">' . $row["İsim"] . "</a></td><td>₺ " . $row["Fiyat"] . "</td>";
                                    $total = $total + $row["Fiyat"];
                                    while ($row1 = mysqli_fetch_array($result1)) {
                                        echo "<td>" . $row1["SiparişTarihi"] . "</td></tr>"; 
                                        break;
                                    }
                                }
                                echo "<tr><td><strong>Toplam</strong></td><td><strong>₺ $total</strong></td></tr>"; // Toplam fiyat
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo "Üzgünüz! Henüz siparişiniz bulunmamaktadır."; // Sipariş yoksa mesaj
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <?php include("includes/footer.php"); ?>
    </body>
</html>
