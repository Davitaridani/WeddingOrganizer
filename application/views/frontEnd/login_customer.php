<!-- Login sect 1 -->
<section class="login-sect-1">
	<div class="container">
		<div class="blocks-items">
			<?php form_open() ?>
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
							<!-- <div class="text text-center">
								<p>Silahkan Login, Sebelum Melakukan Transaksi</p>
							</div> -->
						</div>

						<div class="items-input">
							<div class="block-input">
								<label for="username" class="form-label">Username</label>
								<input type="text" class="form-control " id="username" placeholder="Username">
							</div>

							<div class="block-input">
								<label for="password" class="form-label">Password</label>
								<input type="password" class="form-control " id="password" placeholder="Password">
							</div>

							<div class="item-login">

								<div class="btn-login">
									<button type="submit" class="btn-login">Masuk</button>
								</div>
								<div class="link-register">
									<p>Belum Punya Akun? </p>
									<a href="<?php base_url() ?>register"> Daftar</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php form_close() ?>
		</div>
	</div>
</section>