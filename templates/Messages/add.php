	<?= $this->element('breadcrumb', ['title' => $text->name ?? __('Contact')]) ?>
	
	<?php $this->assign('active', 'contact') ?>

	<main id="main">

		<!-- ======= Contact Section ======= -->
<?php if(isset($about->google_map_url) && $about->google_map_url != '') { ?>
		<div class="map-section shadow">
			<iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2701.0045908641196!2d18.974492776712893!3d47.39234330274801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741e6c02c980863%3A0xf3da89cafefd0bad!2sBudapest%2C%20F%C3%A1y%20Ferenc%20u.%2020%2C%201225!5e0!3m2!1shu!2shu!4v1711445315138!5m2!1shu!2shu" frameborder="0" allowfullscreen></iframe>
		</div>
<?php } ?>

		<section id="contact" class="contact">
		  <div class="container">

			<div class="row justify-content-center" data-aos="fade-down">
			  <div class="col-lg-10">
				<div class="info-wrap shadow">
					<div class="row">
						<div class="col-lg-4 info">
							<i class="bi bi-geo-alt"></i>
							<h4>Location:</h4>
							<p><?= $about->address ?></p>
						</div>

						<div class="col-lg-4 info mt-4 mt-lg-0">
							<i class="bi bi-envelope"></i>
							<h4>Email:</h4>
							<p><?= $about->email ?></p>
						</div>

						<div class="col-lg-4 info mt-4 mt-lg-0">
							<i class="bi bi-phone"></i>
							<h4>Call:</h4>
							<p><?= $about->phone ?></p>
						</div>
					</div>
				</div>
			  </div>
			</div>

			<div class="row mt-5 justify-content-center" data-aos="fade-up">
			  <div class="col-lg-10">
				<?= $this->Form->create($message, ['class' => 'php-email-form']) ?>
				  <div class="row">
					<div class="col-md-6 form-group">
						<?= $this->Form->control('name', ['class' => 'form-control', 'placeholder' => __('Your Name'), 'required' => 0]) ?>
					</div>
					<div class="col-md-6 form-group mt-3 mt-md-0">
						<?= $this->Form->control('email', ['class' => 'form-control', 'placeholder' => __('Your Email'), 'required' => 0]) ?>
					</div>
				  </div>
				  <div class="form-group mt-3">
						<?= $this->Form->control('subject', ['class' => 'form-control', 'placeholder' => __('Subject'), 'required' => 0]) ?>
				  </div>
				  <div class="form-group mt-3">
					<?= $this->Form->control('body', ['class' => 'form-control', 'placeholder' => __('Message'), 'rows' => '5', 'required' => 0]) ?>
				  </div>

				  <div class="form-group mt-3">
					<label for="captcha"><?= __('Security code (CAPTCHA)') ?>:</label>
					<div class="col-sm-10" style="font-family: Consolas, Menlo, Monaco, 'Lucida Console', 'Liberation Mono', 'DejaVu Sans Mono', 'Bitstream Vera Sans Mono', 'Courier New', monospace, serif; font-size: 12px; border: 1px solid red; width: 100%; line-height: 5px; padding: 10px; text-align: center; font-size: 10px; letter-spacing: -1px; background: red;">
						<?= $captcha ?>
					</div>
				  </div>
				  <div class="form-group mt-3">
						<?= $this->Form->control('captcha', ['class' => 'form-control', 'placeholder' => __('Please write here the security code from above'), 'required' => 0]) ?>
				  </div>

<?php /*
				  <div class="my-3">
					<div class="loading">Loading</div>
					<div class="error-message"></div>
					<div class="sent-message">Your message has been sent. Thank you!</div>
				  </div>
*/ ?>
				  <div class="text-center">
					<?= $this->Form->button(__('Send Message')) ?>
				  </div>
				</form>
			  </div>

			</div>

		  </div>
		</section><!-- End Contact Section -->
	</main><!-- End #main -->