<!-- Detail Produk sect 1 -->
<section class="section-hero-image-banner hero-image-banner-paralax" data-parallax="scroll" data-z-index="1" data-image-src="<?= base_url() ?>assets/img/banner-contact.jpg">
	<div class="container-fluid p-0 ">
		<div class="inner text-content">
			<div class="blocks-items">
				<div class="text-title text-center">
					<h3>Detail Porduk</h3>
				</div>
			</div>
		</div>
</section>

<!-- Detail produk sect 2 -->
<section class="detailProduk-sect-2">
	<div class="container">
		<div class="inner text-content">
			<div class="blocks-items">
				<!-- <h3><?= $produk->nama_kategori ?></h3> -->
				<div class="row">
					<div class="col-md-7 p-0">
						<div class="owl-carousel owl-theme owl-lazy mx-auto" id="owl-img-detailProduk">
							<?php foreach ($foto as $key => $value) { ?>
								<div class="item">
									<div class="logo">
										<img src="<?= base_url('assets/foto_produk/' . $value->foto) ?>" alt="">
									</div>
								</div>
							<?php } ?>
						</div>
					</div>

					<div class="col-md-5">
						<div class="item-text">
							<div class="title">
								<h3><?= $produk->nama_produk ?></h3>
							</div>
							<div class="title-kat">
								<h5>Nama kategori : <?= $produk->nama_kategori ?></h5>
								<div class="desc">
									<p><?= $produk->deskripsi ?></p>
								</div>
								<div class="price">
									<p>Rp. <?= number_format($produk->harga, 0) ?></p>
								</div>

								<?php
								echo form_open('belanja/add');
								echo form_hidden('id', $produk->id_produk);
								echo form_hidden('price', $produk->harga);
								echo form_hidden('name', $produk->nama_produk);
								echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
								?>
								<div class="row">
									<div class="col-md-3">
										<input type="number" name="qty" min="1" max="1" value="1" class="form-control">
									</div>
									<div class="col-md-5">
										<div class="icon-cart">
											<button type="submit" id="btnSweetAlert" class="nav-link p-0">
												<span class="iconify " data-width="30" data-icon="fa:cart-plus"></span>
												Add Cart
											</button>
										</div>
									</div>
								</div>
								<?php form_close(); ?>

							</div>
						</div>
					</div>
					<div class="row">
						<div class="title text-center">
							<h3>Detail Produk</h3>
							<hr>
						</div>
						<div class="col-md-8 offset-lg-3">
							<div class="desc">
								<p><?= $produk->spesifikasi_produk ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- Script Sweetaler -->
<script>
	const btnSweetAlert = document.getElementById('btnSweetAlert');
	btnSweetAlert.addEventListener('click', function() {
		Swal.fire({
			title: '<?= $produk->nama_produk ?>',
			imageUrl: '<?= base_url('assets/foto_produk/' . $value->foto) ?>',
			imageWidth: 450,
			timer: 6000,
			icon: 'success',
			text: 'Berhasil Di Masukan Ke Keranjang',
		})
	});
</script>