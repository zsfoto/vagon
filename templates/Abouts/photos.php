	<?= $this->element('breadcrumb', ['title' => $text->name ?? __('Photos')]) ?>

	<main id="main">

		<!-- ======= Portfolio Section ======= -->
		<section id="portfolio" class="portfolio">
		  <div class="container">

			<div class="row" data-aos="fade-up">
			  <div class="col-lg-12 d-flex justify-content-center">
				<ul id="portfolio-flters">
				  <li data-filter="*" class="filter-active">Összes</li>
<?php foreach($photocategories as $photocategory) { ?>
				  <li data-filter=".filter-<?= $photocategory->id ?>"><?= $photocategory->name ?></li>
<?php } ?>

<?php /*
				  <li data-filter=".filter-app">Utastér</li>
				  <li data-filter=".filter-web">Teher vagon</li>
				  <li data-filter=".filter-card">Büfé</li>
*/ ?>
				</ul>
			  </div>
			</div>

			<div class="row portfolio-container" data-aos="fade-up">

<?php foreach($photos as $photo) { ?>
			  <div class="col-lg-4 col-md-6 portfolio-item filter-<?= $photo->id ?>">
				<img src="/img/photos/portfolio-<?= $photo->id ?>.jpg" class="img-fluid" alt="">
				<div class="portfolio-info">
				  <h4><?= $photo->name ?? __('Photo title') ?></h4>
				  <p><?= $photo->body ?? '' ?></p>
				  <a href="/img/photos/portfolio-<?= $photo->id ?>.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?= $photo->name ?? __('Photo title') ?>"><i class="bx bx-plus"></i></a>
				  <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
				</div>
			  </div>

<?php } ?>
<?php /*
			  <div class="col-lg-4 col-md-6 portfolio-item filter-web">
				<img src="/img/photos/portfolio-2.jpg" class="img-fluid" alt="">
				<div class="portfolio-info">
				  <h4>Web 3</h4>
				  <p>Web</p>
				  <a href="/img/photos/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
				  <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
				</div>
			  </div>
			  <div class="col-lg-4 col-md-6 portfolio-item filter-card">
				<img src="/img/photos/portfolio-3.jpg" class="img-fluid" alt="">
				<div class="portfolio-info">
				  <h4>App 2</h4>
				  <p>App</p>
				  <a href="/img/photos/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
				  <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
				</div>
			  </div>

			  <div class="col-lg-4 col-md-6 portfolio-item filter-card">
				<img src="/img/photos/portfolio-4.jpg" class="img-fluid" alt="">
				<div class="portfolio-info">
				  <h4>Card 2</h4>
				  <p>Card</p>
				  <a href="/img/photos/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
				  <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
				</div>
			  </div>

			  <div class="col-lg-4 col-md-6 portfolio-item filter-web">
				<img src="/img/photos/portfolio-5.jpg" class="img-fluid" alt="">
				<div class="portfolio-info">
				  <h4>Web 2</h4>
				  <p>Web</p>
				  <a href="/img/photos/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
				  <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
				</div>
			  </div>

			  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
				<img src="/img/photos/portfolio-6.jpg" class="img-fluid" alt="">
				<div class="portfolio-info">
				  <h4>App 3</h4>
				  <p>App</p>
				  <a href="/img/photos/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
				  <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
				</div>
			  </div>

			  <div class="col-lg-4 col-md-6 portfolio-item filter-card">
				<img src="/img/photos/portfolio-7.jpg" class="img-fluid" alt="">
				<div class="portfolio-info">
				  <h4>Card 1</h4>
				  <p>Card</p>
				  <a href="/img/photos/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
				  <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
				</div>
			  </div>

			  <div class="col-lg-4 col-md-6 portfolio-item filter-card">
				<img src="/img/photos/portfolio-8.jpg" class="img-fluid" alt="">
				<div class="portfolio-info">
				  <h4>Card 3</h4>
				  <p>Card</p>
				  <a href="/img/photos/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
				  <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
				</div>
			  </div>

			  <div class="col-lg-4 col-md-6 portfolio-item filter-web">
				<img src="/img/photos/portfolio-9.jpg" class="img-fluid" alt="">
				<div class="portfolio-info">
				  <h4>Web 3</h4>
				  <p>Web</p>
				  <a href="/img/photos/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
				  <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
				</div>
			  </div>
*/ ?>

			</div>

		  </div>
		</section><!-- End Portfolio Section -->

	</main><!-- End #main -->
