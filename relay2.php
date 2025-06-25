<?php
    $conn = mysqli_connect("localhost", "root", "", "start12");
    $sql = mysqli_query($conn,"SELECT * FROM kontrol");
    $data = mysqli_fetch_array($sql);
    $relay2 = $data['relay2'];
    echo $relay2;
?>