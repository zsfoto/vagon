  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <div class="carousel-inner" role="listbox">

<?php 
$active = ' active';
$photo_count = 0;
foreach($slides as $slide){ 
?>
<?php if(file_exists(WWW_ROOT . 'img' . DS . 'slide' . DS . 'slide-' . $slide->id . '.jpg')) { ?>
<?php 	$photo_count++ ?>
        <!-- Slide <?= $slide->id ?> -->
        <div class="carousel-item<?= $active ?>" style="background-image: url(/img/slide/slide-<?= $slide->id ?>.jpg);">
			<div class="carousel-container">
				<div class="carousel-content animate__animated animate__fadeInUp">
<?php if(isset($slide->name) && $slide->name !== '') { ?>
					<h2><?= $slide->name ?></h2>
<?php } ?>
<?php if(isset($slide->body) && $slide->body !== '') { ?>
					<p><?= $slide->body ?></p>
<?php } ?>
<?php if(isset($slide->button_link) && $slide->button_link !== '') { ?>
					<div class="text-center"><a href="<?= $slide->button_link ?>" class="btn-get-started"><?= $slide->button_title ?></a></div>
<?php } ?>
				</div>
			</div>
        </div>
<?php } else { ?>
	<h1 class="text-center p-5 m-5"><?= __('Missing photo') ?></h1>
<?php 	break; ?>
<?php } ?>

<?php
	$active = '';
}
?>
      </div>
<?php 

if($photo_count > 1) { ?>
      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
<?php } ?>

    </div>
  </section><!-- End Hero -->