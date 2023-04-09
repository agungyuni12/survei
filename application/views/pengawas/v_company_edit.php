<form method="POST" id="userForm" action="<?php echo base_url('pengawas/edit_company_save/'.$company->comp_id);?>" class="form-horizontal" enctype="multipart/form-data" role="form">
		<div class="modal-dialog modal-md">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title">Data perusahaan</h4>
				</div>
				<div class="modal-body">
					<div class="panel-body">				
						<div class="form-group">
							<label class="col-md-3 control-label">KIP</label>
							<div class="col-md-8">
								<input type="hidden" class="form-control" name="id" value="<?php echo $company->comp_id;?>">
								<input type="text" class="form-control" name="kip" value="<?php echo $company->comp_kip;?>" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Password</label>
							<div class="col-md-8">
								<input type="password" class="form-control" name="password" value="<?php echo base64_decode($company->comp_password);?>" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Nama Perusahaan</label>
							<div class="col-md-8">
								<input type="text" class="form-control" name="company_name" value="<?php echo $company->comp_name;?>" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Alamat</label>
							<div class="col-md-8">
								<textarea class="form-control" rows="6" name="company_address"><?php echo $company->comp_address;?></textarea>
							</div>
						</div>
						
						<div class="form-group btn-add">
							<div class="col-md-6 col-md-offset-3 pull-left">
								<button type="submit" class="btn btn-info">Save</button>
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>