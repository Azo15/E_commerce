<?php
// Veritabanı bağlantısı ve oturum işlemleri için gerekli dosya çağrılır
require("includes/common.php");

// Eğer URL'de 'id' parametresi varsa ve bu değer sayısal ise işlem yapılır
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET['id']; // Ürün ID'si
    $user_id = $_SESSION['user_id']; // Oturumdaki kullanıcı ID'si alınır

    // Seçilen ürün, kullanıcıya ait sepete eklenir (status: 1 = sepete eklendi)
    $query = "INSERT INTO `user_item`(`user_id`, `item_id`, `status`) VALUES($user_id, $item_id, 1)";
    mysqli_query($con, $query)  or die(mysqli_error($con)); // Sorgu çalışmazsa hata göster

    // İşlem tamamlandıktan sonra ürünler sayfasına yönlendirme yapılır
    header('location: products.php');
}
?>
