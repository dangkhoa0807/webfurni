<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="/Black Gold Illustration Gear Logo.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="css/app.css" rel="stylesheet">

		
		<title>Furni Technology </title>
	</head>
	

	<body>

		 <?php echo $__env->make('clients.template.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		
		
		<?php echo $__env->yieldContent('product'); ?>
		
		<?php echo $__env->yieldContent('whyChooseSection'); ?>
		
		<?php echo $__env->yieldContent('weHelp'); ?>
		
		<?php echo $__env->yieldContent('populorProduct'); ?>

		<?php echo $__env->yieldContent('blog'); ?>

	


		<?php echo $__env->make('clients.template.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>
<?php /**PATH C:\laragon\www\webfunni\webfurni\resources\views/layouts/client.blade.php ENDPATH**/ ?>