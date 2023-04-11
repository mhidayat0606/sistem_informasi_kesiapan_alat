<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="?page=dashboard">Dashboard</a></li>
      <li class="breadcrumb-item">Pages</li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section dashboard">
  <div class="row">

    <!-- Left side columns -->
    <div class="col-lg-12">
      <div class="row">

        <!-- Sales Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card sales-card">
            <div class="card-body">
              <h5 class="card-title">Jumlah Alat<span> | Ready</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-bag-fill"></i>
                </div>
                <div class="ps-3">
                  Tanggal Sekarang
                  <h6>
                    <?php echo date('Y-m-d'); ?>
                  </h6>
                </div>
              </div>
            </div>

          </div>
        </div><!-- End Sales Card -->

        <!-- Sales Card -->
        <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Data Alat SPMT<span> | Keseluruhan</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-clipboard-data-fill"></i>
                    </div>
                    <div class="ps-3">
                      <?php 
                        $query = mysqli_query($koneksi, "SELECT * FROM data_alat ");
                        $hitung = mysqli_num_rows($query);
                      ?>
                      <h6><?php echo $hitung; ?> Buah <a href="?page=laporan_master_data" class="btn btn-sm btn-primary">Lihat Data</a></h6>
                    </div>
                  </div>
                </div>

              </div>
        </div><!-- End Sales Card -->
        
        <!-- Sales Card -->
        <div class="col-xxl-4 col-md-4">
          <div class="card info-card sales-card">
            <div class="card-body">
              <h5 class="card-title">Jumlah Laporan Alat</h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-bag-fill"></i>
                </div>
                <div class="ps-3">
                  <?php
                  $query = mysqli_query($koneksi, "SELECT * FROM alat ");
                  $hitung = mysqli_num_rows($query);
                  ?>
                  <h6><?php echo $hitung; ?> Buah <a href="?page=laporan_alat" class="btn btn-sm btn-primary">Lihat Data</a></h6>
                </div>
              </div>
            </div>

          </div>
        </div><!-- End Sales Card -->




        <!-- Sales Card -->
        <div class="col-xxl-4 col-md-4">
          <div class="card info-card sales-card">
            <div class="card-body">
              <h5 class="card-title">Jumlah Alat<span> | Ready</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-bag-check-fill"></i>
                </div>
                <div class="ps-3">
                  <?php
                  $query = mysqli_query($koneksi, "SELECT * FROM alat WHERE status = 'Ready' ");
                  $hitung = mysqli_num_rows($query);
                  ?>
                  <h6><?php echo $hitung; ?> Buah <a href="?page=laporan_alat_ready" class="btn btn-sm btn-primary">Lihat Data</a></h6>
                </div>
              </div>
            </div>

          </div>
        </div><!-- End Sales Card -->



        <!-- Sales Card -->
        <div class="col-xxl-4 col-md-4">
          <div class="card info-card sales-card">
            <div class="card-body">
              <h5 class="card-title">Jumlah Alat<span> |  Breakdown</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-bag-x-fill"></i>
                </div>
                <div class="ps-3">
                  <?php
                  $query = mysqli_query($koneksi, "SELECT * FROM alat WHERE  status = 'Breakdown' ");
                  $hitung = mysqli_num_rows($query);
                  ?>
                  <h6><?php echo $hitung; ?> Buah <a href="?page=laporan_alat_rusak" class="btn btn-sm btn-primary">Lihat Data</a></h6>
                </div>
              </div>
            </div>

          </div>
        </div><!-- End Sales Card -->


        <!-- Sales Card -->
        <div class="col-xxl-4 col-md-4">
          <div class="card info-card sales-card">
            <div class="card-body">
              <h5 class="card-title">Jumlah Alat<span> | Perbaikan</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-bag-plus-fill"></i>
                </div>
                <div class="ps-3">
                  <?php
                  $query = mysqli_query($koneksi, "SELECT * FROM alat WHERE status = 'Perbaikan' ");
                  $hitung = mysqli_num_rows($query);
                  ?>
                  <h6><?php echo $hitung; ?> Buah <a href="?page=laporan_alat_perbaikan" class="btn btn-sm btn-primary">Lihat Data</a></h6>
                </div>
              </div>
            </div>

          </div>
        </div><!-- End Sales Card -->

        <!-- Sales Card -->
        <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Jumlah Alat<span> | Operasi</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-hourglass-split"></i>
                    </div>
                    <div class="ps-3">
                      <?php 
                        $query = mysqli_query($koneksi, "SELECT * FROM alat WHERE status = 'Operasi' ");
                        $hitung = mysqli_num_rows($query);
                      ?>
                      <h6><?php echo $hitung; ?> Buah <a href="?page=laporan_alat_operasi" class="btn btn-sm btn-primary">Lihat Data</a></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Jumlah Alat<span> | Perawatan</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-heart-pulse-fill"></i>
                    </div>
                    <div class="ps-3">
                      <?php 
                        $query = mysqli_query($koneksi, "SELECT * FROM alat WHERE status = 'Perawatan' ");
                        $hitung = mysqli_num_rows($query);
                      ?>
                      <h6><?php echo $hitung; ?> Buah <a href="?page=laporan_alat_perawatan" class="btn btn-sm btn-primary">Lihat Data</a></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

        <!-- Sales Card -->
        <div class="col-xxl-12 col-md-12">
          <div class="card info-card sales-card">
            <div class="card-body">
              <h5 class="card-title">Grafik Alat</h5>

              <div class="d-flex align-items-center">
                <div class="w-100">
                  <canvas id="myChart"></canvas>
                </div>
              </div>

            </div>
          </div><!-- End Sales Card -->



        </div>
      </div><!-- End Left side columns -->

    </div>
</section>