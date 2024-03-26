<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\About $about
 */
?>
	<?php $this->assign('active', 'home') ?>
	<?= $this->element('hero') ?>

	<main id="main">

		<?= $this->element('cta') ?>
		<?= $this->element('services') ?>
		<?= $this->element('clients') ?>

	</main><!-- End #main -->
