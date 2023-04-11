<?php 
	if (isset($_GET['id']) && isset($_GET['nama_user'])) {
		$id = $_GET['id'];
		$nama_user = $_GET['nama_user'];

		$query = mysqli_query($koneksi, "DELETE FROM user WHERE id = '$id' ");
		$query1 = mysqli_query($koneksi, "DELETE FROM alat WHERE nama_user = '$nama_user' ");
		if ($query) {
			?>
				<script type="text/javascript">
					alert('Data Berhasil Di Hapus');
					window.location = "?page=manajemen_user";
				</script>
			<?php
		}
	}
?>