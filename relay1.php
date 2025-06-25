<?php
    $conn = mysqli_connect("localhost", "root", "", "start12");
    $sql = mysqli_query($conn,"SELECT * FROM kontrol");
    $data = mysqli_fetch_array($sql);
    $relay1 = $data['relay1'];
    echo $relay1;
?>