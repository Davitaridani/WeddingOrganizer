<div class="col-md-12">
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Data Foto Produk</h3>
			<!-- <div class="card-tools">
				<a href="<?= base_url('produk/add') ?>" class="btn btn-primary btn-sm">
					<i class="fas fa-user-plus"></i>
					Add
				</a>
			</div> -->
		</div>
		<div class="card-body">
			<?php
			if ($this->session->flashdata('pesan')) {
				echo ' <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i>';
				echo $this->session->flashdata('pesan');
				echo '</h5></div>';
			}
			?>
			<table class="table table-bordered table-striped" id="data_tables">
				<thead>
					<tr>
						<th width="3%" class="text-center">No </th>
						<th width="15%">Nama Produk</th>
						<th class="text-center">Cover</th>
						<th width="">Jumlah Foto</th>

						<th class="text-center">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach ($foto_produk as $key => $value) { ?>
						<tr>
							<td width="3%" class="text-center"> <?= $no++; ?> </td>
							<td width="15%"><?= $value->nama_produk ?></td>
							<td width="" class="text-center">
								<img src="<?= base_url('assets/gambar/' . $value->gambar) ?>" class="img img-thumbnail" width="150px" alt="">
							</td>
							<td class="text-center">
								<span class="badge badge-success">
									<h5> <?= $value->total_foto ?> </h5>
								</span>
							</td>
							<th class="text-center">
								<a href="<?= base_url('fotoProduk/add/' . $value->id_produk) ?>" class="btn btn-primary"> <i class="fa fa-plus"></i> Add Foto</a>
							</th>
						</tr>

					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>