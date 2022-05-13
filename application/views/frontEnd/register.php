<!-- Register sect 1 -->
<section class="register-sect-1">
	<div class="container">
		<div class="blocks-items">
			<div class="row">
				<div class="col-md-6">
					<div class="items-register">
						<div class="item-title">
							<div class="title-img">
								<img src="<?= base_url() ?>assets/img/logo-DL.png" alt="" class="img img-fluid">
							</div>
							<div class="title">
								<p>Silahkan Register</p>
							</div>
						</div>
						<div class="items-input">

							<form action="<?= base_url('customer/register') ?>" method="post">

								<div class="block-input">
									<label for="nama" class="form-label">Nama</label>
									<input type="text" class="form-control " id="nama" placeholder="Nama" name="nama_customer" value="<?= set_value('nama_customer'); ?>">
									<?= form_error('nama_customer', '<small class="text-danger">', '</small>') ?>
								</div>

								<div class="block-input">
									<label for="email" class="form-label">E-Mail</label>
									<input type="email" class="form-control " id="email" placeholder="Email" name="email" value="<?= set_value('email'); ?>">
									<?= form_error('email', '<small class="text-danger">', '</small>') ?>
								</div>

								<div class="block-input">
									<label for="telepon" class="form-label">Telepon</label>
									<input type="number" class="form-control " id="telepon" placeholder="Telepon" name="telepon" value="<?= set_value('telepon') ?>">
									<?= form_error('telepon', '<small class="text-danger">', '</small>') ?>
								</div>

								<div class="block-input">
									<label for="alamat" class="form-label">Alamat</label>
									<input type="text" class="form-control " id="alamat" placeholder="alamat" name="alamat" value="<?= set_value('alamat') ?>">
									<?= form_error('alamat', '<small class="text-danger">', '</small>') ?>
								</div>

								<div class="block-input">
									<label for="password" class="form-label">Password</label>
									<input type="password" class="form-control" id="password" name="password" placeholder="Password">
									<?= form_error('password', '<small class="text-danger">', '</small>') ?>
								</div>

								<div class="block-input">
									<label for="ulangi_password" class="form-label">Ulangi Password</label>
									<input type="password" class="form-control" name="ulangi_password" id="ulangi_password" placeholder="Ulangi Password">
								</div>

								<div class="item-register">
									<div class="btn-register">
										<button type="submit" class="btn-register">Daftar</button>
									</div>

									<div class="link-register">
										<p>Sudah Punya Akun? </p>
										<a href="<?= base_url('customer') ?>"> Masuk</a>
									</div>
								</div>

							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>