	<?= $this->element('breadcrumb', ['title' => $text->name ?? __('Contact')]) ?>
	
	<?php $this->assign('active', 'contact') ?>

	<main id="main">

		<!-- ======= Contact Section ======= -->
		<div class="map-section shadow">
			<iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2701.0045908641196!2d18.974492776712893!3d47.39234330274801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741e6c02c980863%3A0xf3da89cafefd0bad!2sBudapest%2C%20F%C3%A1y%20Ferenc%20u.%2020%2C%201225!5e0!3m2!1shu!2shu!4v1711445315138!5m2!1shu!2shu" frameborder="0" allowfullscreen></iframe>
		</div>

		<section id="contact" class="contact">
		  <div class="container">

			<div class="row justify-content-center" data-aos="fade-up">

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
				<form action="forms/contact.php" method="post" role="form" class="php-email-form">
				  <div class="row">
					<div class="col-md-6 form-group">
					  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
					</div>
					<div class="col-md-6 form-group mt-3 mt-md-0">
					  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
					</div>
				  </div>
				  <div class="form-group mt-3">
					<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
				  </div>
				  <div class="form-group mt-3">
					<textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
				  </div>
				  <div class="my-3">
					<div class="loading">Loading</div>
					<div class="error-message"></div>
					<div class="sent-message">Your message has been sent. Thank you!</div>
				  </div>
				  <div class="text-center"><button type="submit">Send Message</button></div>
				</form>
			  </div>

			</div>

		  </div>
		</section><!-- End Contact Section -->
	</main><!-- End #main -->