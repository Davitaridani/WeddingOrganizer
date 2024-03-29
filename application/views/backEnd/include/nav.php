<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="<?= base_url('admin') ?>" class="brand-link">
		<img src="<?= base_url() ?>templates/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">Halaman Admin</span>
	</a>
	<?php
	$n_email = $_SESSION['email'];
	$data_cs = $this->db->query('select * from tb_user where email = "' . $n_email . '"')->row();
	?>
	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?= base_url('assets/gambar/logo.jpg') ?>" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block"><?= $this->session->userdata('nama'); ?></a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

				<li class="nav-item">
					<a href="<?= base_url('admin') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'admin' and $this->uri->segment(2) == "") {
																							echo "active";
																						} ?>">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
						</p>
					</a>
				</li>

				<li class="nav-item">
					<a href="<?= base_url('kategori') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'kategori') {
																								echo "active";
																							} ?>">
						<i class="nav-icon fas fa-list"></i>
						<p>
							Kategori Produk
						</p>
					</a>
				</li>

				<li class="nav-item">
					<a href="<?= base_url('produk') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'produk') {
																								echo "active";
																							} ?>">
						<i class="nav-icon fas fa-toolbox"></i>
						<!-- <i class="fa fa-toolbox"></i> -->
						<p>
							Produk
						</p>
					</a>
				</li>

				<li class="nav-item">
					<a href="<?= base_url('FotoProduk') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'FotoProduk') {
																									echo "active";
																								} ?>">
						<i class="nav-icon fas fa-image"></i>
						<p>
							Foto Produk
						</p>
					</a>
				</li>

				<li class="nav-item">
					<a href="<?= base_url('kategori_galeri') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'kategori_galeri') {
																											echo "active";
																										} ?>">
						<i class="nav-icon fas fa-list-alt"></i>
						<p>
							Kategori Galeri
						</p>
					</a>
				</li>

				<li class="nav-item">
					<a href="<?= base_url('galeri') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'galeri') {
																								echo "active";
																							} ?>">
						<i class="nav-icon fas fa-images"></i>
						<p>
							Galeri Foto
						</p>
					</a>
				</li>

				<li class="nav-item">
					<a href="<?= base_url('admin/pesanan_masuk') ?>" class="nav-link <?php if ($this->uri->segment(2) == 'pesanan_masuk' and $this->uri->segment(1) == 'admin') {
																												echo "active";
																											} ?>">
						<i class="nav-icon fas fa-download"></i>
						<p>Pesanan Masuk</p>
					</a>
				</li>

				<!-- <li class="nav-item">
					<a href="<?= base_url('konsultasi') ?>" class="nav-link <?php if ($this->uri->segment(2) == 'konsultasi' and $this->uri->segment(1) == 'admin') {
																									echo "active";
																								} ?>">
						<i class="nav-icon fas fa-comment-dots"></i>
						<p>Pesan Customer</p>
					</a>
				</li> -->


				<li class="nav-item">
					<a href="<?= base_url('jadwal') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'jadwal') {
																								echo "active";
																							} ?>">
						<i class="nav-icon fas fa-calendar-alt"></i>
						<p>Jadwal Job</p>
					</a>
				</li>
				<?php if ($data_cs->level_user == "1") : ?>
					<li class="nav-item">
						<a href="<?= base_url('laporan') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'laporan') {
																									echo "active";
																								} ?>">
							<i class="nav-icon fas fa-file-pdf"></i>
							<p>
								Laporan
							</p>
						</a>
					</li>
				<?php endif; ?>

				<li class="nav-item">
					<a href="<?= base_url('user') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'user') {
																							echo "active";
																						} ?>">
						<i class="nav-icon fas fa-users"></i>
						<p>
							User
						</p>
					</a>
				</li>

				<li class="nav-item">
					<a href="<?= base_url('auth/logout_user') ?>" class="nav-link">
						<i class="nav-icon fas fa-sign-out-alt"></i>
						<p>Log Out</p>
					</a>
				</li>
			</ul>
		</nav>
	</div>
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark"><?= $title ?></h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active"><?= $title ?></li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<!-- /.content-header -->
	<div class="content">
		<!-- <div class="container-fluid"> -->
		<div class="row">