<!-- Paket Dekorasi sect 1 -->
<section class="section-hero-image-banner hero-image-banner-paralax" data-parallax="scroll" data-z-index="1" data-image-src="<?= base_url() ?>assets/img/banner-contact.jpg">
	<div class=" container">
		<div class="inner text-content">
			<div class="blocks-items ">
				<div class="items text-center">
					<div class="text-title">
						<h3>Dekorasi</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- APket Dekorasi -->
<section class="paket-dekorsi-sect-2">
	<div class="container">
		<div class="blocks-items">
			<div class="title text-center">
				<h3></h3>
			</div>
			<div class="row">



				<?php foreach ($produk as $key => $value) { ?>
					<div class="col-md-4">
						<div class="card border-0">
							<img class="card-img" src="<?= base_url('assets/gambar/' . $value->gambar) ?>" . alt="">
							<div class="card-body">
								<div class="title">
									<h4><?= $value->nama_produk ?></h4>
								</div>
								<div class="desc">
									<p><?= $value->deskripsi ?></p>
								</div>
								<div class="price">
									<p> <b> Rp. <?= number_format($value->harga, 0) ?></b></p>
								</div>

								<a href="<?= base_url('paket/detail_produk/' . $value->id_produk) ?>" class="btn btn-danger">Lihat Detail</a>

								<button class="btn btn-success swalDefaultSuccess" id="sweetAlert">Tambah Keranjang</button>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>




<!-- SweetAlert2 Js dari templates -->
<!-- <script src="<?= base_url() ?>templates/plugins/sweetalert2/sweetalert2.min.js"></script> -->

<script type="text/javascript">
	$(function() {
		const Toast = Swal.mixin({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 3000
		});

		$('.swalDefaultSuccess').click(function() {
			Toast.fire({
				icon: 'success',
				title: 'Produk Berhasil Di Tambahkan Ke Keranjang.'
			})
		});
	});
</script>