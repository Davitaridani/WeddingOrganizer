<div class="col-md-12">
	<div class="card card-purple">
		<div class="card-header">
			<h3 class="card-title">Data User</h3>
			<div class="card-tools">
				<a href="<?= base_url('galeri/add') ?>" class="btn btn-purple btn-sm">
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
						<th class="text-center" width="5%">No </th>
						<th width="15%">kategori Galeri</th>
						<th class="text-center">Foto Galeri</th>
						<th width="15%" class="text-center">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach ($galeri as $key => $value) { ?>
						<tr>
							<td class="text-center"><?= $no++; ?></td>
							<td><?= $value->nama_kategori_galeri ?></td>
							<td class="text-center">
								<img src="<?= base_url('assets/galeri_foto/' . $value->foto) ?>" class="img img-thumbnail" width="300px" alt="">
							</td>

							<td class="text-center">
								<a href="<?= base_url('galeri/edit/' . $value->id_galeri) ?>" class="btn btn-info btn-sm  mb-1">
									<i class="fa fa-edit"></i>
								</a>
								<button class="btn btn-danger btn-sm mb-1" data-toggle="modal" data-target="#delete<?= $value->id_galeri ?>">
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
				<h4 class="modal-title">Tambah Foto</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php
				echo form_open('galeri/add');
				?>
				<div class="form-group">
					<label for="foto">Foto</label>
					<input type="file" name="foto" class="form-control" id="foto" placeholder="Foto Galeri" required>
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


<!-- Form Modal Hapus Foto Galeri -->
<?php foreach ($galeri as $key => $value) { ?>
	<div class="modal fade" id="delete<?= $value->id_galeri ?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Nama Kategori: <?= $value->nama_kategori_galeri ?></h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<h4 class="mb-3 text-center">Apakah Anda Yakin Ingin Menghapus Foto Ini ?</h4>

					<img src="<?= base_url('assets/galeri_foto/' . $value->foto) ?>" class="img img-fluid" alt="">


				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-success" data-dismiss="modal">Batal</button>
					<a href="<?= base_url('galeri/delete/' . $value->id_galeri) ?>" class="btn btn-danger">Hapus</a>
				</div>
			</div>
		</div>
	</div>
<?php } ?>