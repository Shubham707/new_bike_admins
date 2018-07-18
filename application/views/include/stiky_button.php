<!DOCTYPE html>
<html>
<head>
	<title>
		Sticky Button
	</title>
</head>

	<style type="text/css">
		
		body{
			margin: 0;
			padding: 0;
		}
	
		.sticky-button{
			position: fixed;
			top: 50%;
			right: -5%;
			color: white;
			font-weight:bold;
			padding: 10px;
			background: #ed872d;
			transform: rotate(90deg);
			font-family: sans-serif;
			border-radius: 15px;
		}
		
		
		.sticky-button h3{
			color: white;
		}
		
	</style>
<body>
	<div>
		<div class="sticky-button">
			<a href="<?php echo base_url('service-request');?>"><h3>Request Service</h3></a>
		</div>
	</div>
</body>
</html>