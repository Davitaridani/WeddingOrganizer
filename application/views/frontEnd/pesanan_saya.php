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
					<div class="card">
						<div class="card-header">
							<ul class="nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item" role="presentation">
									<a href="" class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Belum Bayar</a>
								</li>
								<li class="nav-item" role="presentation">
									<a href="" class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Diproses</a>
								</li>
								<li class="nav-item" role="presentation">
									<a href="" class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
								</li>
								<li class="nav-item" role="presentation">
									<a href="" class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#coba" type="button" role="tab" aria-controls="contact" aria-selected="false">Coba</a>
								</li>
							</ul>
						</div>

						<div class="card-body">

							<div class="tab-content" id="myTabContent">
								<div class="block-belum-bayar">
									<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
										<div class="items-table">
											<table class="table">
												<tr>
													<th>No Order</th>
													<th>Tgl Order</th>
													<th>Tgl Acara</th>
													<th>Total Bayar</th>
													<th class="text-center">Action</th>
												</tr>
												<?php foreach ($belum_bayar as $key => $value) { ?>
													<tr>
														<td><?= $value->no_order ?></td>
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
									</div>
								</div>


								<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam amet, fuga dignissimos vero nisi fugiat nobis recusandae cum aperiam eveniet nihil dicta sapiente sunt ratione maxime quasi temporibus eos obcaecati? Iure laudantium harum autem officiis cum a eligendi. Repudiandae voluptatem aliquid assumenda itaque doloribus quas saepe. Asperiores, quam repellat possimus id, fuga nihil reprehenderit repudiandae esse molestiae doloremque laudantium reiciendis ratione quasi error a autem incidunt voluptate sunt dignissimos. Omnis?</p>
								</div>

								<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam qui nesciunt sequi ullam odio illum, quo expedita nemo eligendi laboriosam quod quos impedit ipsa dolorem consequuntur ad dolor ab architecto. Perspiciatis tenetur in voluptatem aliquam labore est dolorum deserunt ipsum ad sequi dicta veritatis dolorem quaerat ipsa molestiae omnis animi necessitatibus, consequuntur corrupti aperiam veniam adipisci itaque ullam. Eveniet ipsam architecto, sunt vitae libero soluta ullam dolores debitis inventore porro fugit molestias, dolore esse necessitatibus reprehenderit est, temporibus consequuntur pariatur?</p>
								</div>

								<div class="tab-pane fade" id="coba" role="tabpanel" aria-labelledby="contact-tab">
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim vel voluptatibus explicabo hic minus iste. Laudantium eligendi nihil culpa qui!</p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

</section>