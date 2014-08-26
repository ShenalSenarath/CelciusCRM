
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
			<div class="panel-heading">Product Information</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-8">
						<?php
						$attributes = array (
								'role' => 'form' 
						);
						echo form_open ( 'products/add' );
						?>
						<div class="form-group">
						
                        	<label>Product Type </label>
                            <?php 
                            $dropdownAttab= array(
                            'class' => 'form-control'
							);
                            echo form_dropdown('ProductType', $dropdown,set_select('ProductType'),'class ="form-control"'); 
                            ?>
                                            
                       	</div>
						<div class="form-group">
							<label>Product Name</label>
							<?php
							$inputAttb = array (
									'class' => 'form-control',
									'name' => 'ProductName',
									'value' => set_value ( 'ProductName' ),
									'placeholder' => 'Enter Product Name here' 
							);
							echo form_input ( $inputAttb );
							echo form_error('ProductName','<p class="text-danger">','</p>');
							?>
						</div>
						<div class="form-group">
							<label>Product Size</label>
							<?php
							$inputAttb = array (
									'class' => 'form-control',
									'name' => 'Size',
									'value' => set_value ( 'Size' ),
									'placeholder' => 'Enter Size here' 
							);
							echo form_input ( $inputAttb );
							echo form_error('Size','<p class="text-danger">','</p>');
							?>
						</div>
						<div class="form-group">
							<label>Material</label>
							<?php
							$inputAttb = array (
									'class' => 'form-control',
									'name' => 'Material',
									'value' => set_value ( 'Material' ),
									'placeholder' => 'Enter Material here' 
							);
							echo form_input ( $inputAttb );
							echo form_error('Material','<p class="text-danger">','</p>');
							?>
						</div>
						<div class="form-group">
							<label>Thread Count</label>
							<?php
							$inputAttb = array (
									'class' => 'form-control',
									'name' => 'ThreadCount',
									'value' => set_value ( 'ThreadCount' ),
									'placeholder' => 'Enter Thread Count here' 
							);
							echo form_input ( $inputAttb );
							echo form_error('ThreadCount','<p class="text-danger">','</p>');
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












