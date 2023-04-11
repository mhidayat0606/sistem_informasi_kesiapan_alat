<?php 
	if (isset($_POST['submit'])) {
		$id = $_POST['id'];
		$nama = $_POST['nama_lengkap'];
		$namaa = $_POST['nama'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$level = $_POST['level'];


		if ($password == "") {
			$query = mysqli_query($koneksi, "UPDATE user SET nama = '$nama', username = '$username', level = '$level' WHERE id = '$id' ");
			$query1 = mysqli_query($koneksi, "UPDATE alat SET nama_user = '$nama' WHERE nama_user = '$namaa' ");

			if ($query) {
				?>
					<script type="text/javascript">
						alert('Data Berhasil Di ubah');
						window.location = "?page=manajemen_user";
					</script>
				<?php
			}
		}else{
			$pass = md5($password);
			$query = mysqli_query($koneksi, "UPDATE user SET nama = '$nama', username = '$username', password = '$pass', level = '$level' WHERE id = '$id' ");
			$query1 = mysqli_query($koneksi, "UPDATE alat SET nama_user = '$nama' WHERE nama_user = '$namaa' ");


			if ($query) {
				?>
					<script type="text/javascript">
						alert('Data Berhasil Di ubah');
						window.location = "?page=manajemen_user";
					</script>
				<?php
			}
		}
	}
?>