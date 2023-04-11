<div class="pagetitle">
    <h1>Laporan Alat By Nama</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="?page=Laporan_alat">Laporan alat</a>
            </li>
            <li class="breadcrumb-item">Pages</li>
            <li class="breadcrumb-item active">Laporan Alat By Nama</li>
        </ol>
    </nav>
</div>

<form method="POST" action="?page=laporan_by_nama">
    <div class="col-12">
        <label class="form-label">Pilih Nama</label>
        <select name="nama" class="form-control">
            <option disabled selected>-- Pilih Nama --</option>
            <?php
            $n = mysqli_query($koneksi, "SELECT nama_alat FROM alat GROUP BY nama_alat");
            while ($nm = mysqli_fetch_array($n)) {
                echo "<option value='" . $nm['nama_alat'] . "'> " . $nm['nama_alat'] . " </option>";
            }
            ?>

        </select>
        <input type="submit" class="btn btn-success btn-sm" style="margin-top: 5px" name="submit" value="FILTER">
    </div>
    <br>

</form>

<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $query = mysqli_query($koneksi, "SELECT * FROM alat WHERE nama_alat = '$nama' ");
    $chart = mysqli_query($koneksi, "SELECT status, COUNT(*) as jumlah FROM alat WHERE nama_alat = '$nama' GROUP BY status");

    $chart_data = array();
    while ($row = mysqli_fetch_array($chart)) {
        $chart_data['status'][] = $row['status'];
        $chart_data['jumlah'][] = $row['jumlah'];
    }
?>
    <section class="section">
        <div class="row">
            
            <div class="col-xxl-12 col-md-12">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <h5 class="card-title">Jumlah Alat <span> | <?= $nama ?></span></h5>

                        <div class="d-flex align-items-center">
                            <div class="w-100">
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            Tabel Laporan Alat <a href="print/print_by_nama.php?nama=<?php echo $nama ?>" class="btn btn-sm btn-primary" target="_blank">Print</a>
                        </h5>

                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama User</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Nama Alat</th>
                                    <th scope="col">HM</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Keterangan</th>
                                </tr>
                            </thead>
                            <?php
                            $no = 1;

                            while ($data = mysqli_fetch_array($query)) {
                            ?>
                                <tbody>
                                    <tr>
                                        <th scope="row"><?php echo $no++; ?></th>
                                        <td><?php echo $data['nama_user']; ?></td>
                                        <td><?php echo $data['tanggal']; ?></td>
                                        <td><?php echo $data['nama_alat']; ?></td>
                                        <td><?php echo $data['hm']; ?></td>
                                        <td><?php echo $data['status']; ?></td>
                                        <td><?php echo $data['keterangan']; ?></td>
                                    </tr>
                                </tbody>
                            <?php
                            }



                            ?>

                        </table>
                    </div>
                </div>
            </div>
            
    </section>

<?php
}
?>