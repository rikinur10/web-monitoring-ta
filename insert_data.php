<?php
$koneksi = new mysqli("localhost", "root", "", "monitoring energi");

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

$data = [
  'ina1', 'ina2', 'ina3',
  'teg_ina1', 'teg_ina2', 'teg_ina3',
  'v1', 'c1', 'p1', 'e1', 'f1', 'pf1',
  'v2', 'c2', 'p2', 'e2', 'f2', 'pf2',
  'sumber_aktif',
  'prot_plts', 'prot_pltb', 'prot_battery', 'prot_load1', 'prot_load2'
];

$values = [];
foreach ($data as $key) {
    $values[$key] = isset($_POST[$key]) ? $_POST[$key] : 0;
}

$sql = "INSERT INTO data_sensor (" . implode(",", array_keys($values)) . ")
        VALUES ('" . implode("','", $values) . "')";

if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil disimpan";
} else {
    echo "Gagal: " . $koneksi->error;
}
$koneksi->close();
?>
