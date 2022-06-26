<div class="col-md-12">
	<div class="card card-purple">
		<div class="card-header">
			<h3 class="card-title">Data User</h3>
			<?php
			$n_email = $_SESSION['email'];
			$data_cs = $this->db->query('select * from tb_user where email = "' . $n_email . '"')->row();
			?>
			<div class="card-tools">
				<?php if ($data_cs->level_user == "1") : ?>
					<button type="button" class="btn btn-purple text-white btn-sm" data-toggle="modal" data-target="#add">
						<i class="fas fa-user-plus"></i>
						Add
					</button>
				<?php endif; ?>
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
						<th class="text-center" width="25px">No </th>
						<th>Nama</th>
						<th>Email</th>
						<th>Telepon</th>
						<!-- <th>Password</th> -->
						<th class="text-center">level</th>
						<?php if ($data_cs->level_user == "1") : ?>
							<th class="text-center" width="80px"> Action</th>
						<?php endif; ?>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach ($user as $key => $value) { ?>
						<tr>
							<td class="text-center"><?= $no++; ?></td>
							<td><?= $value->nama ?></td>
							<td><?= $value->email ?></td>
							<td><?= $value->telepon ?></td>
							<!-- <td><?= $value->password ?></td> -->
							<td class="text-center">
								<?php
								if ($value->level_user == 1) {
									echo '<span class="badge badge-success">Owner</span>';
								} else {
									echo '<span class="badge badge-info">Admin</span>';
								}
								?>
							</td>
							<?php if ($data_cs->level_user == "1") : ?>
								<td class="text-center">
									<button data-toggle="modal" data-target="#edit<?= $value->id_user ?>" class="btn btn-info btn-sm">
										<i class="fa fa-edit"></i>
									</button>
									<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value->id_user ?>">
										<i class="fa fa-trash"></i>
									</button>
								</td>
							<?php endif; ?>
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
				<h4 class="modal-title">Tambah User</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php
				echo form_open('user/add');
				?>
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" required>
				</div>

				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
				</div>

				<div class="form-group">
					<label for="telepon">Telepon</label>
					<input type="number" class="form-control" name="telepon" id="telepon" placeholder="Telepon" required>
				</div>


				<div class="form-group">
					<label for="password">Password</label>
					<input type="text" class="form-control" name="password" id="password" placeholder="Password" required>
				</div>

				<div class="form-group">
					<label for="level_user">Level User</label>
					<select name="level_user" class="form-control" id="level_user">
						<!-- <option>-- Pilih Level --</option> -->
						<option value="1" selected>Admin</option>
						<option value="2">User</option>
					</select>
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
<?php foreach ($user as $key => $value) { ?>
	<div class="modal fade" id="edit<?= $value->id_user ?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Edit User</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php
					echo form_open('user/edit/' . $value->id_user);
					?>
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" name="nama" value="<?= $value->nama ?>" class="form-control" id="nama" placeholder="Nama" required>
					</div>

					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" value="<?= $value->email ?>" name="email" id="email" placeholder="Email" required>
					</div>

					<div class="form-group">
						<label for="telepon">Telepon</label>
						<input type="number" class="form-control" name="telepon" value="<?= $value->telepon ?>" id="telepon" placeholder="Telepon" required>
					</div>


					<div class="form-group">
						<label for="password">Password</label>
						<input type="text" class="form-control" name="password" value="<?= $value->password ?>" id="password" placeholder="Telepon" required>
					</div>

					<div class="form-group">
						<label for="level_user">Level User</label>
						<select name="level_user" class="form-control" id="level_user">
							<option value="1" <?php if ($value->level_user == 1) {
														echo 'selected';
													} ?>>Admin</option>
							<option value="2" <?php if ($value->level_user == 2) {
														echo 'selected';
													} ?>>User</option>
						</select>
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
<?php } ?>


<!-- Form Modal Hapus -->
<?php foreach ($user as $key => $value) { ?>
	<div class="modal fade" id="delete<?= $value->id_user ?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title"><?= $value->nama ?></h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<h5>Apakah Anda Yakin Ingin Menghapus Data Ini ...?</h5>
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-success" data-dismiss="modal">Batal</button>
					<a href="<?= base_url('user/delete/' . $value->id_user) ?>" class="btn btn-danger">Hapus</a>
				</div>
			</div>
		</div>
	</div>
<?php } ?>