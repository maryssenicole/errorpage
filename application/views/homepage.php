<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
$homepage_controller = new CI_Controller();
$homepage_controller =& get_instance();
$homepage_controller->load->helper('url');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Test Home Page</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/index.css">

</head>
<body>
	<div class="container">
		<div class="container-inner">
			<h3 class="homepage-header">Test Home Page</h3>
			<p class="homepage-text">Lorem ipsum dolor sit amet, diam odio quisque at a. Magna non et ac urna. Id blandit, nonummy sit a mus ut eros. Metus mi metus viverra dapibus eros, nulla sit vitae suspendisse odio, ut vehicula venenatis sed quis, etiam vitae sed id sociis ut rutrum, et amet consectetuer neque in.</p>
			<p class="button"><button class="homepage-button"><a href="sample-404">Sample 404 Page</a></button></p>
		</div>
		
	</div>
</body>
</html>