<?php 
	error_reporting(-1);
	if (isset($_POST['submit'])) {

		$nama_alat = $_POST['nama_alat'];
		$keterangan_alat = $_POST['keterangan_alat'];

		$query = mysqli_query($koneksi, "INSERT INTO data_alat (nama_alat,keterangan) VALUES ('$nama_alat', '$keterangan_alat')");

		if ($query) {
			?>
				<script type="text/javascript">
					alert('Data Berhasil Di Tambah');
					window.location = "?page=master_data";
				</script>
			<?php
		}
	}
?>