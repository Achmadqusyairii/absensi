<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title">Tambah Paket</h4>
					</div>
					<div class="card-body">
						<form action="<?php echo site_url() . 'paket/add' ?>" method="post" enctype="multipart/form-data">
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
										<label class="bmd-label-floating">Nama Program</label>
										<input type="text" name="nama_program" value="<?php echo $this->input->post('nama_program'); ?>" class="form-control" id="nama_program" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<select name="paket" class="form-control">
											<option value="">Pilih Paket</option>
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
										<input type="text" name="hotel_mekkah" value="<?php echo $this->input->post('hotel_mekkah'); ?>" class="form-control" id="hotel_mekkah" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="bmd-label-floating">Hotel Madinah</label>
										<input type="text" name="hotel_madinah" value="<?php echo $this->input->post('hotel_madinah'); ?>" class="form-control" id="hotel_madinah" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="bmd-label-floating">Bintang Hotel Mekkah</label>
										<input type="text" name="bintang_mekkah" value="<?php echo $this->input->post('bintang_mekkah'); ?>" class="form-control" id="bintang_mekkah" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="bmd-label-floating">Bintang Hotel Madinah</label>
										<input type="text" name="bintang_madinah" value="<?php echo $this->input->post('bintang_madinah'); ?>" class="form-control" id="bintang_madinah" />
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
										<input type="text" name="uang_muka" value="<?php echo $this->input->post('uang_muka'); ?>" class="form-control" id="uang_muka" />
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
										<input type="text" name="harga_paket" value="<?php echo $this->input->post('harga_paket'); ?>" class="form-control" id="harga_paket" />
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
										<input type="text" name="sudah_termasuk" value="<?php echo $this->input->post('sudah_termasuk'); ?>" class="form-control" id="sudah_termasuk" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="bmd-label-floating">Belum Termasuk</label>
										<input type="text" name="belum_termasuk" value="<?php echo $this->input->post('belum_termasuk'); ?>" class="form-control" id="belum_termasuk" />
									</div>
								</div>
							</div>
							<?php
							if ($this->session->flashdata('error') != '') {
								echo '<div class="alert alert-danger" role="alert">';
								echo $this->session->flashdata('error');
								echo '</div>';
							}
							?>
							<div class="row">
								<div class="col">
									<label class="bmd-label-floating">Image</label>
									<br>
									<input type="file" name="paket_img" required>
								</div>
							</div>
							<button type="submit" class="btn btn-success pull-right">Tambah</button>
							<div class="clearfix"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>