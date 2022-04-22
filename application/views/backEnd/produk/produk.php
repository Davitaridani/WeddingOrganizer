<div class="col-md-12">
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Data Produk</h3>
			<div class="card-tools">
				<a href="<?= base_url('produk/add') ?>" class="btn btn-primary btn-sm">
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
								<a href="<?= base_url('produk/edit/' . $value->id_produk) ?>" class="btn btn-info btn-sm">
									<i class="fa fa-edit"></i>
								</a>
								<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value->id_produk ?>">
									<i class="fa fa-trash"></i>
								</button>
							</td>
						</tr>
					<?php  } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>


<!-- Form Modal Hapus -->
<?php foreach ($produk as $key => $value) { ?>
	<div class="modal fade" id="delete<?= $value->id_produk ?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Hapus <?= $value->nama_produk ?></h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<h5>Apakah Anda Yakin Ingin Menghapus Data Ini ...?</h5>
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-success" data-dismiss="modal">Batal</button>
					<a href="<?= base_url('produk/delete/' . $value->id_produk) ?>" class="btn btn-danger">Hapus</a>
				</div>
			</div>
		</div>
	</div>
<?php } ?>