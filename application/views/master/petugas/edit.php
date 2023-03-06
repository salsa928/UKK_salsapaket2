        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h3>Edit Data Petugas</h3>

          <div class="row">
              <div class="col-lg-12">
                  <div class="card shadow">
                      <div class="card-body">
                      <form action="<?= base_url('master/edit_petugas/') . $petugas['id_admin']; ?>" method="post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" class="form-control" value="<?= $petugas['nama']; ?>">
                                        <?= form_error('nama','<small class="text-danger">','</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label>No Telp</label>
                                        <input type="text" name="telp" class="form-control" value="<?= $petugas['no_telp']; ?>">
                                        <?= form_error('telp','<small class="text-danger">','</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="username" class="form-control" value="<?= $petugas['username']; ?>">
                                        <?= form_error('username','<small class="text-danger">','</small>'); ?>
                                    </div>
                                    <input type="hidden" name="level" value="<?= $petugas['level']; ?>">
                                </div>
                            </div>
                            <a href="<?= base_url('master/petugas'); ?>" class="btn btn-success"><i class="fa fa-arrow-left"></i> Kembali</a>
                            <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Simpan</button>
                        </form>
                      </div>
                  </div>
              </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
