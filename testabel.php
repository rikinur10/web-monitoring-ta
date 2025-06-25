<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>OH MANSUR</title>

  <meta name="language" content="en-EN" />
  <meta name="author" content="Irfan Maulana" />
  <link rel="author" href="https://plus.google.com/u/0/+irfanmaulana-mazipan/posts" />
  <link rel="publisher" href="https://plus.google.com/u/0/+irfanmaulana-mazipan" />
  <meta name="keywords" content="bootstrap, bootstrap 4, bootstrap 4 template, bootstrap 4 admin, bootstrap 4 dashboard" />
  <meta name="description" content="Bootstrap 4 admin dashboard template by Irfan Maulana" />
  <meta property="og:title" content="Bootstrap 4 Admin Dashboard Template | Irfan Maulana" />
  <meta property="og:description" content="Bootstrap 4 admin dashboard template by Irfan Maulana" />
  <meta property="og:url" content="https://mazipan.github.io/bootstrap4-admin-dashboard-template/" />
  <meta property="og:site_name" content="Bootstrap 4 Admin Dashboard Template" />
  <meta property="og:type" content="website" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@maz_ipan" />
  <meta name="twitter:creator" content="@maz_ipan" />
  <meta name="twitter:title" content="Bootstrap 4 Admin Dashboard Template | Irfan Maulana" />
  <meta name="twitter:description" content="Bootstrap 4 admin dashboard template by Irfan Maulana" />
  <meta name="twitter:domain" content="https://mazipan.github.io/bootstrap4-admin-dashboard-template/" />
  <link rel="home" href="https://mazipan.github.io/bootstrap4-admin-dashboard-template/">
  <link rel="icon" type="image/png" sizes="16x16" href="img/logomansur-01 - Copy.png">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
  <link rel="stylesheet" href="dist/main.css">
  <link href="https://fonts.googleapis.com/css2?family=Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="bootstrap.min.css">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-25065548-2"></script>
  <script>window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'UA-25065548-2');</script>
  <script>src="Chart.js"></script>
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
  <meta http-equiv="refresh" content="5">
  
  
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <aside class="col-md-2 d-none d-md-block bg-light sidebar" style = "height: 100vh;">
        <img src="img/logomansur-01.png" alt="Deskripsi Gambar" style="width: 100%; height: auto; display: block; margin: 0 auto;">
        <div class="sidebar-sticky">
        <h6 class="sidebar-heading" style="background : linear-gradient(to left, #387ADF, #50C4ED); padding : 10px; 
          border-radius : 25px; width: 90%; display; inline-block; text-align: center;">
            <span style = "color : #FFFFFF;">Main Navigation</span>
          </h6>

          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="photovoltaic.php">
                <i class="fa fa-tachometer"></i>
                Photovoltaic
                <span class="badge badge-primary"></span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="beban.php">
                <i class="fa fa-pencil-square-o"></i> Beban
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="lingkungan.php">
                <i class="fa fa-desktop"></i> Lingkungan
              </a>
            </li>
          </ul>

          <h6 class="sidebar-heading" style="background : linear-gradient(to left, #387ADF, #50C4ED); padding : 10px; 
          border-radius : 25px; width: 90%; display; inline-block; text-align: center;">
            <span style = "color : #FFFFFF;">User Area</span>
          </h6>

          <ul class="nav flex-column">

            <li class="nav-item has-child">
              <a class="nav-link" href="#">
                <i class="fa fa-user-o"></i> Profile
                <span class="badge badge-primary"></span>

                <i class="fa fa-caret-down caret float-right mt-1"></i>
              </a>

              <ul class="nav flex-column is-child">
                <li class="nav-item">
                  <a class="nav-link" href="https://github.com/mazipan" target="blank" rel="noopener">
                    <i class="fa fa-github"></i> Github
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://twitter.com/abil.lagi" target="blank" rel="noopener">
                    <i class="fa fa-twitter"></i> Twitter
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://www.instagram.com/habilibnuu" target="blank" rel="noopener">
                    <i class="fa fa-facebook"></i> Instagram
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fa fa-cog"></i> Settings
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="keluar.php">
                <i class="fa fa-power-off"></i> Logout
              </a>
            </li>

          </ul>

        </div>
      </aside>
      <main class="col-md-10 ml-sm-auto col-lg-10 pt-3 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2" style="font-family : Montserrat, sans-serif; font-weight: 700; background: linear-gradient(to right, #333A73, #50C4ED); 
          -webkit-background-clip: text; -webkit-text-fill-color: transparent; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1); font-size: 30px;">
          <i class="fa fa-tachometer"></i> MANAJEMEN ENERGI SURYA | <span style="color: #222831;">MANSUR</span></h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
              <button class="btn btn-sm btn-light" style="background: linear-gradient(to top, #E72929, #FF5BAE); color: white;">Share</button>
              <button class="btn btn-sm btn-light" style="background: linear-gradient(to top, #E72929, #FF5BAE); color: white;">Export</button>
            </div>
            <button class="btn btn-sm btn-light dropdown-toggle" style="background: linear-gradient(to top, #E72929, #FF5BAE); color: white;"></i>This week </button>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12 pr-0 mb-3">
          <div class="card text-white" style="background: linear-gradient(to left, #27005D80, #9400FFFF), url('img/powergrid2.jpg'); 
          background-position : center; border-radius: 15px; box-shadow: 0px 0px 20px 3px #535C91;">
              <div class="card-header" style = "text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);"><i class="fa fa-sun-o"></i> Tegangan AC</div>
              <div class="card-body">
                <h3 class="card-title"style = "text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                <?php
                include 'bacavariabeltabel.php';
                    echo $teganganac;
                ?>
                </h3>
              </div>
              <a class="card-footer text-left" style = "text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);" href="#">
                Voltage (V)
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 pr-0 mb-3">
          <div class="card text-white" style="background: linear-gradient(to left, #27005D80, #9400FFFF), url('img/powergrid1.jpg'); 
          background-position : left center; border-radius: 15px; box-shadow: 0px 0px 20px 3px #535C91;">
              <div class="card-header" style = "text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);"><i class="fa fa-sun-o"></i> Daya Beban 1</div>
              <div class="card-body">
                <h3 class="card-title"style = "text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                <?php
                include 'bacavariabeltabel.php';
                    echo $dayaac1;
                ?>
                </h3>
              </div>
              <a class="card-footer text-left" style = "text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);" href="#">
                Watt (W)
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 pr-0 mb-3">
          <div class="card text-white" style="background: linear-gradient(to left, #27005D80, #9400FFFF), url('img/powergrid1.jpg'); 
          background-position : left center; border-radius: 15px; box-shadow: 0px 0px 20px 3px #535C91;">
              <div class="card-header" style = "text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);"><i class="fa fa-sun-o"></i> Daya Beban 2</div>
              <div class="card-body">
                <h3 class="card-title"style = "text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                <?php
                include 'bacavariabeltabel.php';
                    echo $dayaac2;
                ?>
                </h3>
              </div>
              <a class="card-footer text-left" style = "text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);" href="#">
                Watt (W)
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 pr-0 mb-3">
          <div class="card text-white" style="background: linear-gradient(to left, #27005D80, #9400FFFF), url('img/powergrid1.jpg'); 
          background-position : left center; border-radius: 15px; box-shadow: 0px 0px 20px 3px #535C91;">
              <div class="card-header" style = "text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);"><i class="fa fa-sun-o"></i> Daya Beban 3</div>
              <div class="card-body">
                <h3 class="card-title"style = "text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                <?php
                include 'bacavariabeltabel.php';
                    echo $dayaac3;
                ?>
                </h3>
              </div>
              <a class="card-footer text-left" style = "text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);" href="#">
                Watt (W)
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 pr-0 mb-3">
              <?php
              // Nilai batas untuk perubahan warna
              include "konsumsi energi.php";
              $batas_nilai = 1000; // Ganti dengan nilai yang sesuai
              // Cek apakah nilai $total_dayaac melebihi batas
              if ($total_dayaac >= 0 && $total_dayaac <= 300){
                $background_color = 'linear-gradient(to top, #007F7380, #4CCD99FF)';
              }
              elseif ($total_dayaac > 300 && $total_dayaac <= 350) {
                $background_color = 'linear-gradient(to top, #FB6D4880, #FFAF45FF)';
              } 
              elseif($total_dayaac > 350) {
                $background_color = 'linear-gradient(to top, #FF204E80, #A0153EFF)';
              }
              ?>
              <div class="card text-white" style="background: <?php echo $background_color; ?>, url('img/powergrid1.jpg'); 
              background-position: left center; border-radius: 15px; box-shadow: 0px 0px 20px 3px #535C91;">
                  <div class="card-header" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);"><i class="fa fa-sun-o"></i>Konsumsi Energi</div>
                  <div class="card-body">
                      <h3 class="card-title" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                          <?php
                          include 'konsumsi energi.php';
                          echo $total_dayaac;
                          ?>
                      </h3>
                  </div>
                  <a class="card-footer text-left" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);" href="#">
                      Watthour (Wh)
                  </a>
              </div>
          </div>

<!-- keterangan tabel -->
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 pr-0 mb-3">
            <div class="card-collapsible card">
              <div class="card-header" style="font-family: Montserrat; font-weight: bold; 
              font-size: 20px; background: linear-gradient(to right, #333A73, #50C4ED); 
            -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                Table</i>
              </div>
              <div class="card-body">
                <table class="table">
                  <thead class="thead bg-secondary text-white" style="font-size: 13.2px;">
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Tegangan AC (V)</th>
                      <th scope="col">Arus Beban 1 (mA)</th>
                      <th scope="col">Arus Beban 2 (mA)</th>
                      <th scope="col">Arus Beban 3 (mA)</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    // Koneksi ke database
                    $koneksi = mysqli_connect("localhost", "root", "", "start12");

                    // Periksa koneksi
                    if (mysqli_connect_errno()) {
                    echo "Koneksi database gagal: " . mysqli_connect_error();
                    exit();
                    }

                    // Tentukan jumlah data per halaman
                    $jumlah_per_halaman = 24;

                    // Tentukan halaman saat ini
                    $halaman = isset($_GET['halaman']) ? $_GET['halaman'] : 1;

                    // Hitung offset untuk query
                    $offset = ($halaman - 1) * $jumlah_per_halaman;

                    // Query untuk mengambil data dari database dengan batasan jumlah data per halaman
                    $query = "SELECT * FROM websensor LIMIT $offset, $jumlah_per_halaman";
                    $result = mysqli_query($koneksi, $query);

                    // Menampilkan data dari hasil query
                    $no = $offset + 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td>' . $row['teganganac'] . '</td>';
                    echo '<td>' . $row['arusac1'] . '</td>';
                    echo '<td>' . $row['arusac2'] . '</td>';
                    echo '<td>' . $row['arusac3'] . '</td>';
                    echo '</tr>';
                    $no++;
                    }

                    echo '</tbody>';
                    echo '</table>';

                    // Menghitung total jumlah halaman
                    $query_total = "SELECT COUNT(*) AS total FROM websensor";
                    $result_total = mysqli_query($koneksi, $query_total);

                    $row_total = mysqli_fetch_assoc($result_total);
                    $total_halaman = ceil($row_total['total'] / $jumlah_per_halaman);

                    // Menampilkan navigasi halaman
                    echo '<div>';
                    echo '<ul class="pagination">';

                    for ($i = 1; $i <= $total_halaman; $i++) {
                    echo '<li class="page-item ' . ($halaman == $i ? 'active' : '') . '"><a class="page-link" href="?halaman=' . $i . '">' . $i . '</a></li>';
                    }

                    echo '</ul>';
                    echo '</div>';

                    // Menutup koneksi database
                    mysqli_close($koneksi);
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>       
<!--CODE UNTUK MENAMPILKAN CHART LINE / GRAFIK GARIS-->
            <h1 class="h2" style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; color : #808080; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1); font-size: 20px;"><i class="fa fa-tachometer"></i> Chart Line <span style="color: #222831;">Linimasa</span></h1>
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
            $resetcount = 25;
            while ($row = mysqli_fetch_assoc($result)) {
              $data['x'][] = $row['teganganac'];
              $data['y'][] = $row['arusac1'];
            }
            
            // Menutup koneksi database
            mysqli_close($koneksi);
            ?>
            
            <!-- Menampilkan chart menggunakan data dari MySQL -->
            <canvas id="myChart" style="width:100%;max: width 1000px;"></canvas>
            
            <script>
            const xValues = <?php echo json_encode($data['x']); ?>;
            const yValues = <?php echo json_encode($data['y']); ?>;
            
            new Chart("myChart", {
              type: "line",
              data: {
                labels: xValues,
                datasets: [{ 
                  data: yValues,
                  borderColor: "red",
                  fill: false
                }]
              },
              options: {
                legend: {display: false}
              }
            });
            </script>
          </div>
              
      </main>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.js"></script>
  <script src="js/main.js"></script>
  <script src="js/chart.js"></script>

  
  <script type="application/ld+json">{"@context":"http://schema.org","@type":"WebSite","url":"https://www.mazipan.github.io/","name":"Irfan Maulana | Front End Developer","author":"Irfan Maulana","image":"http://mazipan.github.io/images/irfan-maulana.jpg","description":"Irfan Maulana is Front End Developer from Indonesia - Man that craft some code to build a beauty and readable code, experienced in web and desktop technology.","sameAs":["https://www.facebook.com/mazipanneh","https://instagram.com/maz_ipan","https://twitter.com/Maz_Ipan","https://id.linkedin.com/in/irfanmaulanamazipan","https://www.slideshare.net/IrfanMaulana21","https://github.com/mazipan"]}</script>
  <script type="application/ld+json">{"@context":"http://schema.org","@type":"Person","email":"mailto:mazipanneh@gmail.com","image":"http://mazipan.github.io/images/irfan-maulana.jpg","jobTitle":"Software Engineer","name":"Irfan Maulana","url":"https://www.mazipan.github.io/","sameAs":["https://www.facebook.com/mazipanneh","https://instagram.com/maz_ipan","https://twitter.com/Maz_Ipan","https://id.linkedin.com/in/irfanmaulanamazipan","https://www.slideshare.net/IrfanMaulana21","https://github.com/mazipan"]}</script>
  <script type="application/ld+json">{"@context":"http://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"item":{"@id":"http://mazipan.github.io/","name":"Home","image":"http://mazipan.github.io/images/irfan-maulana.jpg"}},{"@type":"ListItem","position":2,"item":{"@id":"http://mazipan.github.io/demo/","name":"Demo","image":"http://mazipan.github.io/images/irfan-maulana.jpg"}},{"@type":"ListItem","position":3,"item":{"@id":"http://mazipan.github.io/bootstrap4-admin-dashboard-template","name":"bootstrap4-admin-dashboard-template","image":"http://mazipan.github.io/images/irfan-maulana.jpg"}}]}</script>

</body>

</html>
