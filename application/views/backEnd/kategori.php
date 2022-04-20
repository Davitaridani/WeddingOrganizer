<div class="col-md-12">
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Data kategori</h3>
			<div class="card-tools">
				<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add">
					<i class="fas fa-user-plus"></i>
					Add
				</button>
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
						<th class="text-center" style="width: 30px;">No </th>
						<th>Nama Kategori</th>
						<th class="text-center" style="width: 120px;">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach ($kategori as $key => $value) { ?>
						<tr>
							<td class="text-center"><?= $no++; ?></td>
							<td><?= $value->nama_kategori ?></td>
							<td class="text-center">
								<button data-toggle="modal" data-target="#edit<?= $value->id_kategori ?>" class="btn btn-info btn-sm">
									<i class="fa fa-edit"></i>
								</button>
								<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value->id_kategori ?>">
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

<!-- Form Modal Add -->
<div class="modal fade" id="add">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Tambah Kategori</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php
				echo form_open('kategori/add');
				?>
				<div class="form-group">
					<label for="nama_kategori">Nama Kategori</label>
					<input type="text" name="nama_kategori" class="form-control" id="nama_kategori" placeholder="Nama Kategori" required>
				</div>

			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
			<?php
			echo form_close();
			?>
		</div>
	</div>
</div>


<!-- Form Modal Edit -->



<!-- Form Modal Hapus -->