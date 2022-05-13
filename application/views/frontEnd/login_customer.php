<!-- Login sect 1 -->
<section class="login-sect-1">
	<div class="container">
		<div class="blocks-items">
			<div class="row">
				<div class="col-md-6">
					<div class="items-login">
						<div class="item-title">
							<div class="title-img">
								<img src="<?= base_url() ?>assets/img/logo-DL.png" alt="" class="img img-fluid">
							</div>
							<div class="title">
								<p>Silahkan Login</p>
							</div>
						</div>

						<!-- Notifikasi Jika User Cutomer  Berhasil registrasi -->
						<?= $this->session->flashdata('pesan'); ?>

						<?php echo form_open('customer') ?>
						<div class="items-input">
							<div class="block-input">
								<label for="email" class="form-label">Email</label>
								<input type="email" class="form-control " id="email" name="email" placeholder="Email" value="<?= set_value('email') ?>">
								<?= form_error('email', '<small class="text-danger">', '</small>') ?>
							</div>

							<div class="block-input">
								<label for="password" class="form-label">Password</label>
								<input type="password" class="form-control " id="password" name="password" placeholder="Password">
								<?= form_error('password', '<small class="text-danger">', '</small>') ?>
							</div>

							<div class="item-login">

								<div class="btn-login">
									<button type="submit" class="btn-login">Masuk</button>
								</div>
								<div class="link-register">
									<p>Belum Punya Akun? </p>
									<a href="<?= base_url('customer/register') ?>"> Daftar</a>
								</div>
							</div>
						</div>
						<?php form_close() ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>