<?php
// Konfigurasi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "start12";

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mendapatkan jam WITA
date_default_timezone_set('Asia/Makassar');

// Mendapatkan tanggal saat ini
$hari_sekarang = date('Y-m-d');

// Mendapatkan total energi untuk hari ini
$total_energi = 0;

// Mendapatkan tanggal terakhir dalam database
$sql_last_date = "SELECT MAX(DATE(tanggal)) AS last_date FROM websensor";
$result_last_date = $conn->query($sql_last_date);
$row_last_date = $result_last_date->fetch_assoc();
$tanggal_terakhir = $row_last_date['last_date'];

// Mendapatkan bulan dari tanggal saat ini
$bulan_sekarang = date('m');

// Mendapatkan bulan dari tanggal terakhir dalam database
$bulan_terakhir = date('m', strtotime($tanggal_terakhir));

// Jika bulan sekarang berbeda dengan bulan terakhir dalam database, reset total energi
if ($bulan_sekarang != $bulan_terakhir) {
    // Reset total energi menjadi 0
    $reset_query = "UPDATE total_energy SET total = 0";
    $conn->query($reset_query);
}

// Query untuk mengambil total rata-rata energi per jam untuk hari ini
$sql = "SELECT HOUR(tanggal) AS jam, SQRT(AVG(POW(dayabeban1, 2) + POW(dayabeban2, 2) + POW(dayabeban3, 2))) AS rms_energi 
        FROM websensor 
        WHERE DATE(tanggal) = '$hari_sekarang'
        GROUP BY HOUR(tanggal)";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Proses hasil query
    while($row = $result->fetch_assoc()) {
        // Menghitung total energi per jam
        $total_energi_per_jam = $row["rms_energi"];
        // konversi watt hour ke wh karena untuk menghitung biaya per kwh
        $total_energi_kwh = $total_energi_per_jam / 1000;
        // Menambahkan total energi per jam ke total energi
        $biaya_per_kwh = 1444.70; // Biaya per kWh
        $total_energi += $total_energi_kwh * $biaya_per_kwh;
    }
} 

// Menutup koneksi database
$conn->close();
?>

