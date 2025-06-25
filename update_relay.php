<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "start12";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil nilai baru dari request GET
$newValue = $_GET['newValue'];
$cardId = $_GET['cardId'];

// Query untuk memperbarui nilai dalam database sesuai dengan cardId
$sql = "";

switch ($cardId) {
    case 'card1':
        $sql = "UPDATE kontrol SET relay1 = '$newValue'";
        break;
    case 'card2':
        $sql = "UPDATE kontrol SET relay2 = '$newValue'";
        break;
    case 'card3':
        $sql = "UPDATE kontrol SET relay3 = '$newValue'";
        break;
    default:
        // Handle default case
        break;
}

if ($conn->query($sql) === TRUE) {
    echo "Nilai berhasil diperbarui";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
