<section>
	<div class="container" style="padding-top: 5rem;">
		<?php echo $this->session->flashdata('info_company');?>
		<div class="row">
			<div class="pull-right">
				<a class="btn btn-primary btn-add" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i> Perusahaan</a>
			</div>
		</div>
		<div class="row">
			<div class="box box-default box-solid">
				<div class="box-header with-border bg-navy" style="text-align: center; color: white;">
					<p class="box-title" style="font-weight: bold;">List Perusahaan</p> 
					<div class="box-tools pull-right"></div>
				</div> 
				<div class="box-body">
					<table id="table" class="table table-bordered table-condensed table-striped mt-5">
						<thead>
							<th>KIP</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Aksi</th>
						</thead>
						<tbody>
							<?php foreach($company as $row){?>
							<tr>
								<td><?php echo $row->comp_kip;?></td>
								<td><?php echo $row->comp_name;?></td>
								<td><?php echo $row->comp_address;?></td>
								<td>
									<a class="btn btn-warning edit" id="<?php echo $row->comp_id;?>" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i></a>
									<a class="btn btn-danger"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="modal fade" id="add" tabindex="-1" role="basic" aria-hidden="true">
	<form method="POST" id="userForm" action="<?php echo base_url('pengawas/add_company');?>" class="form-horizontal" enctype="multipart/form-data" role="form">
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
								<input type="text" class="form-control" name="kip" value="" autofocus required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Password</label>
							<div class="col-md-8">
								<input type="password" class="form-control" name="password" value="" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Nama Perusahaan</label>
							<div class="col-md-8">
								<input type="text" class="form-control" name="company_name" value="" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Alamat</label>
							<div class="col-md-8">
								<textarea class="form-control" rows="6" name="company_address"></textarea>
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
</div>
<div class="modal fade" id="edit" tabindex="-1" role="basic" aria-hidden="true"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('.edit').click(function(){
			var id = $(this).attr('id');
			var info = 'company_id='+id;
			$.ajax({
				type: "POST",
				url: "<?php echo site_url('pengawas/edit_company') ?>",
				data: info,
				success: function(html){
					$('#edit').html(html);
				}
			});
		}); 
	});
</script>