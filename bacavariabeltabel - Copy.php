<?php
// Informasi koneksi database
$servername = "localhost";
$username = "root";
$password = "";
$database = "start12";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $data_hybrid);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Membuat query untuk membaca data dari tabel
$sql = "SELECT * FROM websensor";
$result = $conn->query($sql);

// Memeriksa apakah query berhasil dieksekusi
$dayadc = 0;

if ($result->num_rows > 0) {
    // Output data dari setiap baris
    while($row = $result->fetch_assoc()) {
        // Mendapatkan variabel dari setiap kolom
        $tegangandc = $row["tegangandc"];
        $arusdc = $row["arusdc"];
        $dayadc = $row["dayadc"];
        $teganganac = $row["teganganac"];
        $arusac1 = $row["arusac1"];
        $arusac2 = $row["arusac2"];
        $arusac3 = $row["arusac3"];
        $dayaac1 = $row["dayabeban1"];
        $dayaac2 = $row["dayabeban2"];
        $dayaac3 = $row["dayabeban3"];
        $suhu = $row["suhu"];
        $kelembaban = $row["kelembaban"];
        $cahaya = $row["cahaya"];
    }
} else {
    echo "Tidak ada hasil";
}

// Menutup koneksi
$conn->close();
?>
