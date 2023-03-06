<!DOCTYPE html>
<html>

<head>
	<title>Aplikasi Pengaduan Masyarakat | Login Page</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset/bootstrap/'); ?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset/bootstrap/'); ?>css/style.css">
	<link rel="stylesheet" href="<?= base_url('asset/sbadmin/vendor/fontawesome-free/css/all.min.css'); ?>">
	<style>
		form {
			text-align: center;
		}
		body{
			background-color:success;
		}
	</style>
</head>

<body>

	<div class="container">
		
	<div class="row">
			
		<div class="card-body">
			<div  style="margin-left:290px;  background: linear-gradient(to bottom, #006666 11%, #99ccff 100%);" class="col-lg-6 bg-secondary" id="card">
			<h2 class="text-center">Aplikasi Pengaduan Masyarakat</h2>
					<h4 class="text-center">Login Page</h4>		
						<?php if ($this->session->flashdata('true')): ?>
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								<?= $this->session->flashdata('true'); ?>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						<?php elseif ($this->session->flashdata('false')): ?>
							<div class="alert alert-warning alert-dismissible fade show" role="alert">
								<?= $this->session->flashdata('false'); ?>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						<?php endif; ?>

						<form action="<?= base_url('auth'); ?>" method="post">
							<div style="padding-left:50px; padding-right:50px; border-radius:500px;" class="form-group">
								<?= form_error('username', '<small class="text-danger">', '</small>'); ?>
								<input type="text" name="username" class="form-control" placeholder="Username" id="form"
									autocomplete="off">
							</div>

							<div style="padding-left:50px; padding-right:50px; border-radius:500px;" class="form-group">
								<?= form_error('password', '<small class="text-danger">', '</small>'); ?>
								<input type="password" name="password" class="form-control" placeholder="Password"
									id="form">
							</div>
							<button style="padding-left:150px; padding-right:150px; border-radius:500px;" type="submit"
								class="btn btn-info">login</button>

							<p class="text-center">Belum punya akun, <a
									href="<?= base_url('auth/register'); ?>">Daftar</a> di sini</p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


	<script src="<?= base_url('asset/bootstrap/'); ?>js/bootstrap.min.js"></script>
	<script src="<?= base_url('asset/bootstrap/'); ?>js/jquery.js"></script>
</body>

</html>