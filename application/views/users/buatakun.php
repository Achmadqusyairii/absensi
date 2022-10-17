<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title">Buat Akun User</h4>
					</div>
					<div class="card-body">
						<?php echo form_open('users/proses/'); ?>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="bmd-label-floating">Nama Lengkap</label>
									<input type="text" name="user_name" value="<?php echo $this->input->post('user_name') ?>" class="form-control" id="user_name" />
								</div>
							</div>						
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="bmd-label-floating">Username</label>
									<input type="text" name="user_email" value="<?php echo $this->input->post('user_email')?>" class="form-control" id="user_email" />
								</div>
							</div>						
							<div class="col-md-6">
								<div class="form-group">
									<label class="bmd-label-floating">Password</label>
									<input type="password" name="user_password" value="<?php echo $this->input->post('user_password') ?>" class="form-control" id="user_password" />
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