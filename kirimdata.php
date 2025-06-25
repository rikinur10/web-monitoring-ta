<?php
// Informasi koneksi database
$servername = "localhost"; // Ganti dengan alamat server MySQL Anda
$username = "root"; // Ganti dengan username MySQL Anda
$password = ""; // Ganti dengan password MySQL Anda
$dbname = "start12"; // Ganti dengan nama database yang Anda gunakan

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Menerima data dari ESP32
$tegangandc = $_GET["tdc"];
$arusdc = $_GET["adc"];
$dayadc = $_GET["ddc"];
$teganganac = $_GET["tac"];
$arusac1 = $_GET["aac1"];
$arusac2 = $_GET["aac2"];
$arusac3 = $_GET["aac3"];
$cahaya = $_GET["chy"];
$suhu = $_GET["sh"];
$kelembaban = $_GET["klmb"];
$dayadc = $_GET["daya_dc"];
$dayabeban1 = $_GET["dayabeban1"];
$dayabeban2 = $_GET["dayabeban2"];
$dayabeban3 = $_GET["dayabeban3"];


// Menyimpan data ke database
$sql = "INSERT INTO websensor (tegangandc, arusdc, dayadc, teganganac, arusac1, arusac2, arusac3, dayabeban1, dayabeban2, dayabeban3, suhu, kelembaban, cahaya) 
VALUES ('$tegangandc', '$arusdc', '$dayadc', '$teganganac', '$arusac1', '$arusac2', '$arusac3', '$dayabeban1', '$dayabeban2', '$dayabeban3', '$suhu', '$kelembaban', '$cahaya')";
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan ke database";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();
?>