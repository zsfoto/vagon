<?php if(isset($about->main_title) && isset($about->main_body) && $about->main_title != '' && $about->main_body != '') { ?>
		<!-- ======= Cta Section ======= -->
		<section id="cta" class="cta">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 text-center text-lg-left">
						<h3><?= $about->main_title ?></h3>
						<p><?= $about->main_body ?></p>
					</div>
<?php if(isset($about->main_button_link) && isset($about->main_button_title) && $about->main_button_link != '' && $about->main_button_title != '') { ?>
					<div class="col-lg-3 cta-btn-container text-center">
						<a class="cta-btn align-middle" href="<?= $about->main_button_link ?>"><?= $about->main_button_title ?></a>
					</div>
<?php } ?>

				</div>
			</div>
		</section><!-- End Cta Section -->
<?php } ?>
