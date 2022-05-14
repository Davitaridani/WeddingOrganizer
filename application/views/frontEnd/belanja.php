<!-- banner Check Out -->
<section class="checkOut-sect-1 hero-image-banner-paralax" data-parallax="scroll" data-z-index="1" data-image-src="assets/img/tim.jpg">
	<div class="container">
		<div class="blocks-items ">
			<div class="items text-center">
				<div class="text-title">
					<h3>Check Out</h3>
				</div>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
						<li class="breadcrumb-item">Keranjang Belanja</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- end hero image banner -->


<!-- Belanja/Checkout Sect 2 -->
<section class="tableBelanja-sect-2">
	<div class="blocks-items">
		<div class="container">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<?php echo form_open('belanja/update'); ?>
							<table class="table-belanja table " cellpadding="6" cellspacing="1" style="width:100%">
								<tr>
									<th width="100px">QTY</th>
									<th>Nama Produk</th>
									<th style="text-align:right">Harga Produk</th>
									<th style="text-align:right">Sub-Total</th>
									<th class="text-center">Action</th>
								</tr>

								<?php $i = 1; ?>

								<?php foreach ($this->cart->contents() as $items) : ?>
									<tr>
										<td>
											<?php echo form_input(array(
												'name' => $i . '[qty]',
												'value' => $items['qty'],
												'maxlength' => '3',
												'size' => '5',
												'min' => '0',
												'max' => '2',
												'type' => 'number',
												'class' => 'form-control',
											));
											?>
										</td>
										<td><?php echo $items['name']; ?></td>
										<td style="text-align:right" class="item-price">Rp. <?php echo number_format($items['price'], 0); ?></td>
										<td style="text-align:right" class="">Rp. <?php echo number_format($items['subtotal'], 0); ?></td>
										<td class="text-center btn-hapus">
											<a href="<?= base_url('belanja/delete/' . $items['rowid']) ?>" class="text-center ">
												<span class="iconify" data-icon="ic:round-clear"></span>
											</a>
										</td>
									</tr>
									<?php $i++; ?>
								<?php endforeach; ?>

								<!-- <tr class="text-total-bayar text-right">
									<td colspan="3"> </td>
									<td class="right">
										<h5>Total Pembayaran: </h5>
									</td>

									<td class="right">
										<h5>Rp. <?php echo number_format($this->cart->total(), 0); ?></h5>
									</td>
								</tr> -->

							</table>

							<div class="items-btn">

								<button type="submit" class="btn-update">Update</button>
								<!-- <a href="#" class="btn-boking">Checkout</a> -->
								<a href="<?= base_url('belanja/clear') ?>" class="btn-clear border-0">Clear Cart
								</a>
							</div>


							<?php echo form_close(); ?>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="card-total">
						<div class="card-body">
							<div class="title">
								<h3>Total Keranjang</h3>
							</div>
							<table class="table">
								<tbody>
									<tr class="cart-subTotal">
										<th class="text-subTotal">Sub Total</th>
										<td class="sub-total">
											<span>Rp. <?php echo number_format($items['subtotal'], 0) ?></span>
										</td>
									</tr>

									<tr class="cart-total">
										<th class="text-total">Total</th>
										<td class="total">
											<span>Rp. <?php echo number_format($this->cart->total(), 0); ?></span>
										</td>
									</tr>
								</tbody>
							</table>
							<div class="btn-checkOut">
								<a href="<?= base_url('belanja/checkout') ?>">Checkout</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>