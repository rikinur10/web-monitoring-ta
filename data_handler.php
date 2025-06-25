<?php
// Koneksi ke database
$servername = "localhost";
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "hybrid"; // Ganti dengan nama database Anda

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil data dari ESP32
$acs1 = isset($_POST['acs1']) ? floatval($_POST['acs1']) : 0;
$acs2 = isset($_POST['acs2']) ? floatval($_POST['acs2']) : 0;
$acs3 = isset($_POST['acs3']) ? floatval($_POST['acs3']) : 0;
$teg_dc1 = isset($_POST['teg_dc1']) ? floatval($_POST['teg_dc1']) : 0;
$teg_dc2 = isset($_POST['teg_dc2']) ? floatval($_POST['teg_dc2']) : 0;
$teg_dc3 = isset($_POST['teg_dc3']) ? floatval($_POST['teg_dc3']) : 0;
$v1 = isset($_POST['v1']) ? floatval($_POST['v1']) : 0;
$c1 = isset($_POST['c1']) ? floatval($_POST['c1']) : 0;
$p1 = isset($_POST['p1']) ? floatval($_POST['p1']) : 0;
$e1 = isset($_POST['e1']) ? floatval($_POST['e1']) : 0;
$f1 = isset($_POST['f1']) ? floatval($_POST['f1']) : 0;
$pf1 = isset($_POST['pf1']) ? floatval($_POST['pf1']) : 0;
$v2 = isset($_POST['v2']) ? floatval($_POST['v2']) : 0;
$c2 = isset($_POST['c2']) ? floatval($_POST['c2']) : 0;
$p2 = isset($_POST['p2']) ? floatval($_POST['p2']) : 0;
$e2 = isset($_POST['e2']) ? floatval($_POST['e2']) : 0;
$f2 = isset($_POST['f2']) ? floatval($_POST['f2']) : 0;
$pf2 = isset($_POST['pf2']) ? floatval($_POST['pf2']) : 0;
$prot_plts = isset($_POST['prot_plts']) ? intval($_POST['prot_plts']) : 0;
$prot_pltb = isset($_POST['prot_pltb']) ? intval($_POST['prot_pltb']) : 0;
$prot_battery = isset($_POST['prot_battery']) ? intval($_POST['prot_battery']) : 0;
$prot_load1 = isset($_POST['prot_load1']) ? intval($_POST['prot_load1']) : 0;
$prot_load2 = isset($_POST['prot_load2']) ? intval($_POST['prot_load2']) : 0;
$Sumber_Aktif = isset($_POST['Sumber_Aktif']) ? $_POST['Sumber_Aktif'] : 'UNKNOWN';

// Query untuk menyimpan data
$sql = "INSERT INTO data_hybrid_new (
    acs1, acs2, acs3, teg_dc1, teg_dc2, teg_dc3, 
    v1, c1, p1, e1, f1, pf1, 
    v2, c2, p2, e2, f2, pf2,
    prot_plts, prot_pltb, prot_battery, prot_load1, prot_load2, Sumber_Aktif, timestamp
) VALUES (
    $acs1, $acs2, $acs3, $teg_dc1, $teg_dc2, $teg_dc3,
    $v1, $c1, $p1, $e1, $f1, $pf1,
    $v2, $c2, $p2, $e2, $f2, $pf2,
    $prot_plts, $prot_pltb, $prot_battery, $prot_load1, $prot_load2, '$Sumber_Aktif', NOW()
)";

if ($conn->query($sql) === TRUE) {
    sleep(15); // Delay selama 2 detik

    echo "Data berhasil disimpan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>