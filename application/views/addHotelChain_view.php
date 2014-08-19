
<!-- jQuery Version 1.11.0 -->
<script
	src="<?php echo base_url();?>application/views/includes/js/jquery-1.11.0.js"></script>

<!-- Bootstrap Core JavaScript -->
<script
	src="<?php echo base_url();?>application/views/includes/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script
	src="<?php echo base_url();?>application/views/includes/js/plugins/metisMenu/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script
	src="<?php echo base_url();?>application/views/includes/js/plugins/dataTables/jquery.dataTables.js"></script>
<script
	src="<?php echo base_url();?>application/views/includes/js/plugins/dataTables/dataTables.bootstrap.js"></script>

<!-- Custom Theme JavaScript -->
<script
	src="<?php echo base_url();?>application/views/includes/js/sb-admin-2.js"></script>



<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">Hotel Chain Information</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-8">
						<?php
						$attributes = array (
								'role' => 'form' 
						);
						echo form_open ( 'hotelChains/add' );
						?>
						<div class="form-group">
							<label>Chain Name</label>
							<?php
							$inputAttb = array (
									'class' => 'form-control',
									'name' => 'ChainName',
									'value' => set_value ( 'ChainName' ),
									'placeholder' => 'Enter Chain Name here' 
							);
							echo form_input ( $inputAttb );
							echo form_error('ChainName','<p class="text-danger">','</p>');
							?>
						</div>

						<div class="form-group">
							<label>Head Office Address</label>
							<?php
							$inputAttb = array (
									'class' => 'form-control',
									'rows' => '3',
									'name' => 'HeadOfficeAddress',
									'value' => set_value ( 'HeadOfficeAddress' ),
									'placeholder' => 'Enter Head Office Address here' 
							);
							echo form_textarea ( $inputAttb );
							echo form_error('HeadOfficeAddress','<p class="text-danger">','</p>');
							?>
							
						
							
						</div>
						<div class="form-group">
							<?php
							$bttnAttb = array (
									'type' => 'submit',
									'class' => 'btn btn-default' 
							);
							echo form_submit ( $bttnAttb, 'Save' );
							?>
						</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>












