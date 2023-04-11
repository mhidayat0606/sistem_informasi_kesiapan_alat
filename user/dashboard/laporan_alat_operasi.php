<div class="pagetitle">
	<h1>Laporan Alat Operasi</h1>
	<nav>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="?page=manajemen_user">Laporan Alat</a>
			</li>
			<li class="breadcrumb-item">Pages</li>
			<li class="breadcrumb-item active">Laporan Alat Operasi</li>
		</ol>
	</nav>
</div>
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
								<th scope="col">No.</th>
								<th scope="col">Tanggal</th>
								<th scope="col">Nama Alat</th>
								<th scope="col">HM</th>
								<th scope="col">Status</th>
								<th scope="col">Keterangan</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<?php 
							$query = mysqli_query($koneksi, "SELECT * FROM alat  WHERE nama_user = '$nama' AND status = 'Operasi' ");
							$no = 1;
							while ($data = mysqli_fetch_array($query)) {
								?>
									<tbody>
										<tr>
											<th scope="row"><?php echo $no++; ?></th>
											<td><?php echo $data['tanggal']; ?></td>
											<td><?php echo $data['nama_alat']; ?></td>
											<td><?php echo $data['hm']; ?></td>
											<td><?php echo $data['status']; ?></td>
											<td><?php echo $data['keterangan']; ?></td>
											<td>
												<a class="btn btn-sm btn-warning" href="?page=edit_alat&id=<?php echo $data['id'] ?>">Edit</a> | 
												<a class="btn btn-sm btn-danger" href="?page=aksi_hapus_alat&id=<?php echo $data['id'] ?>">Hapus</a>
											</td>
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