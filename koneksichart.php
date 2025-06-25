<!DOCTYPE html>
<html>
<head>
  <title>Line Chart</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  <canvas id="myChart" width="800" height="400"></canvas>

  <?php
  // Koneksi ke database
  $koneksi = mysqli_connect("localhost", "root", "", "start12");

  // Periksa koneksi
  if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
  }

  // Query untuk mengambil data dari database
  $query = "SELECT * FROM websensor";
  $result = mysqli_query($koneksi, $query);

  // Memasukkan hasil query ke dalam array
  $data = array();
  $count = 0;
  $resetCount = 24; // Reset setiap 24 data
  while ($row = mysqli_fetch_assoc($result)) {
    $data['x'][] = $row['tegangandc'];
    $data['y'][] = $row['arusdc'];
    $count++;

    // Jika jumlah data mencapai nilai reset, tampilkan chart dan reset data
    if ($count == $resetCount) {
      echo '<script>';
      echo 'var ctx = document.getElementById("myChart").getContext("2d");';
      echo 'var myChart = new Chart(ctx, {
              type: "line",
              data: {
                labels: ' . json_encode($data['x']) . ',
                datasets: [{
                  label: "Data",
                  data: ' . json_encode($data['y']) . ',
                  backgroundColor: "rgba(54, 162, 235, 0.2)",
                  borderColor: "rgba(54, 162, 235, 1)",
                  borderWidth: 1
                }]
              },
              options: {
                scales: {
                  yAxes: [{
                    ticks: {
                      beginAtZero: true
                    }
                  }]
                }
              }
            });';
      echo '</script>';

      // Reset data
      $data = array();
      $count = 0;
    }
  }

  // Menutup koneksi database
  mysqli_close($koneksi);
  ?>
</body>
</html>
