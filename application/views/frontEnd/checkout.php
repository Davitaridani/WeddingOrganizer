<!-- Contact Sect 1 -->
<section class="section-hero-image-banner hero-image-banner-paralax" data-parallax="scroll" data-z-index="1" data-image-src="<?= base_url() ?>assets/img/bg-checkOut.jpg">
	<div class="container-fluid p-0 ">
		<div class="blocks-items">
			<div class="text-title text-center">
				<h3>Check Out</h3>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
						<li class="breadcrumb-item">Check Out</li>
					</ol>
				</nav>
			</div>
		</div>
</section>

<!-- Check Out Sect 2 -->
<section class="checkOut-sect-2">
	<div class="container">
		<div class="blocks-items">
			<div class="table-checkOut">
				<?php
				echo form_open('belanja/checkout');
				$no_order = date('Ymd') . strtoupper(random_string('alnum', 8));
				?>
				<div class="row">
					<div class="col-md-7">
						<div class="col-md-12">
							<div class="title">
								<h3>Detial Penagihan</h3>
							</div>
							<div class="items-form">
								<div class="item-input">
									<label for="nama">Nama <span class="text-danger">*</span></label>
									<input type="text" id="nama" class="form-control" name="nama" placeholder="Nama" required>
								</div>
								<div class="item-input">
									<label for="email">Email <span class="text-danger">*</span></label>
									<input type="text" id="email" name="email" class="form-control" placeholder="E-Mail" required>
								</div>
								<div class="item-input">
									<label for="tgl_acara">Tgl Acara <span class="text-danger">*</span></label>
									<input type="text" id="tgl_acara" class="form-control" name="tgl_acara" placeholder="Acara Pernikahan Anda">
								</div>
								<div class="item-input">
									<label for="telepon">Telepon <span class="text-danger">*</span></label>
									<input type="number" id="telepon" class="form-control" name="telepon" placeholder="Telepon">
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="item-input">
											<label for="kota">Kota <span class="text-danger">*</span></label>
											<input type="text" id="kota" class="form-control" name="kota" placeholder="Kota">
										</div>
									</div>
									<div class="col-md-6">
										<div class="item-input">
											<label for="kecamatan">Kecamatan <span class="text-danger">*</span></label>
											<input type="text" id="kecamatan" class="form-control" name="kecamatan" placeholder="Kecamatan">
										</div>
									</div>
								</div>
								<div class="item-input">
									<label for="alamat">Alamat Lengkap <span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat Rumah ">
								</div>
								<div class="item-infoTambahan">
									<div class="title">
										<h3>Informasi Tambahan</h3>
									</div>
									<div class="item-input">
										<label for="catatan"> Catatan Pesanan (Optional)</label>
										<textarea class="form-control" rows="4" id="catatan" name="catatan_pesanan" placeholder="Catatan tentang pesanan anda"></textarea>
									</div>
								</div>
							</div>
							<!-- Simpan Data Transaksi -->
							<input name="no_order" value="<?= $no_order ?>" hidden>
							<input name="sub_total" value="<?= $this->cart->total() ?>" hidden>
							<!-- <input name="total_bayar"> -->

							<!-- Simpan Data Detail Transaksi -->
							<?php
							$i = 1;
							foreach ($this->cart->contents() as $items) {
								echo form_hidden('qty' . $i++, $items['qty']);
							} ?>
						</div>
					</div>

					<div class="col-md-5">
						<div class="block-checkOut">
							<div class="title-pesanan">
								<h3>Pesanan Anda</h3>
							</div>
							<div class="checkOut-review-order">
								<table class="table">
									<thead>
										<tr>
											<th class="nama-produk">Produk</th>
											<th class="total-produk">Subtotal</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$i = 1;
										$keranjang = $this->cart->contents();
										$jml_item = 0;
										foreach ($this->cart->contents() as $items) {
											$jml_item = $jml_item + $items['qty'];
										?>
											<tr class="cart-item">
												<td class="nama-produk">
													<?php echo $items['name']; ?> <span class="iconify" data-icon="pepicons:times" data-width="20"></span> <?= $items['qty'] ?>
												</td>
												<td class="total-produk">Rp. <?= $this->cart->format_number($items['subtotal']); ?></td>
											</tr>
										<?php } ?>
									</tbody>
									<tfoot>
										<tr class="cart-subTotal">
											<th>Subtotal</th>
											<td>
												<strong><span>Rp. <?= number_format($this->cart->total(), 0); ?></span></strong>
											</td>
										</tr>
										<tr class="order-total">
											<th>Total Pembayaran</th>
											<td>
												<strong><span>Rp. <?= number_format($this->cart->total(), 0); ?></span></strong>
											</td>
										</tr>
									</tfoot>
								</table>
								<div class="items-btn">
									<div class="btn-back">
										<a href="<?= base_url('belanja') ?>"><span class="iconify" data-icon="ion:play-back"></span>Kembali</a>
									</div>
									<div class="btn-order">
										<button type="submit">Proses Checkout</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php echo form_close() ?>
			</div>
		</div>
	</div>
</section>