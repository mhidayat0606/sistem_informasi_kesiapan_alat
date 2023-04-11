<div class="pagetitle">
	<h1>Manajemen User</h1>
	<nav>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="?page=manajemen_user">Manajemen USer</a>
			</li>
			<li class="breadcrumb-item">Pages</li>
			<li class="breadcrumb-item active">Manajemen User</li>
		</ol>
	</nav>
</div>
<section class="section">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">
						Tabel Manajemen User
						<a href="?page=tambah_user" class="btn btn-danger btn-sm">+ user</a>
					</h5>
					
					<table class="table datatable">
						<thead>
							<tr>
								<th scope="col">No.</th>
								<th scope="col">Nama</th>
								<th scope="col">Username</th>
								<th scope="col">Level</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<?php 
							$query = mysqli_query($koneksi, "SELECT * FROM user");
							$no = 1;
							while ($data = mysqli_fetch_array($query)) {
								?>
									<tbody>
										<tr>
											<th scope="row"><?php echo $no++; ?></th>
											<td><?php echo $data['nama']; ?></td>
											<td><?php echo $data['username']; ?></td>
											<td><?php echo $data['level']; ?></td>
											<td>
												<?php 
													if ($data['status'] == "blokir") {
														?>
															<a class="btn btn-sm btn-success" href="?page=aktif_user&id=<?php echo $data['id']; ?>">Aktifkan</a> |
														<?php
													}else{
															if ($data['level'] == "user") {
																?>

																	<a class="btn btn-sm btn-danger" href="?page=blokir_user&id=<?php echo $data['id'] ?>">Blokir</a> | 
																<?php
															}
														
													}
												?>
												 
												<a class="btn btn-sm btn-warning" href="?page=edit_user&id=<?php echo $data['id'] ?>">Edit</a> | 
												<a class="btn btn-sm btn-primary" href="?page=aksi_hapus_user&id=<?php echo $data['id'] ?>&nama_user=<?php echo $data['nama'] ?>">Hapus</a>
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