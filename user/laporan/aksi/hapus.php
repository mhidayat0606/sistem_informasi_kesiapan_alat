<?php 
	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		$query = mysqli_query($koneksi, "DELETE FROM alat WHERE id = '$id' ");
		if ($query) {
			?>
				<script type="text/javascript">
					alert('Data Berhasil Di Hapus');
					window.location = "?page=laporan_alat";
				</script>
			<?php
		}
	}
?>