<div class="pagetitle">
	<h1>Laporan Alat</h1>
	<nav>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="?page=manajemen_user">Laporan Alat</a>
			</li>
			<li class="breadcrumb-item">Pages</li>
			<li class="breadcrumb-item active">Tambah Data Alat</li>
		</ol>
	</nav>
</div>

<section class="section">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Tambah Data Alat</h5>

					<!-- Vertical Form -->
					<form class="row g-3" action="?page=aksi_tambah_alat" method="POST">
						<div class="col-12">
							<input type="hidden" name="nama_user" value="<?php echo $nama ?>">
							<input type="hidden" name="nama_alat" id="nama_alat">
							<label for="inputNanme4" class="form-label">Tanggal</label>
							<input type="date" class="form-control" id="inputNanme4" name="tanggal">
						</div>


						<div class="col-12">
							<label for="inputEmail4" class="form-label">Nama Alat</label>
							<select class="form-control" id="id_alat" onchange="changeValue(this.value)" name="id_alat" required="">
								<option value="" hidden="">-- Pilih Alat SPMT Dumai --</option>
								<?php
								$query       = mysqli_query($koneksi, 'SELECT * from data_alat');
								$keterangan = [];
								$nama_alat = [];
								while ($row = mysqli_fetch_array($query)) {
									echo '<option value="' . $row['id'] . '">' . $row['nama_alat'] . '</option>';
									$keterangan[ $row['id']] = $row['keterangan'];
									$nama_alat[ $row['id']] = $row['nama_alat'];
								}
								
								?>
							</select>
						</div>
						<div class="col-12">
							<label for="inputPassword4" class="form-label">Keterangan Alat</label>
							<textarea class="form-control" id="keterangan" readonly required></textarea>
						</div>
						<div class="col-12">
							<label for="inputPassword4" class="form-label">HM</label>
							<input type="text" class="form-control" id="inputPassword4" name="hm" required>
						</div>
						<div class="col-12">
							<label for="inputPassword4" class="form-label">Status</label>
							<select name="status" class="form-control" required>
								<option selected="" disabled="">-- Pilih Status --</option>
								<option value="Ready"> Ready</option>
								<option value="Breakdown"> Breakdown</option>
								<option value="Perbaikan"> Perbaikan</option>
								<option value="Operasi"> Operasi</option>
								<option value="Perawatan"> Perawatan</option>
							</select>
						</div>
						<div class="col-12">
							<label for="inputPassword4" class="form-label">Keterangan</label>
							<textarea class="form-control"  name="keterangan" required></textarea>
						</div>
						<div class="text-center">
							<button type="submit" name="submit" class="btn btn-primary">Submit</button>
							<button type="reset" class="btn btn-secondary">Reset</button>
						</div>
					</form><!-- Vertical Form -->

				</div>
			</div>
		</div>
	</div>
</section>

<script type="text/javascript">
	var keterangan = <?php echo json_encode($keterangan); ?>;
	var nama_alat = <?php echo json_encode($nama_alat); ?>;
	function changeValue(id) {
		document.getElementById('keterangan').value = keterangan[id];
		document.getElementById('nama_alat').value = nama_alat[id];
	};
</script>