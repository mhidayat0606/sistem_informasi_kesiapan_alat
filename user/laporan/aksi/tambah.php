<?php 
	error_reporting(-1);
	if (isset($_POST['submit'])) {

		$nama_user = $_POST['nama_user'];
		$tanggal = $_POST['tanggal'];
		$nama_alat = $_POST['nama_alat'];
		$id_alat = $_POST['id_alat'];
		$hm = $_POST['hm'];
		$status = $_POST['status'];
		$keterangan = $_POST['keterangan'];

		try { 
			$query = mysqli_query($koneksi, "INSERT INTO alat (nama_user,tanggal,nama_alat,id_alat,hm,status,keterangan) VALUES ('$nama_user', '$tanggal', '$nama_alat','$id_alat' ,'$hm', '$status', '$keterangan')");
		}catch (mysqli_sql_exception $e) { 
			var_dump($e);
			exit; 
		} 
		if ($query) {
			?>
				<script type="text/javascript">
					alert('Data Berhasil Di Tambah');
					window.location = "?page=laporan_alat";
				</script>
			<?php
		}
	}
?>