<?php
require("includes/common.php"); // Veritabanı ve oturum dosyası

// Eğer URL'den gelen id geçerliyse işlem yapılır
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET['id']; // Ürün ID'si alınır
    $user_id = $_SESSION['user_id']; // Oturumdaki kullanıcı ID'si alınır

    // Ürünü sepetten sil (status'u 0 yaparak)
    $query = "UPDATE user_item SET status=0 WHERE user_id='$user_id' AND item_id='$item_id' AND status=1";
    mysqli_query($con, $query) or die(mysqli_error($con)); // Hata olursa göster

    // Sepet sayfasına yönlendirme
    header('location: cart.php');
}
?>
