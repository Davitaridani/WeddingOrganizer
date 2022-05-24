<!-- Pesansn Saya sect 1 -->
<section class="section-hero-image-banner hero-image-banner-paralax" data-parallax="scroll" data-z-index="1" data-image-src="<?= base_url() ?>assets/img/img-banner-galeri.jpg">
	<div class=" container">
		<div class="inner text-content">
			<div class="blocks-items ">
				<div class="items text-center">
					<div class="text-title">
						<h3>Galeri Foto</h3>

						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
								<li class="breadcrumb-item">Foto</li>
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
	<div class="container-fluid">
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
			<div class="item-galeri-foto">
				<div class="row" data-masonry='{"percentPosition": true }'>
					<?php foreach ($foto as $key => $value) { ?>
						<div class="col-md-4">
							<div class="pict">
								<img src="<?= base_url('assets/galeri_foto/' . $value->foto) ?>" alt="" class="img img-fluid">
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Masonry -->
<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>