<div class="col-md-12">
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Form Tambah Produk</h3>
		</div>
		<div class="card-body">
			<?php form_open_multipart('produk/add') ?>

			<div class="form-group">
				<label for="nama_produk">Nama Produk</label>
				<input type="text" class="form-control" name="nama_produk" value="<?= set_value('nama_produk') ?>" id="nama_produk" placeholder="Nama Produk">
			</div>

			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label for="nama_kategori">Kategori</label>
						<select name="id_kategori" class="form-control" id="nama_kategori">
							<option value="">-- Pilih Kategori --</option>
							<?php foreach ($kategori as $key => $value) { ?>
								<option value="<?= $value->id_kategori ?>"><?= $value->nama_kategori ?></option>
							<?php } ?>
						</select>
					</div>
				</div>

				<div class="col-sm-6">
					<div class="form-group">
						<label for="harga">Harga</label>
						<input type="text" class="form-control" name="harga" value="<?= set_value('harga') ?>" id="harga" placeholder="Harga">
					</div>
				</div>
			</div>

			<div class="form-group">
				<label for="deskripsi">Deskripsi Produk</label>
				<textarea class="form-control" name="deskripsi" rows="5" id="deskripsi" placeholder="Deskripsi"><?= set_value('deskripsi') ?> </textarea>
			</div>

			<div class="form-group">
				<label for="gambar">Gambar Produk</label>
				<input type="file" name="gambar" id="gambar" class="form-control">
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-success btn-sm">Simpan</button>
				<a href="<?= base_url('produk') ?>" class="btn btn-danger btn-sm">Kembali</a>
			</div>

			<?php echo form_close() ?>
		</div>
	</div>
</div>