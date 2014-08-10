<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Celcius CRM - Login</title>

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
						<h2 class="panel-title-center">Welcome to Celcius CRM</h2>
						<h3 class="panel-title">Please login to continue</h3>
					</div>
					<div class="panel-body">
						<form role="form">
							<fieldset>
								<div class="form-group">
									<input class="form-control" placeholder="E-mail" name="email"
										type="email" autofocus>
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Password"
										name="password" type="password" value="">
								</div>
								<div class="checkbox">
									<label> <input name="remember" type="checkbox"
										value="Remember Me">Remember Me
									</label>
								</div>
								<!-- Change this to a button or input when using this as a form -->
								<a href="auth/validateCredentials"
									class="btn btn-lg btn-success btn-block">Login</a>
							</fieldset>
						</form>
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
