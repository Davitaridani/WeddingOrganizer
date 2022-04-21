<div class="col-md-12">
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Data Produk</h3>
			<div class="card-tools">
				<a href="" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add">
					<i class="fas fa-user-plus"></i>
					Add
				</a>
			</div>
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
						<th width="15%">Nama Kategori</th>
						<th width="30%">Deskripsi</th>
						<th>Harga</th>
						<th class="text-center">Gambar</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach ($produk as $key => $value) { ?>
						<tr>
							<td class="text-center"><?= $no++; ?></td>
							<td><?= $value->nama_produk ?></td>
							<td><?= $value->nama_kategori ?></td>
							<td><?= $value->deskripsi ?></td>
							<td>Rp. <?= number_format($value->harga, 0) ?></td>
							<td class="text-center">
								<img src="<?= base_url('assets/gambar/' . $value->gambar) ?>" class="img img-thumbnail" width="200px" alt="">
							</td>
							<td>
								<a href="<?= base_url() ?>" data-toggle="modal" data-target="#edit<?= $value->id_produk ?>" class="btn btn-info btn-sm">
									<i class="fa fa-edit"></i>
								</a>
								<a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value->id_produk ?>">
									<i class="fa fa-trash"></i>
								</a>
							</td>
						</tr>
					<?php  } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>