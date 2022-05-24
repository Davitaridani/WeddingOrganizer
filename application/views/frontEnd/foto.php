<!-- Pesansn Saya sect 1 -->
<section class="section-hero-image-banner hero-image-banner-paralax" data-parallax="scroll" data-z-index="1" data-image-src="<?= base_url() ?>assets/img/banner-contact.jpg">
	<div class=" container">
		<div class="inner text-content">
			<div class="blocks-items ">
				<div class="items text-center">
					<div class="text-title">
						<h3>Galeri </h3>

						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
								<li class="breadcrumb-item">Galeri Foto</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Galleri Sect 2 -->
<section class="galeri-sect-2">
	<div class="container">
		<div class="blocks-items">
			<div class="block-title">
				<div class="img-title">
					<img src="<?= base_url(); ?>assets/img/img-title.png" alt="" class="img img-fluid">
				</div>
				<div class="title">
					<h3>SWEET MOMENTS</h3>
				</div>
				<div class="title-line">
					<div class="title-rounded"></div>
				</div>
			</div>
			<div class="row">
				<?php foreach ($foto as $key => $value) { ?>
					<div class="col-md-3">
						<div class="pict">
							<img src="<?= base_url('assets/galeri_foto/' . $value->foto) ?>" alt="" class="img img-fluid">
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>