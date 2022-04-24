<div class="col-md-12">
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Tambah Foto Produk : <?= $produk->nama_produk ?> </h3>
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
			echo form_open_multipart('')
			?>



			<div class="row">
				<div class="form-group">
					<label for="keterangan">Keterangan Foto</label>
					<input type="text" class="form-control" name="keterangan" value="<?= set_value('keterangan') ?>" id="keterangan" placeholder="Ket Foto ">
				</div>

				<div class="col-sm-4">
					<div class="form-group">
						<label for="">Gambar Produk</label>
						<input type="file" name="gambar" id="preview_gambar" class="form-control" required>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="form-group">
						<img src="<?= base_url('assets/gambar/no-foto.png') ?>" id="gambar_load" width="250px" class="img img-fluid" alt="">
					</div>
				</div>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-success btn-sm">Simpan</button>
				<a href="<?= base_url('FotoProduk') ?>" class="btn btn-danger btn-sm">Kembali</a>
			</div>

			<?php echo form_close() ?>

			<hr>
			<div class="row">

				<?php foreach ($foto as $key => $value) { ?>
					<div class="col-sm-4">
						<div class="form-group my-3 text-center">
							<img src="<?= base_url('assets/foto_produk/' . $value->foto) ?>" id="gambar_load" width="auto" height="auto" class="img img-fluid text-center" alt="">
						</div>
						<p>Ket : <?= $value->keterangan ?></p>
						<a href="#" class="btn btn-danger btn-block btn-sm"><i class="fa fa-trash"></i> Hapus</a>
					</div>
				<?php } ?>
			</div>

		</div>
	</div>
</div>

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