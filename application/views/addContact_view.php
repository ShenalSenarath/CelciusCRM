
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
			<div class="panel-heading">Contact Details</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-8">
						<?php
						$attributes = array (
								'role' => 'form' 
						);
						echo form_open ( 'contacts/add' );
						?>
						<div class="form-group">
						
                        	<label>Hotel Chain </label>
                            <?php 
                            $dropdownAttab= array(
                            'class' => 'form-control'
							);
                            echo form_dropdown('ChainID', $chainDropdown,set_select('ChainID'),'class ="form-control"'); 
                            ?>
                                            
                       	</div>
						<div class="form-group">
						
                        	<label>Hotel </label>
                            <?php 
                            $dropdownAttab= array(
                            'class' => 'form-control'
							);
                            echo form_dropdown('HotelID', $hotelDropdown,set_select('HotelID'),'class ="form-control"'); 
                            ?>
                                            
                       	</div>
						<div class="form-group">
							<label>Position</label>
							<?php
							$inputAttb = array (
									'class' => 'form-control',
									'name' => 'Position',
									'value' => set_value ( 'Position' ),
									'placeholder' => 'Enter the position of the person here' 
							);
							echo form_input ( $inputAttb );
							echo form_error('Position','<p class="text-danger">','</p>');
							?>
						</div>
						<div class="form-group">
							<label>Name</label>
							<?php
							$inputAttb = array (
									'class' => 'form-control',
									'name' => 'Name',
									'value' => set_value ( 'Name' ),
									'placeholder' => 'Enter the name of the person here' 
							);
							echo form_input ( $inputAttb );
							echo form_error('Name','<p class="text-danger">','</p>');
							?>
						</div>
						<div class="form-group">
							<label>E-mail</label>
							<?php
							$inputAttb = array (
									'class' => 'form-control',
									'name' => 'Email',
									'value' => set_value ( 'Email' ),
									'placeholder' => 'Enter e-mail here' 
							);
							echo form_input ( $inputAttb );
							echo form_error('Email','<p class="text-danger">','</p>');
							?>
						</div>
						<div class="form-group">
							<label>Office Number</label>
							<?php
							$inputAttb = array (
									'class' => 'form-control',
									'name' => 'OfficeNumber',
									'value' => set_value ( 'OfficeNumber' ),
									'placeholder' => 'Enter office phone number here' 
							);
							echo form_input ( $inputAttb );
							echo form_error('OfficeNumber','<p class="text-danger">','</p>');
							?>
						</div>
						<div class="form-group">
							<label>Mobile Number</label>
							<?php
							$inputAttb = array (
									'class' => 'form-control',
									'name' => 'MobileNumber',
									'value' => set_value ( 'MobileNumber' ),
									'placeholder' => 'Enter personal/mobile number here' 
							);
							echo form_input ( $inputAttb );
							echo form_error('MobileNumber','<p class="text-danger">','</p>');
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












