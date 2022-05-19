<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<div class="card card-primary">
				<div class="card-header">
					<h3 class="card-title">Laporan Harian</h3>

				</div>
				<div class="card-body">
					<?php echo form_open('laporan/laporan_harian'); ?>
					<div class="row">
						<div class="col-sm-4">
							<div class="form-group">
								<label>Tanggal</label>
								<select name="tanggal" class="form-control" id="">
									<?php
									$mulai = 1;
									for ($i = $mulai; $i < $mulai + 31; $i++) {
										// $sel =  $i == date('Y') ? 'selected="selected"' : '';
										echo '<option value="' . $i . '">' . $i . '</option>';
									}
									?>
								</select>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="form-group">
								<label>Bulan</label>
								<select name="bulan" class="form-control" id="">
									<?php
									$mulai = 1;
									for ($i = $mulai; $i < $mulai + 12; $i++) {
										// $sel =  $i == date('Y') ? 'selected="selected"' : '';
										echo '<option value="' . $i . '">' . $i . '</option>';
									}
									?>
								</select>

							</div>
						</div>

						<div class="col-sm-4">
							<div class="form-group">
								<label>Tahun</label>
								<select name="tahun" class="form-control" id="">
									<?php
									$mulai = date('Y') - 1;
									for ($i = $mulai; $i < $mulai + 50; $i++) {
										// $sel =  $i == date('Y') ? 'selected="selected"' : '';
										echo '<option value="' . $i . '">' . $i . '</option>';
									}
									?>
								</select>
							</div>
						</div>


						<div class="col-sm-12">
							<div class="form-group">
								<button type="submit" class="btn btn-flat btn-outline-success btn-block">Cetak Laporan</button>
							</div>
						</div>

					</div>
					<?php form_close() ?>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card card-primary">
				<div class="card-header">
					<h3 class="card-title">Laporan Bulanan</h3>

				</div>
				<div class="card-body">


				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card card-primary">
				<div class="card-header">
					<h3 class="card-title">Laporan Tahunan</h3>

				</div>
				<div class="card-body">


				</div>
			</div>
		</div>
	</div>
</div>