<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title">Edit Paket</h4>
					</div>
					<div class="card-body">
						<?php echo form_open('paket/edit/' . $paket['id_paket']); ?>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<select name="kategori" class="form-control">
										<option value="">Pilih Kategori</option>
										<?php
										$kategori_values = array(
											'Umroh' => 'Umroh',
											'Haji' => 'Haji',
											'Tour' => 'Tour',
										);

										foreach ($kategori_values as $value => $display_text) {
											$selected = ($value == $this->input->post('kategori')) ? ' selected="selected"' : "";

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
									<label class="bmd-label-floating">Nama Paket</label>
									<input type="text" name="nama_program" value="<?php echo ($this->input->post('nama_program') ? $this->input->post('nama_program') : $paket['nama_program']); ?>" class="form-control" id="nama_program" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<select name="paket" class="form-control">
										<option value="">Paket</option>
										<?php
										$paket_values = array(
											'Ekonomi' => 'Ekonomi',
											'Hemat' => 'Hemat',
											'Semi VIP' => 'Semi VIP',
											'VIP' => 'VIP',
										);

										foreach ($paket_values as $value => $display_text) {
											$selected = ($value == $this->input->post('paket')) ? ' selected="selected"' : "";

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
									<label class="bmd-label-floating">Hotel Mekkah</label>
									<input type="text" name="hotel_mekkah" value="<?php echo ($this->input->post('hotel_mekkah') ? $this->input->post('hotel_mekkah') : $paket['hotel_mekkah']); ?>" class="form-control" id="hotel_mekkah" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="bmd-label-floating">Hotel Madinah</label>
									<input type="text" name="hotel_madinah" value="<?php echo ($this->input->post('hotel_madinah') ? $this->input->post('hotel_madinah') : $paket['hotel_madinah']); ?>" class="form-control" id="hotel_madinah" />
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="bmd-label-floating">Bintang Hotel Mekkah</label>
									<input type="text" name="bintang_mekkah" value="<?php echo ($this->input->post('bintang_mekkah') ? $this->input->post('bintang_mekkah') : $paket['bintang_mekkah']); ?>" class="form-control" id="bintang_mekkah" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="bmd-label-floating">Bintang Hotel Madinah</label>
									<input type="text" name="bintang_madinah" value="<?php echo ($this->input->post('bintang_madinah') ? $this->input->post('bintang_madinah') : $paket['bintang_madinah']); ?>" class="form-control" id="bintang_madinah" />
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-auto">
								<div class="form-group">
									<select name="matauang" class="form-control">
										<option value="">USD / Rp</option>
										<?php
										$matauang_values = array(
											'USD' => 'USD',
											'Rp' => 'Rp',
										);

										foreach ($matauang_values as $value => $display_text) {
											$selected = ($value == $this->input->post('matauang')) ? ' selected="selected"' : "";

											echo '<option value="' . $value . '" ' . $selected . '>' . $display_text . '</option>';
										}
										?>
									</select>
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<label class="bmd-label-floating">Uang Muka</label>
									<input type="text" name="uang_muka" value="<?php echo ($this->input->post('uang_muka') ? $this->input->post('uang_muka') : $paket['uang_muka']); ?>" class="form-control" id="uang_muka" />
								</div>
							</div>
							<div class="col-auto">
								<div class="form-group">
									<select name="matauangall" class="form-control">
										<option value="">USD / Rp</option>
										<?php
										$matauangall_values = array(
											'USD' => 'USD',
											'Rp' => 'Rp',
										);

										foreach ($matauangall_values as $value => $display_text) {
											$selected = ($value == $this->input->post('matauangall')) ? ' selected="selected"' : "";

											echo '<option value="' . $value . '" ' . $selected . '>' . $display_text . '</option>';
										}
										?>
									</select>
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<label class="bmd-label-floating">Harga Paket</label>
									<input type="text" name="harga_paket" value="<?php echo ($this->input->post('harga_paket') ? $this->input->post('harga_paket') : $paket['harga_paket']); ?>" class="form-control" id="harga_paket" />
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<select name="tampilan" class="form-control">
										<option value="">Tampilkan Sebagai</option>
										<?php
										$tampilan_values = array(
											'Uang Muka' => 'Uang Muka',
											'Harga' => 'Harga',
										);

										foreach ($tampilan_values as $value => $display_text) {
											$selected = ($value == $this->input->post('tampilan')) ? ' selected="selected"' : "";

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
									<label class="bmd-label-floating">Sudah Termasuk</label>
									<input type="text" name="sudah_termasuk" value="<?php echo ($this->input->post('sudah_termasuk') ? $this->input->post('sudah_termasuk') : $paket['sudah_termasuk']); ?>" class="form-control" id="sudah_termasuk" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="bmd-label-floating">Belum Termasuk</label>
									<input type="text" name="belum_termasuk" value="<?php echo ($this->input->post('belum_termasuk') ? $this->input->post('belum_termasuk') : $paket['belum_termasuk']); ?>" class="form-control" id="belum_termasuk" />
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="bmd-label-floating">Image</label>
									<input type="text" name="sudah_termasuk" value="<?php echo ($this->input->post('paket_img') ? $this->input->post('paket_img') : $paket['paket_img']); ?>" class="form-control" id="sudah_termasuk" />
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