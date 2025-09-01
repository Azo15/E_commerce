<?php
require("includes/common.php"); // Veritabanı bağlantısı için gerekli dosya dahil edilir.

// Eğer 'id' parametresi URL'de varsa ve sayısal bir değer içeriyorsa
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET['id']; // Ürün ID'si URL'den alınır.
    $user_id = $_SESSION['user_id']; // Kullanıcı ID'si oturumdan alınır.

    // Veritabanına, kullanıcının sepetine ürünü eklemek için SQL sorgusu hazırlanır
    $query = "INSERT INTO `user_item`(`user_id`, `item_id`, `status`) VALUES($user_id, $item_id, 2)";
    
    // SQL sorgusu çalıştırılır ve hata varsa hata mesajı gösterilir
    mysqli_query($con, $query)  or die(mysqli_error($con));
    
    // Başarılı bir işlem sonrası kullanıcıyı success.php sayfasına yönlendirir.
    header('location: success.php');
}
?>
