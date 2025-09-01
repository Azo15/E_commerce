<?php
// Veritabanı bağlantısı bilgileri
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "store"; 

// Bağlantıyı oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Hata kontrolü
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// Form verilerini al
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// SQL sorgusu (hazırlanmış ifade ile)
$sql = "INSERT INTO messages (name, email, message) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $email, $message);

// Sorguyu çalıştır
if ($stmt->execute()) {
    echo "<script>alert('Mesajınız başarıyla gönderildi.'); window.location.href='contact.php';</script>";
} else {
    echo "Hata: " . $stmt->error;
}

// Bağlantıyı kapat
$stmt->close();
$conn->close();
?>
