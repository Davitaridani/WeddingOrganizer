<div class="col-md-12">
	<div class="card card-purple">
		<div class="card-header">
			<h3 class="card-title">Jadwal</h3>
			<!-- <div class="card-tools">
				<button type="button" class="btn btn-purple text-white btn-sm" data-toggle="modal" data-target="#add">
					<i class="fas fa-plus"></i> Add
				</button>
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
						<th class="text-center" style="width: 20px;">No </th>
						<th>No Pesanan</th>
						<th>Nama</th>
						<th>Kec</th>
						<th>Alamat</th>
						<th>Tgl Acara</th>
						<th>No Telp</th>
						<th>Bayar</th>
						<th class="text-center" style="width: 60px;">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach ($jadwal as $key => $value) { ?>
						<tr>
							<td class="text-center"><?= $no++; ?></td>
							<td><?= $value->no_pesanan ?></td>
							<td><?= $value->nama ?></td>
							<td><?= $value->kecamatan ?></td>
							<td><?= $value->alamat ?></td>
							<td><?= $value->tgl_acara ?></td>
							<td><?= $value->telepon ?></td>
							<td>Rp. <?= number_format($value->sub_total, 0) ?></td>
							<td class="text-center">
								<!-- <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value->id_transaksi ?>">
									<i class="fa fa-trash"></i>
								</button> -->
								<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#delete<?= $value->id_transaksi ?>">
									Selesai
								</button>
							</td>
						</tr>
					<?php  } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>




<!-- Form Modal -->
<?php foreach ($jadwal as $key => $value) { ?>
	<div class="modal fade" id="delete<?= $value->id_transaksi ?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Data: <?= $value->no_pesanan ?></h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<h5>Apakah Anda Yakin Ingin Data Ini Selesai ..?</h5>
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-success" data-dismiss="modal">Tidak</button>
					<a href="<?= base_url('jadwal/delete/' . $value->id_transaksi) ?>" class="btn btn-danger">Ya</a>
				</div>
			</div>
		</div>
	</div>
<?php } ?>


<!-- <div class="col-md-12">
	<div class="card card-purple">
		<div class="card-header">
			<h3 class="card-title">Jadwal Job</h3>
		</div>
		<div class="card-body" id="calendar">


		</div>
	</div>
</div> -->











<!-- <script>
	$(document).ready(function() {
		$('#calendar').fullCalendar({
			editable: true,
		});
		calendar.render();

	});
</script> -->