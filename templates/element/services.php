
		<!-- ======= Services Section ======= -->
		<section id="services" class="services">
			<div class="container">

<?php /*
				<div class="row">		
					<h2 class="text-center"><?= $about->our_services_title ?><h2>
				</div>
*/ ?>

				<div class="row">

					<div class="section-title" data-aos="fade-up">
						<h2><?= $about->our_services_title ?></h2>
						<p><?= $about->our_services_body ?></p>
					</div>

<?php 
$active = ' active';
foreach($services as $service){ 
?>		
					<div class="col-lg-4 col-md-6">
						<div class="icon-box" data-aos="fade-up"<?php if($service->delay > 0){ ?> data-aos-delay="<?= $service->delay ?>"<?php } ?>>
						<div class="icon"><i class="bi bi-card-checklist"></i></div>
						<h4 class="title"><?= $service->name ?></h4>
						<p class="description"><?= $service->body ?></p>
						</div>
					</div>
		  
<?php } ?>
				</div>

			</div>
		</section><!-- End Services Section -->
