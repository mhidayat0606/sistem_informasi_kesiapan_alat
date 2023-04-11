<div class="pagetitle">
	<h1>Master Data</h1>
	<nav>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="?page=manajemen_user">Master Data</a>
			</li>
			<li class="breadcrumb-item">Pages</li>
			<li class="breadcrumb-item active">Master Data</li>
		</ol>
	</nav>
</div>
<section class="section">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">
						Tabel Data Alat
						<a href="?page=tambah_alat" class="btn btn-danger btn-sm">+ Data Alat</a>
					</h5>
					
					<table class="table datatable">
						<thead>
							<tr>
								<th scope="col">No.</th>
								<th scope="col">Nama Alat</th>
								<th scope="col">Keterangan Alat</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<?php 
							$query = mysqli_query($koneksi, "SELECT * FROM data_alat");
							$no = 1;
							while ($data = mysqli_fetch_array($query)) {
								?>
									<tbody>
										<tr>
											<th scope="row"><?php echo $no++; ?></th>
											<td><?php echo $data['nama_alat']; ?></td>
											<td><?php echo $data['keterangan']; ?></td>
											<td>
												<a class="btn btn-sm btn-warning" href="?page=edit_master_alat&id=<?php echo $data['id'] ?>">Edit</a> | 
												
												<a class="btn btn-sm btn-danger" href="?page=aksi_hapus_master_alat&id=<?php echo $data['id'] ?>&nama_alat=<?php echo $data['id'];?>" onclick="return confirm('Anda yakin ingin menghapus barang <?php echo $data['nama_alat']; ?> ?');">Hapus</a>
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

