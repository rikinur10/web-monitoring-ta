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

// Mendapatkan jam saat ini
$jam_sekarang = date('H');

// Mendapatkan total energi untuk hari ini
$total_energi = 0;

// Mendapatkan tanggal terakhir dalam database
$sql_last_date = "SELECT MAX(DATE(tanggal)) AS last_date FROM websensor";
$result_last_date = $conn->query($sql_last_date);
$row_last_date = $result_last_date->fetch_assoc();
$tanggal_terakhir = $row_last_date['last_date'];

// Jika tanggal sekarang berbeda dengan tanggal terakhir dalam database, reset total energi
if ($hari_sekarang != $tanggal_terakhir) {
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
        // Menambahkan total energi per jam ke total energi
        $total_energi += $total_energi_per_jam;
    }
} 

// Menutup koneksi database
$conn->close();
?>
