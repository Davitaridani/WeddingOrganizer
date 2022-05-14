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
				<div class="row">
					<div class="col-md-7">
						<div class="col-md-12">
							<div class="title">
								<h3>Detial Penagihan</h3>
							</div>
							<div class="items-form">
								<form action="" method="post">
									<div class="item-input">
										<label for="nama">Nama *</label>
										<input type="text" id="nama" class="form-control" name="" placeholder="Nama">
									</div>

									<div class="item-input">
										<label for="email">Email *</label>
										<input type="text" id="email" name="" class="form-control" placeholder="E-Mail">
									</div>

									<div class="item-input">
										<label for="tgl_acara">Tgl Acara *</label>
										<input type="date" id="tgl_acara" class="form-control" name="" placeholder="Acara Pernikahan Anda">
									</div>

									<div class="item-input">
										<label for="telepon">Telepon *</label>
										<input type="number" id="telepon" class="form-control" name="" placeholder="Telepon">
									</div>

									<div class="row">
										<div class="col-md-6">
											<div class="item-input">
												<label for="kota">Kota *</label>
												<input type="text" id="kota" class="form-control" name="" placeholder="Kota">
											</div>
										</div>

										<div class="col-md-6">
											<div class="item-input">
												<label for="kecamatan">Kecamatan *</label>
												<input type="text" id="kecamatan" class="form-control" name="" placeholder="Kecamatan">
											</div>
										</div>
									</div>





									<div class="item-input">
										<label for="alamat">Alamat Lengkap *</label>
										<input type="text" class="form-control" id="alamat" rows="2" placeholder="Alamat Rumah ">
									</div>


									<div class="item-infoTambahan">
										<div class="title">
											<h3>Informasi Tambahan</h3>
										</div>
										<div class="item-input">
											<label for="catatan"> Catatan Pesanan (Optional)</label>
											<textarea class="form-control" rows="4" id="catatan" name="catatan" placeholder="Catatan tentang pesanan anda"></textarea>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>


					<div class="col-md-5">
						<div class="block-checkOut">
							<div class="title-pesanan">
								<h3>Pesanan Anda</h3>
							</div>
							<div class="checkOut-review-order">
								<form action="" method="post">
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
													<td class="nama-produk"><?php echo $items['name']; ?> <span class="iconify" data-icon="pepicons:times" data-width="20"></span> <?= $items['qty'] ?> </td>
													<td class="total-produk">Rp. <?= $this->cart->format_number($items['subtotal']); ?></td>

												</tr>
											<?php } ?>

										</tbody>
										<tfoot>
											<tr class="cart-subTotal">
												<th>Subtotal</th>
												<td>
													<strong>
														<span>Rp. <?= number_format($this->cart->total(), 0); ?></span>
													</strong>
												</td>
											</tr>
											<tr class="order-total">
												<th>Total Pembayaran</th>
												<td>
													<strong>
														<span>Rp. <?= number_format($this->cart->total(), 0); ?></span>
													</strong>
												</td>
											</tr>
										</tfoot>

									</table>
									<div class="btn-border">
										<button type="submit">Proses Checkout</button>
									</div>
								</form>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>