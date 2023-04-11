<?php 
  if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE id = '$id' ");
    while ($data = mysqli_fetch_array($query)) {
      
    ?>
      <div class="pagetitle">
        <h1>Manajemen User</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="?page=manajemen_user">Manajemen USer</a>
            </li>
            <li class="breadcrumb-item">Pages</li>
            <li class="breadcrumb-item active">Edit User</li>
          </ol>
        </nav>
      </div>

      <section class="section">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Edit Data User</h5>

                    <!-- Vertical Form -->
                    <form class="row g-3" action="?page=aksi_edit_user" method="POST">
                      <div class="col-12">
                        <label for="inputNanme4" class="form-label">Nama Lengkap</label>
                        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                        <input type="text" class="form-control" id="inputNanme4" value="<?php echo $data['nama'] ?>" name="nama_lengkap">
                        <input type="hidden" name="nama" value="<?php echo $data['nama'] ?>">
                      </div>
                      <div class="col-12">
                        <label for="inputEmail4" class="form-label">Username</label>
                        <input type="text" readonly="" class="form-control" id="inputEmail4" name="username" value="<?php echo $data['username'] ?>">
                      </div>
                      <div class="col-12">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="text" class="form-control" id="inputPassword4" name="password" >
                        <p style="font-style: italic; color: red;">*Abaikan Jika Tidak Ingin Merubah Password</p>
                      </div>
                      <div class="col-12">
                        <label for="inputPassword4" class="form-label">Level</label>
                        <select name="level" class="form-control">
                          <?php 
                            if($data['level'] == "admin"){
                              ?>
                                  <option value="admin" selected=""> admin</option>
                                  <option value="user"> user</option>
                              <?php
                            }else{
                              ?>
                                  <option value="user" selected=""> user</option>
                                  <option value="admin"> admin</option>
                              <?php
                            }
                          ?>
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
    <?php
    }


  }else{
    ?>
      <script type="text/javascript">
        alert('Anda Tidak Berhak Mengakses Halaman ini');
        window.location = "?page=manajemen_user";
      </script>
    <?php
  }
?>
