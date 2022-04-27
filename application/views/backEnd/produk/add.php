<div class="col-md-12">
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Form Tambah Produk</h3>
		</div>
		<div class="card-body">
			<?php
			// Notifikasi Jika Form Belum Diisi
			echo validation_errors('<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-ban"></i>', '</h5> </div>');

			// Notifikasi gagal Upload Gambar
			if (isset($error_upload)) {
				echo '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-ban"></i>' . $error_upload . '</h5></div>';
			}
			echo form_open_multipart('produk/add')
			?>
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
				<textarea class="form-control" name="deskripsi" rows="5" id="deskrispiTinyMce" placeholder="Deskripsi Produk"><?= set_value('deskripsi') ?> </textarea>
			</div>

			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label for="">Gambar Produk</label>
						<input type="file" name="gambar" id="preview_gambar" class="form-control" required>
					</div>
				</div>

				<div class="col-sm-6">
					<div class="form-group">
						<img src="<?= base_url('assets/gambar/no-foto.png') ?>" id="gambar_load" width="400px" class="img img-fluid" alt="">
					</div>
				</div>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-success btn-sm">Simpan</button>
				<a href="<?= base_url('produk') ?>" class="btn btn-danger btn-sm">Kembali</a>
			</div>

			<?php echo form_close() ?>
		</div>
	</div>
</div>







<!-- Include plugin TINYMCE  -->
<script src="../assets/tinymce/js/tinymce/tinymce.min.js"></script>

<!-- cara mengunakan tinymce -->
<script>
	tinymce.init({
		selector: '#deskrispiTinyMce',
		height: 350,
		menubar: false,
		plugins: [
			'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
			'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
			'insertdatetime', 'media', 'table', 'code', 'help', 'wordcount'
		],
		toolbar: 'undo redo | blocks | ' +
			'bold italic backcolor | alignleft aligncenter ' +
			'alignright alignjustify | bullist numlist outdent indent | ' +
			'removeformat | help',
		content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
	});
</script>





<script>
	function cekGambar(input) {
		if (input.files && input.files[0]) {
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#gambar_load').attr('src', e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}
	$("#preview_gambar").change(function() {
		cekGambar(this);
	});
</script>