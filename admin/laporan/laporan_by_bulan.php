<div class="pagetitle">
	<h1>Laporan Alat By Bulan</h1>
	<nav>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="?page=Laporan_alat">Laporan alat</a>
			</li>
			<li class="breadcrumb-item">Pages</li>
			<li class="breadcrumb-item active">Laporan Alat By Bulan</li>
		</ol>
	</nav>
</div>

<form method="POST" action="?page=laporan_by_bulan">
	<div class="col-12">
		<label class="form-label">Pilih Bulan</label>
		<select name="bulan" class="form-control">
			<option disabled selected>-- Pilih Bulan --</option>
			<option value="01">Januari</option>
			<option value="02">Februari</option>
			<option value="03">Maret</option>
			<option value="04">April</option>
			<option value="05">Mei</option>
			<option value="06">Juni</option>
			<option value="07">Juli</option>
			<option value="08">Agustus</option>
			<option value="09">September</option>
			<option value="10">Oktober</option>
			<option value="11">November</option>
			<option value="12">Desember</option>
		</select>
		<input type="submit" class="btn btn-success btn-sm" style="margin-top: 5px" name="submit" value="FILTER">
	</div>
	<br>

</form>

<?php
if (isset($_POST['submit'])) {
	$tgl = $_POST['bulan'];
	$query = mysqli_query($koneksi, "SELECT * FROM alat WHERE MONTH(tanggal) = '$tgl' ");
	$chart = mysqli_query($koneksi, "SELECT status, COUNT(*) as jumlah FROM alat  WHERE MONTH(tanggal) = '$tgl' GROUP BY status");

	$chart_data = array();
	while ($row = mysqli_fetch_array($chart)) {
		$chart_data['status'][] = $row['status'];
		$chart_data['jumlah'][] = $row['jumlah'];
	}
?>
	<section class="section">

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
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">
							Tabel Laporan Alat <a href="print/print_by_bulan.php?bulan=<?php echo $tgl ?>" class="btn btn-sm btn-primary" target="_blank">Print</a>
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
		</div>
		
	</section>

<?php
}
?>