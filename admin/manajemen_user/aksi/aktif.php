<?php 
	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		$query = mysqli_query($koneksi, "UPDATE user SET status = 'aktif' WHERE id = '$id' ");

		if ($query) {
			?>
				<script type="text/javascript">
					alert('Akun Ini Berhasil Di Aktifkan');
					window.location = "?page=manajemen_user";
				</script>
			<?php
		}
	}
?>