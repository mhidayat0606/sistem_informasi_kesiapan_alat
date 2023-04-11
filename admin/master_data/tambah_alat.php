<div class="pagetitle">
	<h1>Tambah Data Master</h1>
	<nav>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="?page=manajemen_user">Tambah Data Alat</a>
			</li>
			<li class="breadcrumb-item">Pages</li>
			<li class="breadcrumb-item active">Tambah Data Alat</li>
		</ol>
	</nav>
</div>

<section class="section">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Data Alat</h5>

              <!-- Vertical Form -->
              <form class="row g-3" action="?page=aksi_tambah_data_alat" method="POST">
   
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Nama Alat</label>
                  <input type="text" class="form-control" id="inputEmail4" name="nama_alat">
                </div>
              
       
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Keterangan Alat</label>
                  <textarea class="form-control" name="keterangan_alat"></textarea>
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