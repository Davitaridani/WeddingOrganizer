<div class="col-12">
	<div class="invoice p-3 mb-3">
		<div class="row">
			<div class="col-12">
				<h4>
					<img src="<?= base_url('assets/img/logo-DL.png') ?>" class="img img-fluid pr-2" width="60px" height="40px" alt="">
					<?= $title ?>
					<small class="float-right">Tanggal: <?= $tanggal ?>/<?= $bulan ?>/<?= $tahun ?></small>
				</h4>
			</div>
		</div>

		<!-- Table row -->
		<div class="row">
			<div class="col-12 table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>No Order</th>
							<th>Produk</th>
							<th>Harga</th>
							<th>QTY</th>
							<th class="text-center">Foto</th>
							<th>Total Harga</th>
						</tr>
					</thead>
					<tbody>

						<?php $no = 1;
						$grand_total = 0;
						foreach ($laporan as $key => $value) {
							$total_harga = $value->qty * $value->harga;
							$grand_total = $grand_total + $total_harga;

						?>
							<tr>
								<td><?= $no++; ?></td>
								<td><?= $value->no_order ?></td>
								<td><?= $value->nama_produk ?></td>
								<td>Rp. <?= number_format($value->harga, 0) ?></td>
								<td><?= $value->qty ?></td>
								<td class="text-center">
									<img src="<?= base_url('assets/gambar/' . $value->gambar) ?>" alt="" class="img img-fluid" height="200px" width="250px">
								</td>
								<td>Rp. <?= number_format($total_harga, 0) ?></td>

							</tr>
						<?php } ?>
					</tbody>
				</table>
				<hr>
				<h3 class="my-4 text-right"> Grand Total : Rp. <?= number_format($grand_total, 0) ?>.-</h3>
			</div>
		</div>


		<div class="row no-print">
			<div class="col-12">
				<button type="" class="btn btn-success" onclick="window.print()"><i class="fas fa-print"></i> Print</button>
			</div>
		</div>
	</div>
</div>