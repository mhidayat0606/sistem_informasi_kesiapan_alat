<?php 
	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		$query = mysqli_query($koneksi, "DELETE FROM data_alat WHERE id = '$id' ");
		if ($query) {
			?>
				<script type="text/javascript">
					alert('Master Data Berhasil Di Hapus');
					window.location = "?page=master_data";
				</script>
			<?php
		}
	}
?>