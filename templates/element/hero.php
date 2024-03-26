  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <div class="carousel-inner" role="listbox">

<?php 
$active = ' active';
foreach($slides as $slide){ 
?>
        <!-- Slide <?= $slide->id ?> -->
        <div class="carousel-item<?= $active ?>" style="background-image: url(/img/slide/slide-<?= $slide->id ?>.jpg);">
			<div class="carousel-container">
				<div class="carousel-content animate__animated animate__fadeInUp">
					<h2><?= $slide->name ?></h2>
					<p><?= $slide->body ?></p>
					<div class="text-center"><a href="<?= $slide->button_link ?>" class="btn-get-started"><?= $slide->button_title ?></a></div>
				</div>
			</div>
        </div>
		
<?php
	$active = '';
}
?>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero -->