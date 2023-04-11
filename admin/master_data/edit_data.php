<?php 
  if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "SELECT * FROM data_alat WHERE id = '$id' ");
    while ($data = mysqli_fetch_array($query)) {
      
    ?>
<div class="pagetitle">
	<h1>Master Data</h1>
	<nav>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="?page=manajemen_user">Master Data</a>
			</li>
			<li class="breadcrumb-item">Pages</li>
			<li class="breadcrumb-item active">Master Data</li>
		</ol>
	</nav>
</div>

<section class="section">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Master Data Alat</h5>

              <!-- Vertical Form -->
              <form class="row g-3" action="?page=aksi_edit_alat" method="POST">

                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Nama Alat</label>
                  <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                  <input type="text" class="form-control" value="<?php echo $data['nama_alat'] ?>" id="inputEmail4" name="nama_alat">
                </div>
                
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Keterangan Alat</label>
                  <textarea class="form-control" name="keterangan"><?php echo $data['keterangan']; ?></textarea>
                </div>
                <div class="text-center">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>
		</div>
	</div>
</section>

<?php
}
 }else{
    ?>
      <script type="text/javascript">
        alert('Anda Tidak Berhak Mengakses Halaman ini');
        window.location = "?page=data_alat";
      </script>
    <?php
  }
?>
