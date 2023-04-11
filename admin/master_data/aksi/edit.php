<?php 
	error_reporting(-1);
	if (isset($_POST['submit'])) {
		
		$id = $_POST['id'];
		
		$nama_alat = $_POST['nama_alat'];
		$keterangan = $_POST['keterangan'];

		$query = mysqli_query($koneksi, "UPDATE data_alat SET nama_alat = '$nama_alat', keterangan = '$keterangan' WHERE id = '$id' ");

		if ($query) {
			?>
				<script type="text/javascript">
					alert('Master Data Berhasil Di Ubah');
					window.location = "?page=master_data";
				</script>
			<?php
		}
	}
?>