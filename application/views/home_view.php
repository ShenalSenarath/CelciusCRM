<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Celcius CRM- Home</title>
	

	

	
</head>
<body>
	<h1> Hotel Details </h1>
	<h2> Add Hotel </h2>	
	<?php echo form_open('home/addHotel'); ?>
	<p>
		<lable for="HotelName">Hotel Name: </lable>
		<input type="text" name="HotelName" id="title" />
	</p>
	
	<p>
		<lable for="Address">Hotel Address: </lable>
		<input type="text-area" name="Address" id="Address" />
	</p>

	<p>
		<input type="submit" value="Save" />
	</p>
	<?php echo form_close(); ?>

</body>
</html>
