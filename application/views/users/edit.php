<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title">Edit Users</h4>
					</div>
					<div class="card-body">
						<?php echo form_open('users/edit/' . $users['user_id']); ?>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="bmd-label-floating">Nama users</label>
									<input type="text" name="user_name" value="<?php echo ($this->input->post('user_name') ? $this->input->post('user_name') : $users['user_name']); ?>" class="form-control" id="nama_petani" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<select name="user_level" class="form-control">
										<option value="">Pilih Level</option>
										<option value="2">Koordinator</option>
										<option value="3">Petani</option>
									</select>
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