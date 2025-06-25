<?php
$koneksi = new mysqli("localhost", "root", "", "monitoring energi");
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

$sql = "SELECT * FROM data_sensor ORDER BY waktu DESC LIMIT 20";
$result = $koneksi->query($sql);

$data = array();
while($row = $result->fetch_assoc()) {
    $data[] = $row;
}
header('Content-Type: application/json');
echo json_encode($data);
?>
