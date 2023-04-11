<?php 
	if (isset($_POST['submit'])) {
		$nama = $_POST['nama_lengkap'];
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$level = $_POST['level'];
		$status = "aktif";

		$a = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' ");

		$hitung = mysqli_num_rows($a);

		if ($hitung == 1) {
			?>
				<script type="text/javascript">
					alert('Username Sudah Di Pakai');
					window.location = "?page=manajemen_user";
				</script>
			<?php
		}else{
			$query = mysqli_query($koneksi, "INSERT INTO user (nama, username, password, level, status) VALUES ('$nama','$username','$password','$level','$status') ");

			if ($query) {
				?>
					<script type="text/javascript">
						alert('Data Berhasil Ditambahkan');
						window.location = "?page=manajemen_user";
					</script>
				<?php
			}
		}
	}
?>