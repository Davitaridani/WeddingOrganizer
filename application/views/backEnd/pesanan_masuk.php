<div class="container-fluid">
	<div class="row">
		<div class="col-12 col-sm-12">

			<?php
			if ($this->session->flashdata('pesan')) {
				echo ' <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Succes!</h5>';
				echo $this->session->flashdata('pesan');
				echo '</div>';
			}
			?>

			<?php

			$no_pensanan = 'DL_' . date('md') . strtoupper(random_string('alnum', 12));

			?>

			<div class="card card-purple card-outline card-tabs">
				<div class="card-header p-0 pt-1 border-bottom-0">
					<ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">Pesanan Masuk</a>
						</li>
						<!-- <li class="nav-item">
							<a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Proses</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="custom-tabs-three-messages-tab" data-toggle="pill" href="#custom-tabs-three-messages" role="tab" aria-controls="custom-tabs-three-messages" aria-selected="false">Catat</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="custom-tabs-three-settings-tab" data-toggle="pill" href="#custom-tabs-three-settings" role="tab" aria-controls="custom-tabs-three-settings" aria-selected="false">Selesai</a>
						</li> -->
					</ul>
				</div>
				<div class="card-body">
					<div class="tab-content" id="custom-tabs-three-tabContent">
						<div class="tab-pane fade " id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
							<!-- <table class="table">
								<tr>
									<th>No Order</th>
									<th>Nama</th>
									<th>Tgl Order</th>
									<th>Tgl Acara</th>
									<th>Total Bayar</th>
									<th class="text-center">Action</th>
								</tr>
								<?php foreach ($pesanan as $key => $value) { ?>
									<tr>
										<td><?= $value->no_order ?></td>
										<td><?= $value->nama ?></td>
										<td><?= $value->tgl_order ?></td>
										<td><?= $value->tgl_acara ?></td>
										<td class="text-right">
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

							</table> -->
						</div>

						<div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
							<!-- <table class="table">
								<tr>
									<th>No Order</th>
									<th>Nama</th>
									<th>Tgl Order</th>
									<th>Tgl Acara</th>
									<th class="te">Total Bayar</th>
									<th class="text-center">Action</th>
								</tr>
								<?php foreach ($pesanan_diproses as $key => $value) { ?>
									<tr>
										<td><?= $value->no_order ?></td>
										<td><?= $value->nama ?></td>
										<td><?= $value->tgl_order ?></td>
										<td><?= $value->tgl_acara ?></td>
										<td class="text-right">
											<b> <span> Rp. <?= number_format($value->sub_total, 0) ?></span></b><br>
											<span class="badge badge-success">Diproses</span>
										</td>
										<td class="text-center">
											<?php if ($value->status_bayar == 1) { ?>
												<button type="submit" class="btn bg-purple btn-sm text-center" data-toggle="modal" data-target="#dicatat<?= $value->id_transaksi ?>">Proses </button>
											<?php } ?>
										</td>
									</tr>
								<?php } ?>

							</table> -->
						</div>
						<div class="tab-pane fade" id="custom-tabs-three-messages" role="tabpanel" aria-labelledby="custom-tabs-three-messages-tab">
							<!-- <table class="table">
								<tr>
									<th>No Order</th>
									<th>Nama</th>
									<th>Tgl Order</th>
									<th>Tgl Acara</th>
									<th>Total Bayar</th>
									<th class="text-center">No Pesanan</th>
								</tr>
								<?php foreach ($pesanan_dicatat as $key => $value) { ?>
									<tr>
										<td><?= $value->no_order ?></td>
										<td><?= $value->nama ?></td>
										<td><?= $value->tgl_order ?></td>
										<td><?= $value->tgl_acara ?></td>
										<td class="text-right">
											<b> <span> Rp. <?= number_format($value->sub_total, 0) ?></span></b><br>
											<span class="badge badge-success">Catat</span>
										</td>
										<td class="text-center">
											<h5> <?= $value->no_pesanan ?></h5>
										</td>
									</tr>
								<?php } ?>
							</table> -->
						</div>
						<div class="tab-pane fade  show active" id="custom-tabs-three-settings" role="tabpanel" aria-labelledby="custom-tabs-three-settings-tab">
							<table class="table">
								<tr>
									<th>No Order</th>
									<th>Nama</th>
									<th>Tgl Order</th>
									<th>Tgl Acara</th>
									<th class="text-right">Total Bayar</th>
								</tr>
								<?php foreach ($pesanan_selesai as $key => $value) { ?>
									<tr>
										<td><?= $value->no_order ?></td>
										<td><?= $value->nama ?></td>
										<td><?= $value->tgl_order ?></td>
										<td><?= $value->tgl_acara ?></td>
										<td class="text-right">
											<b> <span> Rp. <?= number_format($value->sub_total, 0) ?></span></b><br>
											<span class="badge badge-success">Diterima</span>
										</td>
									</tr>
								<?php } ?>

							</table>
						</div>
					</div>
				</div>
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
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
<?php } ?>


<!-- Modal  -->
<?php foreach ($pesanan_diproses as $key => $value) { ?>
	<div class="modal fade" id="dicatat<?= $value->id_transaksi ?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">No Order : <?= $value->no_order ?></h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php echo form_open('admin/dicatat/' . $value->id_transaksi) ?>
					<table class="table">
						<tr>
							<th>Nama </th>
							<th>:</th>
							<th><?= $value->nama ?></th>
						</tr>

						<tr>
							<th>Tgl Acara </th>
							<th>:</th>
							<th><?= $value->tgl_acara ?></th>
						</tr>
						<tr>
							<th>Bayar </th>
							<th>:</th>
							<th>Rp. <?= number_format($value->sub_total, 0) ?></th>
						</tr>

						<tr>
							<th>No Pesanan </th>
							<th>:</th>
							<th>
								<input type="text" name="no_pesanan" value="<?= $no_pensanan ?>" class="form-control" readonly placeholder="No Pesanan">
							</th>
						</tr>



					</table>
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-success">Simpan</button>
				</div>
				<?php echo form_close() ?>
			</div>
		</div>
	</div>
<?php } ?>