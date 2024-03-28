<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<?= $this->Html->meta('csrfToken', $this->request->getAttribute('csrfToken')); ?>

	<title>Vagontakarítás | <?= $this->fetch('title') ?></title>
	<meta content="<?= $about->google_description ?>" name="description">
	<meta content="<?= $about->google_keywords ?>" name="keywords">

	<!-- Favicons -->
	<link rel="apple-touch-icon" sizes="180x180" href="/img/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">
	<link rel="manifest" href="/img/site.webmanifest">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<?= $this->Html->css([
		'/vendor/animate.css/animate.min',
		'/vendor/aos/aos',
		'/vendor/bootstrap/css/bootstrap.min',
		'/vendor/bootstrap-icons/bootstrap-icons',
		'/vendor/boxicons/css/boxicons.min',
		//'/vendor/remixicon/remixicon',
		'/vendor/glightbox/css/glightbox.min',
		'/vendor/swiper/swiper-bundle.min',
		'/vendor/simple-notify-master/dist/simple-notify',
		'/css/style',
	]); ?>

	<?= $this->fetch('css') ?>

<?php /*
  <!-- =======================================================
  * Template Name: Flattern
  * Template URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
*/ ?>
</head>
<body>

	<?= $this->element('topbar') ?>
	
	<?= $this->element('header') ?>

	<?= $this->fetch('content') ?>

	<?= $this->element('footer') ?>

	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	<?= $this->Html->script([
		'/vendor/aos/aos',
		'/vendor/bootstrap/js/bootstrap.bundle.min',
		'/vendor/jquery/dist/jquery.min',
		//'/js/jquery.min',
		'/vendor/glightbox/js/glightbox.min',
		'/vendor/isotope-layout/isotope.pkgd.min',
		'/vendor/swiper/swiper-bundle.min',
		'/vendor/waypoints/noframework.waypoints',
		'/vendor/simple-notify-master/dist/simple-notify.min',
		'/js/main'
	]); ?>

<?= $this->fetch('scriptBottom'); ?>

<?= $this->fetch('javaScriptBottom'); ?>

<?php if (!empty($this->getRequest()->getSession()->read('Flash'))) { ?>
	<script>
<?= $this->element('script_flash') ?>
<?= $this->Flash->render() ?>
	</script>
<?php } ?>

</body>

</html>
