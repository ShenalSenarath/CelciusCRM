
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
						$hidden = array('RoomID' => $roomDetails[0]->ID);
						echo form_open ( 'roomProducts/add/'.$roomDetails[0]->ID."/".$typeDetails[0]->ID );
						?>
						<div class="form-group">
						
                        	<label>Product Details </label>
                            <?php 
                            $dropdownAttab= array(
                            'class' => 'form-control'
							);
                            echo form_dropdown('ProductID', $productsDropdownData,set_select('ProductID'),'class ="form-control"'); 
                            ?>
                                            
                       	</div>
						
						<div class="form-group">
							<label>Count</label>
							<?php
							$inputAttb = array (
									'class' => 'form-control',
									'name' => 'Count',
									'value' => set_value ( 'Count' ),
									'placeholder' => 'Enter number of items per room here' 
							);
							echo form_input ( $inputAttb );
							echo form_error('Count','<p class="text-danger">','</p>');
							?>
						</div>
						<div class="form-group">
							<label>Par Value</label>
							<?php
							$inputAttb = array (
									'class' => 'form-control',
									'name' => 'ParValue',
									'value' => set_value ( 'ParValue' ),
									'placeholder' => 'Enter par value per room here' 
							);
							echo form_input ( $inputAttb );
							echo form_error('ParValue','<p class="text-danger">','</p>');
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












