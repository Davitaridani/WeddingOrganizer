<section class="tableBelanja-sect-2">
	<div class="blocks-items">
		<div class="container">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<?php echo form_open('belanja/update'); ?>
							<table class="table table-striped" cellpadding="6" cellspacing="1" style="width:100%">

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
												'min' => '1',
												'max' => '1',
												'type' => 'number',
												'class' => 'form-control',


											));
											?>
										</td>
										<td><?php echo $items['name']; ?></td>
										<td style="text-align:right">Rp. <?php echo $this->cart->format_number($items['price']); ?></td>
										<td style="text-align:right">Rp. <?php echo $this->cart->format_number($items['subtotal']); ?></td>
										<td class="text-center">
											<a href="#" class="text-center btn btn-danger">
												<span class="iconify" data-icon="bxs:trash" data-width="23"></span>
											</a>
										</td>
									</tr>
									<?php $i++; ?>
								<?php endforeach; ?>

								<tr>
									<td colspan="2"> </td>
									<td class="right">
										<h5>Total Pembayaran: </h5>
									</td>
									<td class="right">
										<h5>Rp. <?php echo $this->cart->format_number($this->cart->total()); ?></h5>
									</td>
								</tr>

							</table>

							<div class="items-btn">

								<button class="btn btn-danger border-0">
									<span class="iconify" data-icon="ic:outline-update" data-width="21"></span>Update</button>


								<a href="#" class="btn btn-success border-0">
									<span class="iconify" data-icon="fluent:payment-24-regular" data-width="22"></span>Boking</a>
							</div>

							<?php echo form_close(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>