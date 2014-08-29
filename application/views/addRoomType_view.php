
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
			<div class="panel-heading">Room or Suit Details</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-8">
						<?php
						$attributes = array (
								'role' => 'form' 
						);
						$hidden = array('HotelID' => $hotelDetails[0]->ID);
						echo form_open ( 'roomTypes/add/'.($hotelDetails[0]->ID),$attributes,$hidden );
						?>
						
						<div class="form-group">
							<label>Room Type</label>
							<?php
							$inputAttb = array (
									'class' => 'form-control',
									'name' => 'RoomType',
									'value' => set_value ( 'RoomType' ),
									'placeholder' => 'Enter Room Type here' 
							);
							echo form_input ( $inputAttb );
							echo form_error('RoomType','<p class="text-danger">','</p>');
							?>
						</div>
						<div class="form-group">
							<label>Count</label>
							<?php
							$inputAttb = array (
									'class' => 'form-control',
									'name' => 'Count',
									'value' => set_value ( 'Count' ),
									'placeholder' => 'Enter number of rooms here' 
							);
							echo form_input ( $inputAttb );
							echo form_error('Count','<p class="text-danger">','</p>');
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












