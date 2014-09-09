<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Celcius CRM - Change Password</title>

<style>
body {
	padding: 0;
	margin: 0;
}

.myFloatBar {
	bottom: 0;
	left: 0;
	width: 100%;
	position: fixed;
	background-color: #eee;
}
</style>

<!-- Bootstrap Core CSS -->
<link
	href="<?php echo base_url();?>application/views/includes/css/bootstrap.min.css"
	rel="stylesheet">

<!-- MetisMenu CSS -->
<link
	href="<?php echo base_url();?>application/views/includes/css/plugins/metisMenu/metisMenu.min.css"
	rel="stylesheet">

<!-- Custom CSS -->
<link
	href="<?php echo base_url();?>application/views/includes/css/sb-admin-2.css"
	rel="stylesheet">

<!-- Custom Fonts -->
<link
	href="<?php echo base_url();?>application/views/includes/font-awesome-4.1.0/css/font-awesome.min.css"
	rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="login-panel panel panel-default">
					<div class="panel-heading">
						<h2 class="panel-title-center">Celcius CRM</h2>
						<h3 class="panel-title">Change password</h3>
					</div>
					<div class="panel-body">
						<?php
						$attributes = array (
								'role' => 'form' 
						);
						echo form_open ( 'secure/changePassword' );
						?>
						<div class="form-group">
							<label>Username:</label> <?php echo $username; ?>
							
						</div>

						<div class="form-group">
							
								
								<?php
								$inputAttb = array (
										'class' => 'form-control',
										'name' => 'CurrentPassword',
										'placeholder' => 'Current Password',
										'type' => 'password',
										'autofocus' => NULL 
								);
								echo form_input ( $inputAttb );
								echo form_error ( 'CurrentPassword', '<p class="text-danger">', '</p>' );
								?>
						</div>

						<div class="form-group">
									
								<?php
								$inputAttb = array (
										'class' => 'form-control',
										'name' => 'NewPassword',
										'placeholder' => 'New Password',
										'type' => 'password',
										'autofocus' => NULL 
								);
								echo form_input ( $inputAttb );
								echo form_error ( 'NewPassword', '<p class="text-danger">', '</p>' );
								?>
						</div>
						<div class="form-group">
									
								<?php
								$inputAttb = array (
										'class' => 'form-control',
										'name' => 'ConfirmNew',
										'placeholder' => 'Confirm new Password ',
										'type' => 'password',
										'autofocus' => NULL 
								);
								echo form_input ( $inputAttb );
								echo form_error ( 'ConfirmNew', '<p class="text-danger">', '</p>' );
								?>
						</div>
						<?php if(!(is_null($message))):?>
						<div class="form-group">
							<div class="alert alert-danger">
                                <?php echo $message; ?>
                            </div>
						</div>	
						<?php endif;?>


						<div class="form-group">
							<?php
							$bttnAttb = array (
									'type' => 'submit',
									'class' => 'btn btn-lg btn-success btn-block' 
							);
							echo form_submit ( $bttnAttb, 'Login' );
							?>
						</div>
						
						<?php echo form_close(); ?>
						
					</div>
				</div>
			</div>
		</div>
		<div class="myFloatBar">
			A system by<a href="mailto:shenalsenarath@gmail.com"> Shenal Senarath</a>
			for <a href="http://www.celciusbedding.com/">Celcius (Pvt) LTD</a>
		</div>
	</div>

	<!-- jQuery Version 1.11.0 -->
	<script
		src="<?php echo base_url();?>application/views/includes/js/jquery-1.11.0.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script
		src="<?php echo base_url();?>application/views/includes/js/bootstrap.min.js"></script>

	<!-- Metis Menu Plugin JavaScript -->
	<script
		src="<?php echo base_url();?>application/views/includes/js/plugins/metisMenu/metisMenu.min.js"></script>

	<!-- Custom Theme JavaScript -->
	<script
		src="<?php echo base_url();?>application/views/includes/js/sb-admin-2.js"></script>

</body>

</html>
