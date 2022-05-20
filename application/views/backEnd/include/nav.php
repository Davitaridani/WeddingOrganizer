<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="<?= base_url('admin') ?>" class="brand-link">
		<img src="<?= base_url() ?>templates/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">Halaman Admin</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?= base_url() ?>templates/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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
							kategori
						</p>
					</a>
				</li>

				<li class="nav-item">
					<a href="<?= base_url('produk') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'produk') {
																								echo "active";
																							} ?>">
						<i class="nav-icon fas fa-th"></i>
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
					<a href="<?= base_url('admin/pesanan_masuk') ?>" class="nav-link <?php if ($this->uri->segment(2) == 'pesanan_masuk' and $this->uri->segment(1) == 'admin') {
																												echo "active";
																											} ?>">
						<i class="nav-icon fas fa-download"></i>
						<p>Pesanan Masuk</p>
					</a>
				</li>

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


				<li class="nav-item has-treeview">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
							<i class="right fas fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Active Page</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Inactive Page</p>
							</a>
						</li>
					</ul>
				</li>
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
						<i class="nav-icon fas fa-sign"></i>
						<p>Log Out</p>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
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