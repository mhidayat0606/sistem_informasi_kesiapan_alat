<div class="pagetitle">
	<h1>Manajemen User</h1>
	<nav>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="?page=manajemen_user">Manajemen USer</a>
			</li>
			<li class="breadcrumb-item">Pages</li>
			<li class="breadcrumb-item active">Tambah User</li>
		</ol>
	</nav>
</div>

<section class="section">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Data User</h5>

              <!-- Vertical Form -->
              <form class="row g-3" action="?page=aksi_tambah_user" method="POST">
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="inputNanme4" name="nama_lengkap">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Username</label>
                  <input type="text" class="form-control" id="inputEmail4" name="username">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Password</label>
                  <input type="text" class="form-control" id="inputPassword4" name="password">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Level</label>
                  <select name="level" class="form-control">
                  	<option selected="" disabled="">-- Pilih Level --</option>
                  	<option value="admin"> admin</option>
                  	<option value="user"> user</option>
                  </select>
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