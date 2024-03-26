
    <!-- ======= Our Clients Section ======= -->
    <section id="clients" class="clients">
		<div class="container">

			<div class="section-title" data-aos="fade-up">
				<h2><?= $about->our_customers_title ?></h2>
				<p><?= $about->our_customers_body ?></p>
			</div>

			<div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">
<?php foreach($clients as $client) { ?>
				<div class="col-lg-3 col-md-4 col-xs-6">
					<div class="client-logo">
						<img src="/img/clients/client-<?= $client->id ?>.png" class="img-fluid" alt="<?= $client->name ?>">
					</div>
				</div>

<?php } ?>
			</div>
		</div>
    </section><!-- End Our Clients Section -->
