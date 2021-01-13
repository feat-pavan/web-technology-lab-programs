<html>
	<head>
	<style>
	p{
		color:yellow;
		font-size:90px;
		position:absolute;
		top:40%;
		left:50%;
		transform: translate(-50%,-50%);
	}
	body{ background-color:maroon; }
	}
	</style>
	</head>
<p>

<?php
	date_default_timezone_set('Asia/Kolkata');
	echo date('d/m/y  h:i:s A');
	header("Refresh: 1");
?></p></html>