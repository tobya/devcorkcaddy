<?php

	$SiteName = $_SERVER['HTTP_HOST'];
	$ClientIP = $_SERVER['REMOTE_ADDR'];
	$HTTPSStatus = $_SERVER['HTTPS'];

	$isHTTPS = false;
	if ($HTTPSStatus == 'on') {
		$isHTTPS = true;
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome to <?php echo $SiteName; ?></title>
	<link rel="stylesheet" type="text/css" href="/fa/css/font-awesome.min.css">
</head>
<body>
<h2>

Welcome to <?php echo $SiteName; ?>
</h2>

<fieldset>
	<legend>Status</legend>
	<ul>	
	<?php 
		if ($isHTTPS ){
			echo "<li> <h1> Website Traffic Encrypted </h1><i class='fa fa-lock fa-5x' aria-hidden='true'></i>";
		} else {
			echo "<li> <h1> Website Traffic Not Encrypted </h1><i class='fa fa-unlock fa-5x' aria-hidden='true'></i>";
		} 
	?>
	<li><h2>Client IP:<?php echo $ClientIP; 	?>		</h2>
	</ul>
</fieldset>

<img width="340" src=https://caddyserver.com/resources/images/brand/served-with-caddy-black.png>

</body>
</html>

