<?php

// Bu fonksiyon, ürünün sepete eklenip eklenmediğini kontrol eder.
function check_if_added_to_cart($item_id) {
    // Kullanıcı ID'sini oturumdan alıyoruz
    $user_id = $_SESSION['user_id'];
    
    // Veritabanı bağlantısını sağlayan ortak dosya dahil ediliyor
    require("common.php");
    
    // user_item tablosundan, item_id'si belirtilen ürünün, 
    // user_id'si oturumdaki kullanıcıyla aynı ve durumu 'Added to cart' (sepete eklenmiş) olan kaydı seçiyoruz.
    $query = "SELECT * FROM user_item WHERE item_id='$item_id' AND user_id ='$user_id' and `status`=1";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    
    // Eğer sorgudan dönen satır sayısı 1 veya daha fazla ise, ürün sepete eklenmiş demektir.
    if (mysqli_num_rows($result) >= 1) {
        return 1; // Ürün sepette, 1 döndürülür.
    } else {
        return 0; // Ürün sepette değil, 0 döndürülür.
    }
}

?>
