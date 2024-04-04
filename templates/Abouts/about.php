	<?= $this->element('breadcrumb', ['title' => $text->name ?? __('About us')]) ?>
	<?php $this->assign('active', 'about') ?>
	
	<main id="main">

		<!-- ======= About Us Section ======= -->
		<section id="about-us" class="about-us">
		  <div class="container">

			<div class="row no-gutters">
			  <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right"></div>

			  <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
				<div class="content d-flex flex-column<?php // justify-content-center ?>">
					<h3 data-aos="fade-down"><?= $about->about_us_title  ?? __('About us') ?></h3>
					<p data-aos="fade-up" data-aos-delay="200">
						<?= $about->about_us_body ?? __('Missing text') ?>
					</p>

	<?php /*
				  <h3 data-aos="fade-up">ABOUT - Voluptatem dignissimos provident quasi</h3>
				  <p data-aos="fade-up">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
				  </p>
				  <div class="row">
					<div class="col-md-6 icon-box" data-aos="fade-up">
					  <i class="bx bx-receipt"></i>
					  <h4>Corporis voluptates sit</h4>
					  <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
					</div>
					<div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
					  <i class="bx bx-cube-alt"></i>
					  <h4>Ullamco laboris nisi</h4>
					  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
					</div>
					<div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
					  <i class="bx bx-images"></i>
					  <h4>Labore consequatur</h4>
					  <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
					</div>
					<div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
					  <i class="bx bx-shield"></i>
					  <h4>Beatae veritatis</h4>
					  <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
					</div>
				  </div>
	*/ ?>
				</div><!-- End .content-->
			  </div>
			</div>

		  </div>
		</section><!-- End About Us Section -->


		<!-- ======= Features Section ======= -->
		<section id="features" class="features">
		  <div class="container">

			<div class="section-title" data-aos="fade-up">
			  <h2><?= $about->features_title ?></h2>
			  <p><?= $about->features_body ?></p>
			</div>

			<div class="row">
			  <div class="col-lg-5 mb-5 mb-lg-0" data-aos="fade-right">
				<ul class="nav nav-tabs flex-column">
				  <li class="nav-item">
					<a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
					  <h4><?= $about->features_subtitle_1 ?></h4>
					  <p><?= $about->features_body_1 ?></p>
					</a>
				  </li>
				  <li class="nav-item mt-2">
					<a class="nav-link" data-bs-toggle="tab" href="#tab-2">
					  <h4><?= $about->features_subtitle_2 ?></h4>
					  <p><?= $about->features_body_2 ?></p>
					</a>
				  </li>
				  <li class="nav-item mt-2">
					<a class="nav-link" data-bs-toggle="tab" href="#tab-3">
					  <h4><?= $about->features_subtitle_3 ?></h4>
					  <p><?= $about->features_body_3 ?></p>
					</a>
				  </li>
				  <li class="nav-item mt-2">
					<a class="nav-link" data-bs-toggle="tab" href="#tab-4">
					  <h4><?= $about->features_subtitle_4 ?></h4>
					  <p><?= $about->features_body_4 ?></p>
					</a>
				  </li>
				</ul>
			  </div>
			  <div class="col-lg-7 ml-auto" data-aos="fade-left" data-aos-delay="100">
				<div class="tab-content">
				  <div class="tab-pane active show" id="tab-1">
					<figure>
					  <img src="/img/about/about-1.jpg" alt="" class="img-fluid">
					</figure>
				  </div>
				  <div class="tab-pane" id="tab-2">
					<figure>
					  <img src="/img/about/about-2.jpg" alt="" class="img-fluid">
					</figure>
				  </div>
				  <div class="tab-pane" id="tab-3">
					<figure>
					  <img src="/img/about/about-3.jpg" alt="" class="img-fluid">
					</figure>
				  </div>
				  <div class="tab-pane" id="tab-4">
					<figure>
					  <img src="/img/about/about-4.jpg" alt="" class="img-fluid">
					</figure>
				  </div>
				</div>
			  </div>
			</div>

		  </div>
		</section><!-- End Features Section -->

	</main><!-- End #main -->
