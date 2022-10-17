<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title">Edit Jamaah</h4>
					</div>
					<div class="card-body">
						<?php echo form_open('jamaah/updateqr/' . $jamaah['id_jamaah']); ?>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<!-- <label class="bmd-label-floating text-danger">UUID</label> -->
									<input type="text" name="uuid" style="display: none;" value="<?php echo ($this->input->post('uuid') ? $this->input->post('uuid') : $jamaah['uuid']); ?>" class="form-control" id="uuid" />
									<!-- <input type="text" name="base_url" style="display: block;" value="<?php echo (base_url('jamaah/detail/').$jamaah['id_jamaah'] ? base_url('jamaah/detail/').$jamaah['id_jamaah'] : base_url('jamaah/detail/').$jamaah['id_jamaah']); ?>" class="form-control" id="base_url" /> -->
								</div>
							</div>
						</div>
						<button type="submit" class="btn btn-info pull-right">Buat QR</button>
						<div class="clearfix"></div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>