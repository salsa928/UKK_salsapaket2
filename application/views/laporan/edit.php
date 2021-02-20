        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
         <h3>Edit Laporan Pengaduan</h3>
         <div class="row">
             <div class="col-lg-12">
                 <div class="card shadow">
                     <div class="card-body">
                     <?= form_open_multipart('laporan/edit/' . md5($laporan->id_pengaduan)); ?>
                        <div class="form-group row">
                            <label class="col-sm-2">Isi laporan</label>
                            <div class="col-sm-10">
                                <textarea name="isi" rows="8" class="form-control"><?= $laporan->isi_laporan; ?></textarea>
                                <?= form_error('isi','<small class="text-danger">','</small>'); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2">Tambahkan Foto <small class="text-muted">(Max size 500 kb)</small></label>
                            
                            <div class="col-sm-3">
                                <img src="<?= base_url('asset/upload/') . $laporan->foto; ?>" class="img-thumbnail">
                            </div>

                            <div class="col-sm-7">
                                <input type="file" name="foto" class="form-control">
                            </div>
                        </div>

                        <a href="<?= base_url('laporan'); ?>" class="btn btn-dark"><i class="fa fa-arrow-left"></i> Kembali</a>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</button>
                    </form>
                     </div>
                 </div>
             </div>
         </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
