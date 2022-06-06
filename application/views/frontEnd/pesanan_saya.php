<!-- Pesansn Saya sect 1 -->
<section class="section-hero-image-banner hero-image-banner-paralax" data-parallax="scroll" data-z-index="1" data-image-src="<?= base_url() ?>assets/img/banner-contact.jpg">
	<div class=" container">
		<div class="inner text-content">
			<div class="blocks-items ">
				<div class="items text-center">
					<div class="text-title">
						<h3>Pesanan</h3>

						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
								<li class="breadcrumb-item">Pesanan Saya</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Pesanan Saya sect 2 -->
<section class="pesanan-sect-2">
	<div class="container">
		<div class="blocks-items">
			<div class="row">
				<div class="col-md-12">
					<?php
					if ($this->session->flashdata('pesan')) {
						echo ' <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Succes!</h5>';
						echo $this->session->flashdata('pesan');
						echo '</div>';
					}
					?>
					<div class="card ">
						<div class="card-header">
							<ul class="nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item" role="presentation">
									<a href="" class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Belum Bayar</a>
								</li>
								<li class="nav-item" role="presentation">
									<a href="" class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Diproses</a>
								</li>
								<li class="nav-item" role="presentation">
									<a href="" class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Dicatat</a>
								</li>
								<li class="nav-item" role="presentation">
									<a href="" class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#coba" type="button" role="tab" aria-controls="contact" aria-selected="false">Selesai</a>
								</li>
							</ul>
						</div>

						<div class="card-body">
							<div class="tab-content" id="myTabContent">
								<!-- Data Pesnana belum Bayar -->
								<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
									<table class="table">
										<tr>
											<th>No Order</th>
											<th>Nama</th>
											<th>Tgl Order</th>
											<th>Tgl Acara</th>
											<th>Total Bayar</th>
											<th class="text-center">Action</th>
										</tr>
										<?php foreach ($belum_bayar as $key => $value) { ?>
											<tr>
												<td><?= $value->no_order ?></td>
												<td><?= $value->nama ?></td>
												<td><?= $value->tgl_order ?></td>
												<td><?= $value->tgl_acara ?></td>
												<td>
													<div class="item-bg">
														<p> Rp. <?= number_format($value->sub_total, 0) ?></p>
														<?php if ($value->status_bayar == 0) { ?>
															<div class="bg-belum-bayar">
																<span class="">Belum Bayar</span>
															</div>
														<?php } else { ?>
															<div class="bg-sudah-bayar">
																<span>Sudah Bayar</span>
															</div>
															<div class="bg-verifikasi">
																<span class="">Nunggu Verifikasi</span>
															</div>
														<?php } ?>
													</div>
												</td>
												<td>
													<div class="item-btn-bayar ">
														<?php if ($value->status_bayar == 0) { ?>
															<a href="<?= base_url('pesanan_saya/bayar/' . $value->id_transaksi) ?>" class="">Bayar</a>
														<?php } ?>
													</div>
												</td>
											</tr>
										<?php } ?>
									</table>
								</div>

								<!-- Block Data Pesanan DI Proses -->
								<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
									<table class="table">
										<tr>
											<th>No Order</th>
											<th>Nama</th>
											<th>Tgl Order</th>
											<th>Tgl Acara</th>
											<th>Total Bayar</th>
										</tr>
										<?php foreach ($diproses as $key => $value) { ?>
											<tr>
												<td><?= $value->no_order ?></td>
												<td><?= $value->nama ?></td>
												<td><?= $value->tgl_order ?></td>
												<td><?= $value->tgl_acara ?></td>
												<td>
													<div class="item-bg">
														<p> Rp. <?= number_format($value->sub_total, 0) ?></p>

														<div class="bg-sudah-bayar">
															<span>Terverifikasi</span>
														</div>
														<div class="bg-verifikasi">
															<span class="">Diproses</span>
														</div>

													</div>
												</td>
												<!-- <td>
													<div class="item-btn-bayar ">
														<?php if ($value->status_bayar == 0) { ?>
															<a href="<?= base_url('pesanan_saya/bayar/' . $value->id_transaksi) ?>" class="">Bayar</a>
														<?php } ?>
													</div>
												</td> -->
											</tr>
										<?php } ?>

									</table>
								</div>

								<!-- Pesanan DI CAtat -->
								<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
									<table class="table">
										<tr>
											<th>No Order</th>
											<th>Nama</th>
											<th>Tgl Order</th>
											<th>Tgl Acara</th>
											<th>Total Bayar</th>
											<th class="text-center">No Pesanan</th>
										</tr>
										<?php foreach ($dicatat as $key => $value) { ?>
											<tr>
												<td><?= $value->no_order ?></td>
												<td><?= $value->nama ?></td>
												<td><?= $value->tgl_order ?></td>
												<td><?= $value->tgl_acara ?></td>
												<td>
													<div class="item-bg">
														<p> Rp. <?= number_format($value->sub_total, 0) ?></p>
														<div class="bg-verifikasi">
															<span class="">Dicatat</span>
														</div>
													</div>
												</td>
												<td class="no_pesanan text-center">
													<?= $value->no_pesanan ?>
													<div class="btn-terima">
														<button class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#dicatat" id="diterima">Terima</button>
													</div>
												</td>
											</tr>
										<?php } ?>
									</table>
								</div>

								<div class="tab-pane fade" id="coba" role="tabpanel" aria-labelledby="contact-tab">
									<table class="table">
										<tr>
											<th>No Order</th>
											<th>Nama</th>
											<th>Tgl Order</th>
											<th>Tgl Acara</th>
											<th>Total Bayar</th>
											<th class="text-center">No Pesanan</th>
										</tr>
										<?php foreach ($selesai as $key => $value) { ?>
											<tr>
												<td><?= $value->no_order ?></td>
												<td><?= $value->nama ?></td>
												<td><?= $value->tgl_order ?></td>
												<td><?= $value->tgl_acara ?></td>
												<td>
													<div class="item-bg">
														<p> Rp. <?= number_format($value->sub_total, 0) ?></p>

														<div class="bg-verifikasi">
															<span class="">Selesai</span>
														</div>
													</div>
												</td>
												<td class="no_pesanan text-center">
													<?= $value->no_pesanan ?>
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
	</div>
</section>




<?php foreach ($dicatat as $key => $value) { ?>
	<div class="form-modal modal-pesanan-diterima">
		<div class="modal fade" id="dicatat" <?php echo $value->id_transaksi ?>>
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">No Pesanan: <?= $value->no_pesanan ?></h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h5>Apakah Anda Yakin Pesanan Sudah DI Terima ?</h5>
					</div>
					<div class="modal-footer justify-content-between">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
						<a href="<?= base_url('pesanan_saya/diterima/' . $value->id_transaksi) ?>" class="btn ">Ya</a>
					</div>
					<?php echo form_close() ?>
				</div>
			</div>
		</div>
	</div>

<?php } ?>