<div class="container-fluid">
	<div class="row">
		<div class="col-12 col-sm-12">
			<div class="card card-primary card-outline card-tabs">
				<div class="card-header p-0 pt-1 border-bottom-0">
					<ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">Pesanan Masuk</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Profile</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="custom-tabs-three-messages-tab" data-toggle="pill" href="#custom-tabs-three-messages" role="tab" aria-controls="custom-tabs-three-messages" aria-selected="false">Messages</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="custom-tabs-three-settings-tab" data-toggle="pill" href="#custom-tabs-three-settings" role="tab" aria-controls="custom-tabs-three-settings" aria-selected="false">Settings</a>
						</li>
					</ul>
				</div>
				<div class="card-body">
					<div class="tab-content" id="custom-tabs-three-tabContent">
						<div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
							<table class="table">
								<tr>
									<th>No Order</th>
									<th>Tgl Order</th>
									<th>Tgl Acara</th>
									<th>Total Bayar</th>
									<th class="text-center">Action</th>
								</tr>
								<?php foreach ($pesanan as $key => $value) { ?>
									<tr>
										<td><?= $value->no_order ?></td>
										<td><?= $value->tgl_order ?></td>
										<td><?= $value->tgl_acara ?></td>
										<td>
											<b> <span> Rp. <?= number_format($value->sub_total, 0) ?></span></b><br>
											<?php if ($value->status_bayar == 0) { ?>
												<span class="badge badge-danger">Belum Bayar</span>
											<?php } else { ?>
												<span class="badge bg-olive">Sudah Bayar</span>
												<br>
												<span class="badge bg-lightblue">Nunggu Verifikasi</span>
											<?php } ?>
										</td>
										<td class="text-center">
											<?php if ($value->status_bayar == 1) { ?>
												<button type="submit" class="btn bg-fuchsia btn-sm" data-toggle="modal" data-target="#cek-buktiBayar<?= $value->id_transaksi ?>">Bukti Bayar</button>
												<a class="btn bg-purple btn-sm text-center" href="<?= base_url('admin/proses/' . $value->id_transaksi) ?>" class="">Proses</a>
											<?php } ?>
										</td>
									</tr>
								<?php } ?>

							</table>
						</div>
						<div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
							Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
						</div>
						<div class="tab-pane fade" id="custom-tabs-three-messages" role="tabpanel" aria-labelledby="custom-tabs-three-messages-tab">
							Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.
						</div>
						<div class="tab-pane fade" id="custom-tabs-three-settings" role="tabpanel" aria-labelledby="custom-tabs-three-settings-tab">
							Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
						</div>
					</div>
				</div>
				<!-- /.card -->
			</div>
		</div>
	</div>
</div>


<!-- Modal Cek Bukti Pembayarn -->
<?php foreach ($pesanan as $key => $value) { ?>
	<div class="modal fade" id="cek-buktiBayar<?= $value->id_transaksi ?>">
		<div class="modal-dialog modal-md">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">No Order : <?= $value->no_order ?></h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<table class="table">
						<tr>
							<th>Nama Bank </th>
							<th>:</th>
							<td><?= $value->nama_bank ?></td>
						</tr>

						<tr>
							<th>No Rekening </th>
							<th>:</th>
							<td><?= $value->no_rek ?></td>
						</tr>

						<tr>
							<th>Atas Nama</th>
							<th>:</th>
							<td><?= $value->atas_nama ?></td>
						</tr>

						<tr>
							<th>Total Bayar</th>
							<th>:</th>
							<td> <strong> Rp. <?= number_format($value->sub_total, 0) ?></strong></td>
						</tr>
					</table>
					<img src="<?= base_url('assets/bukti_bayar/' . $value->bukti_bayar) ?>" alt="" class="img card-img" height="500px">
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
<?php } ?>