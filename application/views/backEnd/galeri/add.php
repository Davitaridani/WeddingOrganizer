<div class="col-md-12">
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Tambah Foto Galeri</h3>
		</div>
		<div class="card-body">
			<?php
			// Notifikasi Jika Form Belum Diisi
			echo validation_errors('<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-ban"></i>', '</h5> </div>');

			// Notifikasi gagal Upload Foto galeri
			if (isset($error_upload)) {
				echo '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-ban"></i>' . $error_upload . '</h5></div>';
			}
			echo form_open_multipart('galeri/add')
			?>

			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label>Kategori Galeri</label>
						<select name="id_kategori_galeri" class="form-control" id="nama_kategori">
							<option value="">-- Pilih Kategori --</option>
							<?php foreach ($kategori_galeri as $key => $value) { ?>
								<option value="<?= $value->id_kategori_galeri ?>">
									<?= $value->nama_kategori_galeri ?>
								</option>
							<?php } ?>
						</select>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label>Foto Galeri</label>
							<input type="file" name="foto" class="form-control" id="preview_gambar" required>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="form-group">
							<img src="<?= base_url('assets/galeri_foto/no-foto.png') ?>" id="gambar_load_galeri" width="450px" class="img img-fluid" alt="">
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success btn-sm">Simpan</button>
						<a href="<?= base_url('galeri') ?>" class="btn btn-danger btn-sm">Kembali</a>
					</div>
				</div>



				<?php echo form_close() ?>
			</div>
		</div>
	</div>
</div>


<!-- Script Untuk Meriplace Di Folder -->
<script>
	function cekGambar(input) {
		if (input.files && input.files[0]) {
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#gambar_load_galeri').attr('src', e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}
	$("#preview_gambar").change(function() {
		cekGambar(this);
	});
</script>