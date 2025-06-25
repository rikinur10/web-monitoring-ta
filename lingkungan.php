<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Lingkungan</title>

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
  <link rel="stylesheet" href= "/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
  <link rel="stylesheet" href= "/stylesheets/styles.css" />

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-25065548-2"></script>
  <script>window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'UA-25065548-2');</script>
  <script>src="Chart.js"></script>
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
  <script src="/bootstrap/js/bootstrap.min.js"></script>
  <script src="/bootstrap/js/bootstrap-collapse.js"></script>
  <script src="/bootstrap/js/bootstrap-transition.js"></script>
  <meta http-equiv="refresh" content="5">
  
  
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <aside class="col-md-2 bg-light sidebar" style = "height: 100vh;">
        <img src="img/logomansur-01.png" alt="Deskripsi Gambar" style="width: 100%; height: auto; display: block; margin: 0 auto;">
        <div class="sidebar-sticky">
          <h6 class="sidebar-heading" style="background : linear-gradient(to left, #387ADF, #50C4ED); padding : 10px; 
          border-radius : 25px; width: 90%; display; inline-block; text-align: center;">
            <span style = "color : #FFFFFF;">Main Navigation</span>
          </h6>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="photovoltaic.php">
                <i class="fa fa-tachometer"></i> Photovoltaic ☀
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="beban.php">
                <i class="fa fa-pencil-square-o"></i> Beban 💡
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="lingkungan.php">
                <i class="fa fa-desktop"></i> Lingkungan 🌿
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
                <i class="fa fa-user-o"></i> Profile 👤
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
                <i class="fa fa-cog"></i> Settings 🔧
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="keluar.php">
                <i class="fa fa-power-off"></i> Logout ➡️
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
            </div>
            <a href="grafiklingkungan.php" class="btn btn-sm btn-light" style="background: linear-gradient(to top, #E72929, #FF5BAE); color: white; padding: 0.25rem 1rem; font-size: 1.5rem;">
            Grafik 📊
            </a>

          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
          <div class="card text-white" style="background: linear-gradient(to top, #50727B80, #78A083FF), url('img/suhu.jpg'); background-position : center; background-size: cover; border-radius: 15px; box-shadow: 0px 0px 20px 3px #78A083;">
              <div class="card-header" style = "text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);"><i class="fa fa-sun-o"></i>Suhu</div>
              <div class="card-body">
                <h3 class="card-title"style = "text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                <?php
                  include 'bacavariabeltabel.php';
                    echo $suhu . " °C";
                ?>
                </h3>
              </div>
              <a class="card-footer text-left" style = "text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);" href="#">
                Celcius (°C)
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
          <div class="card text-white" style="background: linear-gradient(to top, #50727B80, #78A083FF), url('img/kelembaban.jpg'); background-position : center; border-radius: 15px; box-shadow: 0px 0px 20px 3px #78A083;">
              <div class="card-header" style = "text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);"><i class="fa fa-sun-o"></i>Kelembaban</div>
              <div class="card-body">
                <h3 class="card-title"style = "text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                <?php
                  include 'bacavariabeltabel.php';
                    echo $kelembaban . " %";
                ?>
                </h3>
              </div>
              <a class="card-footer text-left" style = "text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);" href="#">
                Persen (%)
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
          <div class="card text-white" style="background: linear-gradient(to top, #50727B80, #78A083FF), url('img/cahaya.jpg'); background-position : center; background-size: cover; border-radius: 15px; box-shadow: 0px 0px 20px 3px #78A083;">
              <div class="card-header" style = "text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);"><i class="fa fa-sun-o"></i>Intensitas Cahaya</div>
              <div class="card-body">
                <h3 class="card-title"style = "text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                <?php
                  include 'bacavariabeltabel.php';
                    echo $cahaya . " lx";
                ?>
                </h3>
              </div>
              <a class="card-footer text-left" style = "text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);" href="#">
                Lux (lx)
              </a>
            </div>
          </div>

<!-- keterangan tabel -->
            <div class="card-body">
              <title>Tabel Linimasa</title>
              <style>
                /* Style untuk header tabel */
                .table thead {
                  background: linear-gradient(to left, #58A399, #A8CD9F);
                  border-radius: 10px;
                  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
                }
              </style>
            </head>
            <body>

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

            // Menampilkan data dalam tabel
            echo '<h1 class="h2" style="font-family: system-ui, -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif, sans-serif; color : #808080; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1); font-size: 20px;"><i class="fa fa-tachometer"></i> Tabel <span style="color: #222831;">Linimasa </span></h1>';
            echo '<table class="table table-light table-striped" style="text-align: center">';
            echo '<thead class="thead text-white">';
            echo '<tr>';
            echo '<th scope="col">ID</th>';
            echo '<th scope="col">Waktu</th>';
            echo '<th scope="col">Suhu (°C) </th>';
            echo '<th scope="col">Cahaya (lx) </th>';
            echo '<th scope="col">Kelembaban (%) </th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';

            // Menampilkan data dari hasil query
            $no = $offset + 1;
            while ($row = mysqli_fetch_assoc($result)) {
              echo '<tr>';
              echo '<td>' . $row['id'] . '</td>';
              echo '<td>' . $row['tanggal'] . '</td>';
              echo '<td>' . $row['suhu'] . '</td>';
              echo '<td>' . $row['cahaya'] . '</td>';
              echo '<td>' . $row['kelembaban'] . '</td>';
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
