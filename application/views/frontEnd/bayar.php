<!-- Bayar sect 2 -->
<section class="bayar-sect-2">
	<div class="container">
		<div class="blocks-items">
			<div class="row">

				<div class="col-md-6">
					<div class="card">
						<div class="items-info-rek">
							<div class="card-header">
								<h3>No Rekening Dhewi Lestari (Admin)</h3>
							</div>
							<div class="card-body">
								<div class="item-info">
									<p>Silahkan Tranfer Ke Salah Satu No Rekening Di Atas Sebesar : </p>
									<div class="text-price">
										<h3>Rp. <?= number_format($pesanan->sub_total, 0) ?>.-</h3>
									</div>
									<table class="table">
										<tr>
											<th>Nama Bank</th>
											<th>No Rekening</th>
											<th>Atas Nama</th>
										</tr>
										<?php foreach ($rekening as $key => $value) { ?>
											<tr>
												<td><?= $value->nama_bank ?></td>
												<td><?= $value->no_rek ?></td>
												<td><?= $value->atas_nama ?></td>
											</tr>
										<?php } ?>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="card">
						<div class="card-header">
							<div class="title">
								<h3>Upload Bukti Pembayaran</h3>
							</div>
						</div>
						<?php echo  form_open_multipart('pesanan_saya/bayar/' . $pesanan->id_transaksi); ?>

						<div class="card-body">
							<div class="form-group">
								<label for="atas_nama">Atas Nama</label>
								<input type="text" name="atas_nama" id="atas_nama" class="form-control" placeholder="Atas Nama Pengirim " required>
							</div>

							<div class="form-group">
								<label for="nama_bank">Nama Bank</label>
								<input type="text" name="nama_bank" id="nama_bank" class="form-control" placeholder="Nama Bank" required>
							</div>

							<div class="form-group">
								<label for="no_rek">No Rekening</label>
								<input type="text" name="no_rek" id="no_rek" class="form-control" placeholder="No Rekening" required>
							</div>

							<div class="form-group">
								<label for="bukti_bayar">Bukti Bayar</label>
								<input class="form-control" name="bukti_bayar" type="file" id="bukti_bayar" required>
							</div>

							<div class="items-btn">
								<div class="item-link">
									<a href="<?= base_url('pesanan_saya') ?>">
										<!-- <span class="iconify" data-icon="charm:refresh"></span> -->
										Kembali
									</a>
								</div>
								<div class="item-btn">
									<button type="submit" class="btn">
										<!-- <span class="iconify" data-icon="bi:send-check-fill"></span> -->
										Kirim
									</button>
								</div>
							</div>

						</div>

						<?php echo  form_close() ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>