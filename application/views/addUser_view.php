
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
			<div class="panel-heading">User Details</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-8">
						<?php
						$attributes = array (
								'role' => 'form' 
						);
						echo form_open ( 'users/add' );
						?>
						<div class="form-group">
							<label>Username</label>
							<?php
							$inputAttb = array (
									'class' => 'form-control',
									'name' => 'Username',
									'value' => set_value ( 'Username' ),
									'placeholder' => 'Enter the username' 
							);
							echo form_input ( $inputAttb );
							echo form_error('Username','<p class="text-danger">','</p>');
							?>
						</div>
						
						<div class="form-group">
							<label>E-mail</label>
							<?php
							$inputAttb = array (
									'class' => 'form-control',
									'name' => 'Email',
									'value' => set_value ( 'Email' ),
									'placeholder' => 'Enter E-mail here' 
							);
							echo form_input ( $inputAttb );
							echo form_error('Email','<p class="text-danger">','</p>');
							?>
						</div>
						
						
						<div class="form-group">
						
                        	<label>User Group</label>
                            <?php 
                            $userGroupDropdown=array(
								'Admin'=>'Administrator',
								'MarExec'=>'Marketing Exec.'
                            );

                            $dropdownAttab= array(
                            'class' => 'form-control',
							'name' => 'Username'
							);

                            echo form_dropdown('UserGroup', $userGroupDropdown,set_select('UserGroup'),'class ="form-control"'); 
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












