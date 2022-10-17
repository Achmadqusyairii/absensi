<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title">Edit Jamaah</h4>
					</div>
					<div class="card-body">
						<?php echo form_open_multipart('jamaah/edit/'. $jamaah['id_jamaah']); ?>
							<h3>Data Jamaah</h3>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="bmd-label-floating text-danger">ID</label>
										<input type="text" name="id_jamaah" value="<?php echo $jamaah['id_jamaah']; ?>" class="form-control" id="id_jamaah" />
									</div>
									<div class="form-group">
										<label class="bmd-label-floating text-danger">NIK</label>
										<input type="text" name="nik" value="<?php echo $jamaah['nik']; ?>" class="form-control" id="nik" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="bmd-label-floating text-danger">Nama Jamaah</label>
										<input type="text" name="nama_jamaah" value="<?php echo $jamaah['nama_jamaah']; ?>" class="form-control" id="nama_jamaah" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="bmd-label-floating text-danger">Nomor Telepon</label>
										<input type="text" name="nomor_telepon" value="<?php echo $jamaah['nomor_telepon']; ?>" class="form-control" id="nomor_telepon" />
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
												$selected = ($value == $jamaah['jenis_kelamin']) ? ' selected="selected"' : "";

												echo '<option value="' . $value . '" ' . $selected . '>' . $display_text . '</option>';
											}
											?>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<label class="bmd-label-floating text-danger">Foto Jamaah</label>
									<br>
									<input type="file" style="display: none;" id="jamaah-img" name="jamaah_img">
									<button id="jamaah-img-button" onclick="return false;" class="btn btn-info"><span class="fa fa-pencil"></span> Ubah Foto</button>
									<br>
									<br>
									<div class="form-group">
										<label class="bmd-label-floating">Nomor Paspor</label>
										<input type="text" name="nomor_paspor" value="<?php echo $jamaah['nomor_paspor']; ?>" class="form-control" id="nomor_paspor" />
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<div class="form-group">
											<label class="bmd-label-floating">Alamat</label>
											<input type="text" name="alamat" value="<?php echo $jamaah['alamat']; ?>" class="form-control" id="alamat" />
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
<script>
	$('#jamaah-img').hide()
	jQuery('#jamaah-img-button').on('click', function() {
		jQuery('#jamaah-img').toggle();
	})
</script>