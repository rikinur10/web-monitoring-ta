<?php
// Informasi koneksi database
$servername = "localhost";
$username = "root";
$password = "";
$database = "hybrid";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Membuat query untuk membaca data dari tabel
$sql = "SELECT * FROM data_hybrid_new";
$result = $conn->query($sql);


// Memeriksa apakah query berhasil dieksekusi
if ($result->num_rows > 0) {
    // Output data dari setiap baris
    while ($row = $result->fetch_assoc()) {
        // Mendapatkan variabel dari setiap kolom
        $tegangandc1 = $row["teg_dc1"];
        $tegangandc2 = $row["teg_dc2"];
        $tegangandc3 = $row["teg_dc3"];
        $arusdc1 = $row["acs1"];
        $arusdc2 = $row["acs2"];
        $arusdc3 = $row["acs3"];
        $teganganac1 = $row["v1"];
        $teganganac2 = $row["v2"];
        $arusac1 = $row["c1"];
        $arusac2 = $row["c2"];
        $daya1 = $row["p1"];
        $daya2 = $row["p2"];
        $prot_plts = $row["prot_plts"];
        $prot_pltb = $row["prot_pltb"];
        $prot_battery = $row["prot_battery"];
        $prot_load1 = $row["prot_load1"];
        $prot_load2 = $row["prot_load2"];
        $sumber_aktif = $row["sumber_aktif"];
    }
} else {
    echo "Tidak ada hasil";
}

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
    }
}

// Menutup koneksi
$conn->close();