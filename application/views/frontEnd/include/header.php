<!DOCTYPE html>
<html lang="en">

<head>
	<title>Wedding Organizer | <?php echo $title; ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Unicat project">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<!-- Link scss  -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/main_custom.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">

	<!-- Owl Carousel include  -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.theme.default.min.css">

	<!-- Link CDN AOS  -->
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

	<!-- AOS Animsi  -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/aos.css">

	<!-- OWL Carousel  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">



	<!-- Lightbox css  -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/lightbox.min.css">

</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
		<div class="container">
			<div class="item-logo">
				<a class="navbar-brand" href="<?= base_url('/') ?>">
					<img src="<?= base_url() ?>assets/img/logo-DL.png" alt=""> <span></span></a>
			</div>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
				<ul class="navbar-nav ">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="<?= base_url(); ?>">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url(); ?>about">Tentang Kami</a>
					</li>


					<?php $kategori = $this->m_paket->get_all_data_kategori(); ?>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Paket
						</a>
						<ul class="dropdown-menu border-0" aria-labelledby="navbarScrollingDropdown">
							<?php foreach ($kategori as $key => $value) { ?>
								<li>
									<a class="dropdown-item" href="<?= base_url('paket/kategori/' . $value->id_kategori); ?>"><?= $value->nama_kategori ?></a>
								</li>
							<?php } ?>
						</ul>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Galeri
						</a>
						<ul class="dropdown-menu border-0" aria-labelledby="navbarScrollingDropdown">
							<li><a class="dropdown-item" href="<?= base_url(); ?>galeri/wedding">Wedding</a></li>
							<li><a class="dropdown-item" href="<?= base_url(); ?>galeri/prewedding">Prewedding</a></li>
							<li><a class="dropdown-item" href="#">Lamaran</a></li>
							<li><a class="dropdown-item" href="<?= base_url(); ?>galeri/dekorasi">Dekorasi</a></li>
							<li><a class="dropdown-item" href="<?= base_url(); ?>galeri/make_up">Make Up</a></li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url(); ?>contact">Contact Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Pricing</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>