<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit User</h1>
          </div>
		  <div class="col-sm-6 text-right">
            <a href="<?php echo base_url('user');?>" class="btn btn-warning" id="add"><i class="fas fa-long-arrow-alt-left"></i> Kembali</a>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<!-- Main content -->
    <section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<div class="card panel-default footer">
						<div class="card-body">
							<form method="POST" id="userForm" action="<?php echo base_url('user/save_user/'.$user->user_id);?>" class="form-horizontal" enctype="multipart/form-data" role="form">
								<table class="table">
									<div class="col-md-12">
										<div class="form-group">
											<label class="col-md-10 control-label">User Name</label>
											<div class="col-md-12">
												<input type="text" class="form-control" id="user_name" name="user_name" value="<?php echo $user->user_name;?>" required disabled>
												<input type="hidden" class="form-control" id="user_id" name="user_id" value="<?php echo $user->user_id;?>" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-10 control-label">Full Name</label>
											<div class="col-md-12">
												<input type="text" class="form-control" id="full_name" name="full_name" value="<?php echo $user->user_fullname;?>" required>
											</div>
										</div>
										<div class="form-actions fluid">
											<div class="col-md-6 col-md-offset-4 pull-left">
												<button type="submit" class="btn btn-success">Save</button>
											</div>
										</div>
									</div>
								</table>
							</form>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="card panel-default footer">
						<div class="card-body">
							<?php $message = $this->session->flashdata('password'); if(@$message!='') : ?>
							<div class="alert alert-danger alert-dismissable">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
								<?php echo $message;?>
							</div>
							<?php endif ?>
							<form method="POST" action="<?php echo base_url('user/save_pass/'.$user->user_id);?>" class="form-horizontal" role="form">
								<div class="form-body">
									<div class="form-group">
										<label class="col-md-10 control-label">Current Password</label>
										<div class="col-md-12">
											<input type="password" class="form-control" required name="current" id="current">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-10 control-label">New Password</label>
										<div class="col-md-12">
											<input type="password" class="form-control" required name="new" id="new" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-10 control-label">Confirm Password</label>
										<div class="col-md-12">
											<input type="password" class="form-control" required name="confirm" id="confirm" required  onInput="check(this);">
										</div>
									</div>
								</div>
								<div class="form-actions fluid">
									<div class="col-md-7 col-md-offset-3 pull-left">
										<button type="submit" class="btn btn-success">Save</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<script type="text/javascript">
	function check(input){
		if(input.value != $('#new').val()){
			input.setCustomValidity('Password must be match.');
		}
		else{
			input.setCustomValidity('');
		}
	}	
</script>