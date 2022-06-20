<div class="col-12">
	<div class="invoice p-3 mb-3">
		<div class="row">
			<div class="col-12">
				<h4>
					<img src="<?= base_url('assets/img/logo-DL.png') ?>" alt="" class="img img-fluid pr-1 mb-2" width="60px">
					<?= $title ?>
					<small class="float-right mb-2">Tanggal: <?= $tanggal ?>/<?= $bulan ?>/<?= $tahun ?></small>
				</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-12 table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>No Order</th>
							<th>Nama</th>
							<th>Nama Paket</th>
							<th>Tgl Order</th>
							<th>Tgl Acara</th>
							<th class="text-right">Total</th>
							<th>Foto Produk</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						$grand_total = 0;
						foreach ($laporan as $key => $value) {
							$tot_harga = $value->qty * $value->harga;

							$grand_total = $grand_total + $tot_harga;
						?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $value->no_order ?></td>
								<td><?= $value->nama ?></td>
								<td><?= $value->nama_produk ?></td>
								<td><?= $value->tgl_order ?></td>
								<td><?= $value->tgl_acara ?></td>
								<td class="text-right">Rp. <?= number_format($value->harga, 0) ?></td>
								<td>
									<img src="<?= base_url('assets/gambar/' . $value->gambar) ?>" alt="" class="img img-fluid" width="100px" height="60px">
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
				<hr>

				<div class="total my-4">
					<h3>Grand Total : Rp. <?= number_format($grand_total, 0) ?>.-</h3>
				</div>
			</div>
		</div>

		<div class="row no-print">
			<div class="col-12">
				<button type="submit" class="btn btn-success" onclick="window.print()"><i class="fas fa-print"></i> Print</button>
			</div>
		</div>
	</div>
</div>
</div>