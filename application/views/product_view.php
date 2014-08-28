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
        $('#dataTables-hotels').dataTable();
    });
    </script>
    <script>
    $(document).ready(function() {
        $('#dataTables-contacts').dataTable();
    });
    </script>


<?php foreach ($productTypes as $type):?> 
 <script>
    $(document).ready(function() {
        $('#dataTables-<?php echo $type->ProductType ?>').dataTable();
    });
    </script>  
    
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading"><?php echo $type->ProductType ?></div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover"
						id="dataTables-<?php echo $type->ProductType ?>">
						<thead>
							<tr>
								<th>Name</th>
								<th>Size</th>
								<th>Material</th>
								<th>Tread Count</th>

							</tr>
						</thead>
						<tbody>
							
							<?php foreach ($productDetails as $product):?>
								<?php if ($type->ID==$product->ProductType) :?>				
									<tr>
				
										<td><?php echo $product->ProductName ?></td>
										<td><?php echo $product->Size ?></td>
										<td><?php echo $product->Material ?></td>
										<td><?php echo $product->ThreadCount ?></td>
		
									</tr>
								<?php endif ?>	
							<?php  endforeach;?>
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

<?php endforeach;?>





   
    


