<!-- Paket Dekorasi sect 1 -->
<section class="section-hero-image-banner hero-image-banner-paralax" data-parallax="scroll" data-z-index="1" data-image-src="<?= base_url() ?>assets/img/banner-contact.jpg">
	<div class=" container">
		<div class="inner text-content">
			<div class="blocks-items ">
				<div class="items text-center">
					<div class="text-title">
						<h3>Dekorasi</h3>

						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
								<li class="breadcrumb-item">Paket Produk</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--  Kategori Produk Sect 2 -->
<section class="kategoriProduk-sect-2">
	<div class="container">
		<div class="blocks-items">
			<div class="item-title">
				<div class="title">
					<h3>Produk Spesial Untuk anda</h3>
				</div>
				<div class="title-img">
					<img src="<?= base_url() ?>assets/img/section-title.png" class=" img img-fluid" alt="">
				</div>
			</div>
			<div class="items-produk">
				<div class="row">
					<?php foreach ($produk as $key => $value) { ?>
						<div class="col-md-4">
							<?php
							echo form_open('belanja/add');
							echo form_hidden('id', $value->id_produk);
							echo form_hidden('qty', 1);
							echo form_hidden('price', $value->harga);
							echo form_hidden('name', $value->nama_produk);
							echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
							?>
							<div class="items-card border-0">
								<img class="card-img" src="<?= base_url('assets/gambar/' . $value->gambar) ?>" alt="">
								<div class="body-card">
									<div class="title">
										<h3><?= $value->nama_produk ?></h3>
									</div>
									<div class="desc">
										<p><?= $value->deskripsi ?></p>
									</div>
									<div class="price">
										<p>
											<b> Rp. <?= number_format($value->harga, 0) ?></b>
										</p>
									</div>
									<div class="item-btn">
										<div class="detail">
											<a href="<?= base_url('paket/detail_produk/' . $value->id_produk) ?>" class="">
												Detail
											</a>
										</div>
										<div class="add-cart">
											<button type="submit" id="btnSweetAlert" class="border-0">
												Add Cart
											</button>
										</div>
									</div>
								</div>
							</div>

							<?php form_close() ?>
						</div>
					<?php } ?>
				</div>
			</div>

		</div>
	</div>
</section>


<script>
	const btnSweetAlert = document.getElementById('btnSweetAlert');
	btnSweetAlert.addEventListener('click', function() {
		Swal.fire({
			title: '<?= $value->nama_produk ?>',
			imageUrl: '<?= base_url('assets/gambar/' . $value->gambar) ?>',
			imageWidth: 450,
			timer: 4000,
			icon: 'success',
			text: 'Berhasil Di Masukan Ke Keranjang',
		})
	});
</script>