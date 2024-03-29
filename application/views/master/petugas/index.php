        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h3>Management Data Petugas</h3>

            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-info">
                        <strong>Note : </strong> Jika anda menghapus data petugas maka semua data tanggapan dengan ID yang sama akan juga terhapus
                    </div>
                    <div class="card shadow">
                        <div class="card-body">
                            <a href="<?= base_url('master/add_petugas'); ?>" class="btn btn-info mb-3"><i class="fa fa-plus"></i> Tambah Data Petugas</a>
                            <table class="table table-striped table-bordered" id="myTable">
                                <thead class="table-info">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>No Telepon</th>
                                        <th>Username</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($petugas as $p) { ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $p->nama; ?></td>
                                            <td><?= $p->no_telp; ?></td>
                                            <td><?= $p->username; ?></td>
                                            <td>
                                                <a href="<?= base_url('master/del_petugas/') . $p->id_admin; ?>" class="btn btn-danger btn-sm tombol-hapus"><i class="fa fa-trash"></i></a>
                                                <a href="<?= base_url('master/edit_petugas/') . $p->id_admin; ?>" class="btn btn-warning btn-sm tombol-edit"><i class="fa fa-edit"></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->


        <!-- Modal -->
        <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Level Petugas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url('master/editLevelPetugas'); ?>" method="post">
                        <div class="modal-body">
                            <input type="hidden" name="id" id="id">
                            <div class="form-group row">
                                <label class="col-sm-3">Nama : </label>
                                <div class="col-sm-9">
                                    <p id="nama">Nama</p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3">Username : </label>
                                <div class="col-sm-9">
                                    <p id="username">Username</p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3">Level : </label>
                                <div class="col-sm-9">
                                    <select name="level" id="level" class="form-control">
                                        <option value="">
                                            <-Pilih salah satu->
                                        </option>
                                        <option value="1">Admin</option>
                                        <option value="2">Petugas</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-info">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>