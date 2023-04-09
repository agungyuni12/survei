<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">List User</h1>
          </div>
		  <div class="col-sm-6 text-right">
            <a href="#" class="btn btn-primary" id="add"><i class="fas fa-plus"></i> Tambah</a>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="form-add">
					<div class="card panel-default footer">
						<div class="card-header">
							<div class="caption">
								<i class="fa fa-user"></i> Add New User
							</div>
						</div>
						<div class="card-body">
							<form method="POST" id="userForm" action="<?php echo base_url('user/save_new');?>" class="form-horizontal" enctype="multipart/form-data" role="form">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="col-md-4 control-label">Full Name</label>
											<div class="col-md-6">
												<input type="text" class="form-control" id="full_name" name="full_name" value="" autofocus required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-4 control-label">User Name</label>
											<div class="col-md-6">
												<input type="text" class="form-control" id="username" name="user_name" value="" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-4 control-label">User Type</label>
											<div class="col-md-6">
												<?php if($user['type'] == 'superadmin'){?>
												<select class="form-control" name="user_type" required>
													<option value="">-- Select Type --</option>
													<option value="admin">Admin</option>
													<option value="user">User</option>
												</select>
												<?php }else{?>
												<input type="text" name="user_type" value="user" readonly>
												<?php } ?>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="col-md-4 control-label">Password</label>
											<div class="col-md-6">
												<input type="password" class="form-control" id="password" name="password" value="" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-4 control-label">Confirm Password</label>
											<div class="col-md-6">
												<input type="password" class="form-control" id="confirmpassword" name="confirmpassword" value="" required>
											</div>
										</div>
										<div class="form-group btn-add">
											<div class="col-md-6 col-md-offset-4 pull-left">
												<button type="submit" class="btn btn-info" onClick="validatePassword();">Save</button>&nbsp;
												<a href="#" class="btn btn-default" id="cancel">Cancel</a>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="card panel-default footer">
						
						<div class="card-body">
							<?php echo $this->session->flashdata('info_user');?>
							<table class="table table-striped table-hover table-bordered" id="list_user">
								<thead class="thead-blue">
									<tr>
										<th>Username</th>
										<th>Full Name</th>
										<th>User Level</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($user_list as $row): ?>
									<tr>
										<td><?php echo $row->user_name?></td>
										<td><?php echo $row->user_fullname?></td>
										<td><?php echo $row->user_type?></td>
										<td>
											<a href="<?php echo base_url('user/edit/'.$row->user_id);?>" class="btn btn-warning btn-sm" title="Edit"><i class="fa fa-edit"></i></a>
											<a onClick="return confirm('Yakin akan menghapus <?php echo $row->user_name;?> ?');" href="<?php echo base_url('user/delete_user/'.$row->user_id);?>" class="btn-delete btn btn-danger btn-sm" title="Delete"><i class="fas fa-trash"></i></a>
										</td>
									</tr>
									<?php endforeach;?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script type="text/javascript">
	function validatePassword(input){
		if(input.value != $('#new').val()){
			input.setCustomValidity('Password must be match.');
		}
		else{
			input.setCustomValidity('');
		}
	}	
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#user_name').blur(function(){
			var user_name = $('#user_name').val();
			var data = 'user_name='+user_name;
			$.ajax({
				type: "POST",
				data: data,
				url: "<?php echo base_url('user/check') ?>",
				dataType: "json",
				success: function(result){
					if( result.status == 1)
					{
						alert('Username already exist! Please try another username');
						$('#user_name').val('');
						$('#user_name').focus();
					}
				}
			});
		});
		
		$('.form-add').hide();
		$('#add').on('click', function(){
			$('.form-add').fadeToggle(1000);
			$('#add').hide();
		});
			
		$('#cancel').on('click', function(){
			$('.form-add').fadeToggle(1000);
			$('#add').show();
			$('#full_name').val('');
			$('#username').val('');
			$('#password').val('');
			$('#confirmpassword').val('');
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#list_user').DataTable({
			ordering: false
		});
	});
</script>