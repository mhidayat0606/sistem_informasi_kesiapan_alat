<?php 
	if (isset($_POST['submit'])) {
		
		$id = $_POST['id'];
		$tanggal = $_POST['tanggal'];
		$nama_alat = $_POST['nama_alat'];
		$hm = $_POST['hm'];
		$status = $_POST['status'];
		$keterangan = $_POST['keterangan'];

		$query = mysqli_query($koneksi, "UPDATE alat SET tanggal = '$tanggal', nama_alat = '$nama_alat', hm = '$hm', status = '$status', keterangan = '$keterangan' WHERE id = '$id' ");

		if ($query) {
			?>
				<script type="text/javascript">
					alert('Data Berhasil Di Ubah');
					window.location = "?page=laporan_alat";
				</script>
			<?php
		}
	}
?>