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
        $('#dataTables-contacts').dataTable();
    });
    </script>


<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">All Contacts</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover"
						id="dataTables-contacts">
						<thead>
							<tr>
								<th>Position</th>
								<th>Name</th>								
								<th>E-mail</th>
								<th>Hotel</th>
								<th>Hotel Chain</th>
								<th>Office Number</th>
								<th>Mobile Number</th>
								

							</tr>
						</thead>
						<tbody>
							
							<?php foreach ($contacts as $row):?>				
							<tr>
								<td><?php echo $row->Position ?></td>
								
								<td><?php echo anchor('contacts/view/'.$row->ID, $row->Name, "title=".$row->Position);?></td>
								<td><?php echo $row->Email ?></td>
								<td><?php if ($row->HID){
											echo anchor('hotels/view/'.$row->HID, $row->HotelName,"title= view ".$row->HotelName);
											} 
											else echo 'None';
								
								?></td>
								<td><?php if ($row->HCID){
											echo anchor('hotels/view/'.$row->HCID, $row->ChainName,"title= view ".$row->ChainName);
											} 
											else echo 'None';
								
								?></td>
								
								<td><?php echo $row->OfficeNumber ?></td>
								<td><?php echo $row->MobileNumber ?></td>
								
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




   
    


