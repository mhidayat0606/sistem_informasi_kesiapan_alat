<div class="pagetitle">
	<h1>Data Alat SPMT DUmai</h1>
	<nav>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="?page=master_data">Data Alat</a>
			</li>
			<li class="breadcrumb-item">Pages</li>
			<li class="breadcrumb-item active">Data Alat SPMT</li>
		</ol>
	</nav>
</div>
<section class="section">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">
						Tabel Data Alat SPMT
					</h5>
					
					<table class="table datatable">
						<thead>
							<tr>
								<th scope="col">No.</th>
								<th scope="col">Nama Alat</th>
								<th scope="col">Keterangan Alat</th>
							</tr>
						</thead>
						<?php 
							$query = mysqli_query($koneksi, "SELECT * FROM data_alat ");
							$no = 1;
							while ($data = mysqli_fetch_array($query)) {
								?>
									<tbody>
										<tr>
											<th scope="row"><?php echo $no++; ?></th>
											<td><?php echo $data['nama_alat']; ?></td>
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