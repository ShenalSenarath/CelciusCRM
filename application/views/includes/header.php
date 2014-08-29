<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="B2B CRM for Celcius">
<meta name="author" content="">

<title>Celcius CRM - <?php echo $title ?></title>
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





	<div id="wrapper">

		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-static-top" role="navigation"
			style="margin-bottom: 0">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html">Celcius CRM</a>
			</div>
			<!-- /.navbar-header -->

			<ul class="nav navbar-top-links navbar-right">


				<!-- /.dropdown -->
				<li class="dropdown"><a class="dropdown-toggle"
					data-toggle="dropdown" href="#"> <i class="fa fa-user fa-fw"></i>
						<?php echo $Username ?> <i class="fa fa-caret-down"></i>
				</a>
					<ul class="dropdown-menu dropdown-user">
						<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
						</li>
						<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a></li>
						<li class="divider"></li>
						<li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i>
								Logout</a></li>
					</ul> <!-- /.dropdown-user --></li>
				<!-- /.dropdown -->
			</ul>
			<!-- /.navbar-top-links -->

			<div class="navbar-default sidebar" role="navigation">
				<div class="sidebar-nav navbar-collapse">
					<ul class="nav" id="side-menu">

						<li><?php echo anchor('home', '<i class="fa fa-home fa-fw"></i> Home');?>
						</li>
						<li><a href="#"><i class="fa fa-link fa-fw"></i> Hotel Chains<span
								class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li><?php echo anchor('hotelChains', 'View Hotel Chains');?></li>
								<li><?php echo anchor('hotelChains/add', 'Add Hotel Chain');?></li>
							</ul> <!-- /.nav-second-level --></li>
						<li><a href="#"><i class="fa fa-building fa-fw"></i> Hotels<span
								class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li><?php echo anchor('hotels', 'View Hotels');?></li>
								<li><?php echo anchor('hotels/add', 'Add Hotel');?></li>
							</ul> <!-- /.nav-second-level --></li>

						<li><a href="#"><i class="fa fa-cubes fa-fw"></i> Products<span
								class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li><?php echo anchor('products', 'View Products');?></li>
								<li><?php echo anchor('products/add', 'Add Product');?></li>
								<li><?php echo anchor('productTypes/add', 'Add Product Type');?></li>
							</ul> <!-- /.nav-second-level --></li>
						<li><a href="#"><i class="fa fa-phone-square fa-fw"></i> Contacts<span
								class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li><?php echo anchor('contacts', 'View Contacts');?></li>
								<li><?php echo anchor('contacts/add', 'Add Contact');?></li>
							</ul> <!-- /.nav-second-level --></li>
						<li><a href="#"><i class="fa fa-users fa-fw"></i> Users<span
								class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li><a href="flot.html">View Users</a></li>
								<li><a href="morris.html">Add Users</a></li>
							</ul> <!-- /.nav-second-level --></li>




					</ul>


				</div>
				<!-- /.sidebar-collapse -->
			</div>
			<!-- /.navbar-static-side -->
		</nav>

		<!-- Page Content -->
		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header"><?php echo $title ?></h1>