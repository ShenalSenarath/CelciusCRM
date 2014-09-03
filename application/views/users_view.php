  <!-- jQuery Version 1.11.0 -->
    <script src="<?php echo base_url();?>application/views/includes/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>application/views/includes/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>application/views/includes/js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url();?>application/views/includes/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>application/views/includes/js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>application/views/includes/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    
    <script>
    $(document).ready(function() {
        $('#dataTables-users').dataTable();
    });
    </script>


<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">All Users</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover"
						id="dataTables-users">
						<thead>
							<tr>
								<th>Username</th>								
								<th>E-mail</th>
								<th>User Group</th>
								<th>Activation Status</th>												
							</tr>
						</thead>
						<tbody>
							
							<?php foreach ($users as $row):?>
							<tr>
								<td><?php echo anchor('users/view/'.$row->ID, $row->Username, "title=Edit");?></td>
								<td><?php echo $row->Email ?></td>
								<td><?php echo $row->UserGroup ?></td>
								<td><?php if ($row->IsReset){
											echo 'Not activated';
											} 
											else echo 'Activated';
								
								?></td>
								
								
							</tr>
							<?php endforeach;?>
						</tbody>
					</table>
				</div>
				<!-- /.table-responsive -->
			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->




   
    


