<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "monitoring";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$data = json_decode(file_get_contents("php://input"), true);

if ($data) {
    $stmt = $conn->prepare("INSERT INTO sensor_data (
        ina1_voltage, ina1_current, ina2_voltage, ina2_current, ina3_voltage, ina3_current,
        pzem1_voltage, pzem1_current, pzem1_power,
        pzem2_voltage, pzem2_current, pzem2_power,
        switch_status, prot1, prot2, prot3, prot4, prot5
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("ddddddddddddsiiiii",
        $data['ina1_voltage'], $data['ina1_current'],
        $data['ina2_voltage'], $data['ina2_current'],
        $data['ina3_voltage'], $data['ina3_current'],
        $data['pzem1_voltage'], $data['pzem1_current'], $data['pzem1_power'],
        $data['pzem2_voltage'], $data['pzem2_current'], $data['pzem2_power'],
        $data['switch_status'],
        $data['prot1'], $data['prot2'], $data['prot3'], $data['prot4'], $data['prot5']
    );
    $stmt->execute();
    echo "Data disimpan";
} else {
    echo "Tidak ada data";
}
?>
