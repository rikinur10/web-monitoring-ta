<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Grafik Beban</title>

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
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-25065548-2"></script>
  <script>window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'UA-25065548-2');</script>
  <script>src="Chart.js"></script>
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
  </script>

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
              <a class="nav-link animated-link" href="photovoltaic.php">
                <i class="fa fa-tachometer"></i>
                Photovoltaic ☀
                <span class="badge badge-primary"></span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active animated-link" href="beban.php">
                <i class="fa fa-pencil-square-o"></i> Beban 💡
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link animated-link" href="lingkungan.php">
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
                  <a class="nav-link" href="https://twitter.com/Maz_Ipan" target="blank" rel="noopener">
                    <i class="fa fa-twitter"></i> Twitter
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://www.facebook.com/mazipanneh" target="blank" rel="noopener">
                    <i class="fa fa-facebook"></i> Facebook
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
          <a href="beban.php" class="btn btn-sm btn-light" style="background: linear-gradient(to top, #E72929, #FF5BAE); color: white; padding: 0.25rem 1rem; font-size: 1.5rem;">
          Back 💡
          </a>
          </div>
        </div>
            <h1 class="h2" style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 
            'Helvetica Neue', sans-serif; color : #808080; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1); font-size: 30px;"><i class="fa fa-tachometer">
            </i> Grafik <span style="color: #222831;">Beban</span></h1>
<!-----------------------------------------------------------------------------------------
        <?php
        // Koneksi ke database
        $koneksi = mysqli_connect("localhost", "root", "", "start12");

        // Periksa koneksi
        if (mysqli_connect_errno()) {
            echo "Koneksi database gagal: " . mysqli_connect_error();
            exit();
        }
        date_default_timezone_set('Asia/Makassar');
        // Query untuk mengambil data dari database
        $query = "SELECT * FROM websensor ORDER BY tanggal";
        $result = mysqli_query($koneksi, $query);

        // Inisialisasi variabel untuk tanggal sebelumnya
        $tanggal_sebelumnya = null;
        // Inisialisasi array data
        $data = array('x' => array(), 'y1' => array(), 'y2' => array(), 'y3' => array());
        // Inisialisasi variabel untuk menghitung data
        $count = 0;

        // Looping melalui hasil query
        while ($row = mysqli_fetch_assoc($result)) {
            // Ambil tanggal dari baris saat ini
            $tanggal_sekarang = date('Y-m-d', strtotime($row['tanggal']));

            // Periksa apakah tanggal berubah dari sebelumnya
            if ($tanggal_sekarang != $tanggal_sebelumnya) {
                // Jika tanggal berubah, reset data dan proses data yang telah terkumpul sebelumnya
                if ($tanggal_sebelumnya !== null) {
                    // Proses pengolahan data atau menampilkan grafik dapat dilakukan di sini
                    // Anda dapat menampilkan grafik, menyimpan data ke database, atau melakukan tindakan lainnya
                    // Untuk tujuan contoh, kita akan mencetak data yang telah terkumpul
                    echo "Data untuk tanggal " . $tanggal_sebelumnya . " setelah pembacaan ke-24:<br>";
                    for ($i = 0; $i < count($data['x']); $i++) {
                        echo "x: " . $data['x'][$i] . ", y1: " . $data['y1'][$i] . ", y2: " . $data['y2'][$i] . ", y3: " . $data['y3'][$i] . "<br>";
                    }

                    // Reset data dan counter
                    $data = array('x' => array(), 'y1' => array(), 'y2' => array(), 'y3' => array());
                    $count = 0;
                }

                // Perbarui tanggal sebelumnya
                $tanggal_sebelumnya = $tanggal_sekarang;
            }

            // Menambahkan data ke dalam array
            $data['x'][] = $row['tanggal'];
            $data['y1'][] = $row['dayabeban1'];
            $data['y2'][] = $row['dayabeban2'];
            $data['y3'][] = $row['dayabeban3'];
        }

        // Tutup koneksi database
        mysqli_close($koneksi);
        ?>
          <!DOCTYPE html>
          <html lang="en">
          <head>
              <meta charset="UTF-8">
              <title>Line Chart</title>
              <!- Include Chart.js -->
              <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
          </head>
            <body>
              <!-- Menampilkan chart menggunakan data dari MySQL -->
              <canvas id="myChart" style="width:100%;max: width 1000px;"></canvas>
              
              <script>
                  const xValues = <?php echo json_encode($data['x']); ?>;
                  const y1Values = <?php echo json_encode($data['y1']); ?>;
                  const y2Values = <?php echo json_encode($data['y2']); ?>;
                  const y3Values = <?php echo json_encode($data['y3']); ?>;
                  new Chart("myChart", {
                      type: "line",
                      data: {
                          labels: xValues,
                          datasets: [{ 
                              data: y1Values,
                              borderColor: "#1C1678",
                              label: "Daya Beban 1",
                              fill: false
                          }, { 
                              data: y2Values,
                              borderColor: "#8576FF",
                              label: "Daya Beban 2",
                              fill: false
                          }, { 
                              data: y3Values,
                              borderColor: "#7BC9FF",
                              label: "Daya Beban 3",
                              fill: false
                          }]
                      },
                      options: {
                          legend: { display: true },
                          title: {
                              display: true,
                              text: 'Grafik Garis dengan 3 Data'
                          },
                          scales: {
                              xAxes: [{
                                  type: 'time',
                                  time: {
                                      unit: 'day',
                                      displayFormats: {
                                          day: 'MMM D'
                                      }
                                  },
                                  scaleLabel: {
                                      display: true,
                                      labelString: 'Tanggal'
                                  }
                              }],
                              yAxes: [{
                                  scaleLabel: {
                                      display: true,
                                      labelString: 'Nilai'
                                  }
                              }]
                          }
                      }
                  });
              </script>
            </body>
          </html>
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
