<!-- Pesanan Saya sect 2 -->
<section class="pesanan-sect-2">
	<div class="container">
		<div class="blocks-items pt-4">
			<div class="row">
				<div class="col-md-12">
					<div class="card">

						<div class="card-header">


							<ul class="nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item" role="presentation">
									<a href="" class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Belum Bayar</a>
								</li>
								<li class="nav-item" role="presentation">
									<a href="" class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
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
								<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
									<div class="items-table">
										<table class="table">
											<tr>
												<th>No Order</th>
												<th>Tgl Order</th>
												<th>Tgl Acara</th>
												<th>Total Bayar</th>
												<th>Action</th>
											</tr>
											<tr>
												<td>No Order</td>
												<td>Tgl Order</td>
												<td>TGl Acara</td>
												<td>Total Bayar</td>
												<td>
													<div class="item-btn-bayar">
														<a href="<?= base_url('pesanan_saya/bayar/' . $value->id_transaksi) ?>" class="btn btn-danger">Bayar</a>
													</div>
												</td>
											</tr>
										</table>
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