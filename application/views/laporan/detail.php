      <?php date_default_timezone_set('Asia/Jakarta'); ?>
      
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Detail Laporan Pengaduan</h1>

          <div class="row mb-3">
              <div class="col-lg-6">
                  <div class="card shadow">
                    <img src="<?= base_url('asset/upload/') . $pengaduan->foto; ?>">
                      <div class="card-body">
                        <p><?= $pengaduan->isi_laporan; ?></p>
                        <hr>
                        <i class="fa fa-user"> <?= $pengaduan->nama; ?></i><br>
                        <small>NIK : <?= $pengaduan->nik; ?></small><br>
                        <small>Status : <?php if($pengaduan->status == 1): ?>Selesai<?php else: ?>Proses<?php endif; ?></small><br>
                        <small class="text-muted"><?= date('D,d M Y H:i:s', $pengaduan->id_pengaduan); ?></small>
                        <hr>
                        <a href="<?= base_url('laporan'); ?>" class="btn btn-dark"><i class="fa fa-arrow-left"></i> Kembali</a>
                        <a href="<?= base_url('laporan/edit/') . md5($pengaduan->id_pengaduan); ?>" class="btn btn-info"><i class="fa fa-edit"></i> Edit Laporan</a>
                        <a href="<?= base_url('laporan/hapus/') . md5($pengaduan->id_pengaduan); ?>" class="btn btn-danger tombol-hapus"><i class="fa fa-trash"></i> Hapus</a>
                      </div>
                  </div>
              </div>

            <div class="col-lg-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h6 class="text-center">Tanggapan</h6>
                        <hr>

                        <?php if(empty($tanggapan)): ?>  
                            <div class="alert alert-info">Belum Ada Tanggapan</div>
                        <?php endif; ?>

                    <?php foreach($tanggapan as $t){ ?>
                        <div class="card-body bg-light mb-3">
                            <i class="fa fa-user"> <?= $t->nama; ?></i><br>
                            <small class="text-muted"><?= date('D,d M Y H:i:s', $t->id_tanggapan); ?></small><hr>
                            <p><?= $t->tanggapan; ?></p>
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </div>

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
