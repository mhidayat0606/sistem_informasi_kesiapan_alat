<?php
session_start();
error_reporting(0);
date_default_timezone_set("Asia/Jakarta");

include '../function/connect.php';

if ($_SESSION['level'] != "user") {
  header("location:../index.php");
}

$username = $_SESSION['username'];


$query = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'  ");

$chart = mysqli_query($koneksi, "SELECT status, COUNT(*) as jumlah FROM alat GROUP BY status");

$chart_data = array();
while ($row = mysqli_fetch_array($chart)) {
  $chart_data['status'][] = $row['status'];
  $chart_data['jumlah'][] = $row['jumlah'];
}


while ($data = mysqli_fetch_array($query)) {
  $nama = $data['nama'];
  $level = $data['level'];
  $status = $data['status'];
}

if ($status == "blokir") {
?>
  <script type="text/javascript">
    alert('Akun Ini Telah Di Blokir Oleh Admin, Silahkan hubungi admin untuk mengaktifkannya kembali');
    window.location = "../index.php";
  </script>
<?php
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sistem Informasi Kesiapan Alat</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="../https://fonts.gstatic.com" rel="preconnect">
  <link href="../https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="?page=dashboard" class="logo d-flex align-items-center">
        <img src="../assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">SIKAt</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="../#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->


        `

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="../#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $nama; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $nama; ?></h6>
              <span><?php echo $level; ?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="?page=dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-heading">Menu Laporan</li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="../#">
          <i class="bi bi-menu-button-wide"></i><span>Laporan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="?page=laporan_alat">
              <i class="bi bi-circle"></i><span>Laporan Alat</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->




    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <?php
    if ($_GET['page'] == "dashboard") {
      include 'dashboard/dashboard.php';
    } else if ($_GET['page'] == "laporan_alat") {
      include 'laporan/laporan_alat.php';
    } else if ($_GET['page'] == "tambah_alat") {
      include 'laporan/tambah_alat.php';
    } else if ($_GET['page'] == "edit_alat") {
      include 'laporan/edit_alat.php';
    }

    //aksi
    else if ($_GET['page'] == "aksi_tambah_alat") {
      include 'laporan/aksi/tambah.php';
    } else if ($_GET['page'] == "aksi_hapus_alat") {
      include 'laporan/aksi/hapus.php';
    } else if ($_GET['page'] == "aksi_edit_alat") {
      include 'laporan/aksi/edit.php';
    }

    //laporan alat
    else if ($_GET['page'] == "laporan_master_data" ) {
      include 'dashboard/laporan_master_data.php';
    }else if ($_GET['page'] == "laporan_alat_ready") {
      include 'dashboard/laporan_alat_ready.php';
    } else if ($_GET['page'] == "laporan_alat_rusak") {
      include 'dashboard/laporan_alat_rusak.php';
    } else if ($_GET['page'] == "laporan_alat_perbaikan") {
      include 'dashboard/laporan_alat_perbaikan.php';
    } else if ($_GET['page'] == "laporan_alat_operasi" ) {
      include 'dashboard/laporan_alat_operasi.php';
    } else if ($_GET['page'] == "laporan_alat_perawatan" ) {
      include 'dashboard/laporan_alat_perawatan.php';
    } 
    
    else {
      include 'dashboard/dashboard.php';
    }

    ?>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span><?php echo $username; ?> Sistem Informasi Kesiapan Alat</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="../https://bootstrapmade.com/">SIKA <?php echo date('Y') ?></a>
    </div>
  </footer><!-- End Footer -->

  <a href="../#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/chart.js/chart.min.js"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/vendor/quill/quill.min.js"></script>
  <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
  <script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
      type: 'pie',
      data: {
        labels: <?php echo json_encode($chart_data['status']); ?>,
        datasets: [{
          label: '# Jumlah',
          data: <?php echo json_encode($chart_data['jumlah']); ?>,
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false
      }
    });
  </script>

</body>

</html>