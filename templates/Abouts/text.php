<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\About $about
 */
?>
	<?= $this->element('breadcrumb', ['title' => $text->name ?? __('Text')]) ?>

	<main id="main">

		<!-- ======= Our Team Section ======= -->
		<section id="team" class="team section-bg">
		  <div class="container">

			<div class="section-title">
			  <h2 data-aos="fade-up"><?= $text->name ?? __('Text title') ?></h2>
			  <p data-aos="fade-up" data-aos-delay="200"><?= $text->body ?? __('Text place...') ?></p>
			</div>

		  </div>
		</section><!-- End Our Team Section -->

	</main><!-- End #main -->
