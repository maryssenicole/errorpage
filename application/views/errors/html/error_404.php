<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
$error_controller = new CI_Controller();
$error_controller =& get_instance();
$error_controller->load->helper('url');
?>


<!DOCTYPE html>
<html>
<head>
	<title>404 Page Not Found</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/index.css">

</head>
<body>
	<div class="container">
		<div class="container-inner">
			<h3 class="homepage-header">Error - 404 Page Not Found</h3>
			<p class="homepage-text">The page you requested was not found. </p>
			<p class="button"><button class="homepage-button"><a href="<?php echo base_url(); ?>">Go back to homepage</a></button></p>
		</div>
		
	</div>
</body>
</html>