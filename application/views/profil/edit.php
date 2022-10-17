<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title">Edit Petani</h4>
					</div>
					<div class="card-body">
						<?php echo form_open('profil/edit/' . $profil['id_petani']); ?>
						<div class="row mt-4">
							<div class="col-md-6">
								<div class="form-group">
									<label class="bmd-label-floating">Nama Petani</label>
									<input type="text" name="nama_petani" value="<?php echo ($this->input->post('nama_petani') ? $this->input->post('nama_petani') : $profil['nama_petani']); ?>" class="form-control" id="nama_petani" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<select name="jenis_kelamin" class="form-control">
										<option value="">Pilih Jenis Kelamin</option>
										<?php
										$jenis_kelamin_values = array(
											'Laki-Laki' => 'Laki-Laki',
											'Perempuan' => 'Perempuan',
										);

										foreach ($jenis_kelamin_values as $value => $display_text) {
											$selected = ($value == $petani['jenis_kelamin']) ? ' selected="selected"' : "";

											echo '<option value="' . $value . '" ' . $selected . '>' . $display_text . '</option>';
										}
										?>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="bmd-label-floating">NIK</label>
									<input type="text" name="nik" value="<?php echo ($this->input->post('nik') ? $this->input->post('nik') : $profil['nik']); ?>" class="form-control" id="nik" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="bmd-label-floating">Nomor Hp</label>
									<input type="text" name="nomor_hp" value="<?php echo ($this->input->post('nomor_hp') ? $this->input->post('nomor_hp') : $profil['nomor_hp']); ?>" class="form-control" id="nomor_hp" />
								</div>
							</div>
						</div>
						<div class="row mt-4">
							<div class="col-md-6">
								<div class="form-group">
									<label>Tanggal Lahir</label>
									<input type="date" name="tanggal_lahir" value="<?php echo ($this->input->post('tanggal_lahir') ? $this->input->post('tanggal_lahir') : $profil['tanggal_lahir']); ?>" class="form-control" id="tanggal_lahir" />
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<div class="form-group">
										<label class="bmd-label-floating">Alamat</label>
										<textarea name="alamat" class="form-control" id="alamat"><?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $profil['alamat']); ?></textarea>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="form-group">
										<label class="bmd-label-floating">Pendidikan Terakhir</label>
										<textarea name="pendidikan_terakhir" class="form-control" id="pendidikan_terakhir"><?php echo ($this->input->post('pendidikan_terakhir') ? $this->input->post('pendidikan_terakhir') : $profil['pendidikan_terakhir']); ?></textarea>
									</div>
								</div>
							</div>
						</div>
						<button type="submit" class="btn btn-info pull-right">Simpan</button>
						<div class="clearfix"></div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>