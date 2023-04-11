<div class="pagetitle">
	<h1>Laporan Alat</h1>
	<nav>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="?page=Laporan_alat">Laporan alat</a>
			</li>
			<li class="breadcrumb-item">Pages</li>
			<li class="breadcrumb-item active">Laporan Alat</li>
		</ol>
	</nav>
</div>
<?php 
	$bulan = date('m');
	$tahun = date('Y');
?>
<section class="section">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">
						Tabel Laporan Alat
					</h5>
					
					<table class="table datatable">
						<thead>
							<tr>
								<th scope="col">No</th>
								<th scope="col">Nama User</th>
								<th scope="col">Tanggal</th>
								<th scope="col">Nama Alat</th>
								<th scope="col">HM</th>
								<th scope="col">Status</th>
								<th scope="col">Keterangan</th>
							</tr>
						</thead>
						<?php 
							$query = mysqli_query($koneksi, "SELECT * FROM alat");
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
	</div>
</section>