<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\About $about
 */
?>
<?php
use Cake\Core\Configure;
use Cake\I18n\FrozenTime;

$this->Form->setTemplates(Configure::read('Templates.form'));
$this->assign('title', __('Edit') . ' ' . __('About'));
?>
				<div id="form-row" class="abouts row">
					<div class="col-xs-12 col-xl-10">
						<div class="card mb-3">
							<div class="card-header">

								<div class="float-start">
									<h3><i id="card-icon" class="fa fa-edit fa-spin"></i> <?= __('Edit') ?>: <?= __('About') ?></h3>
									<?= __('The data marked with <span class="fw-bold text-danger">*</span> must be provided!') ?>
								</div>

								<div class="float-end ms-5">
									<?= $this->Html->link('<span class="btn btn-outline-secondary mt-1 me-1"><i class="fa fa-times"></i></span>',
										["controller" => "Abouts", "action" => "index", "_full" => true],
										["escape" => false, "role" => "button"]
									); ?>

								</div>

								<div class="form-tab float-end">
									<ul class="nav nav-tabs mt-1" id="myTab" role="tablist">
										<li class="nav-item" role="presentation">
											<button class="nav-link active" id="tabMain" data-bs-toggle="tab" data-bs-target="#tabPanelMain" type="button" role="tab" aria-controls="tabPanelMain" aria-selected="true"><?= __('Basic data') ?></button>
										</li>

<?php /*
										<li class="nav-item" role="presentation">
											<button class="nav-link" id="tabAddress" data-bs-toggle="tab" data-bs-target="#tabPanelAddress" type="button" role="tab" aria-controls="tabPanelAddress" aria-selected="false"><?= __('Address') ?></button>
										</li>
*/ ?>

										<li class="nav-item" role="presentation">
											<button class="nav-link" id="tabAboutUsBody" data-bs-toggle="tab" data-bs-target="#tabPanelAboutUsBody" type="button" role="tab" aria-controls="tabPanelAboutUsBody" aria-selected="false"><?= __('About Us Body') ?></button>
										</li>

<?php /*
										<li class="nav-item" role="presentation">
											<button class="nav-link" id="tabFeaturesBody" data-bs-toggle="tab" data-bs-target="#tabPanelFeaturesBody" type="button" role="tab" aria-controls="tabPanelFeaturesBody" aria-selected="false"><?= __('Features Body') ?></button>
										</li>

										<li class="nav-item" role="presentation">
											<button class="nav-link" id="tabPartnersBody" data-bs-toggle="tab" data-bs-target="#tabPanelPartnersBody" type="button" role="tab" aria-controls="tabPanelPartnersBody" aria-selected="false"><?= __('Partners Body') ?></button>
										</li>

										<li class="nav-item" role="presentation">
											<button class="nav-link" id="tabSecond" data-bs-toggle="tab" data-bs-target="#tabPanelSecond" type="button" role="tab" aria-controls="tabPanelSecond" aria-selected="false"><?= __('Memo') ?></button>
										</li>
										<li class="nav-item" role="presentation">
											<button class="nav-link" id="tabMore" data-bs-toggle="tab" data-bs-target="#tabPanelMore" type="button" role="tab" aria-controls="tabPanelMore" aria-selected="false"><?= __('More') ?></button>
										</li>
*/ ?>

									</ul>
								</div>

							</div>

							<?= $this->Form->create($about, ['id' => 'main-form']) ?>
							
								<?php //= $this->Form->control('_csrfToken', ['name' => '_csrfToken', 'type' => 'hidden', 'value' => $this->request->getAttribute('csrfToken')] ) ?>

								<div class="card-body">
								
									<div class="tab-content" id="tabContent">
										
										<div class="tab-pane fade show active" id="tabPanelMain" role="tabpanel" aria-labelledby="tabMain" tabindex="0">

<?php /*
											<!-- 2. STRING: lang: string  required -->
											<div class="mb-3 form-group row text required">
												<label class="col-form-label col-md-2 pt-1 text-start text-md-end required" for="lang"><?= __('Lang') ?>:</label>
												<div class="col-md-9">
													<?= $this->Form->control('lang', ['label' => __('Lang'), 'class' => 'form-control', 'empty' => false, 'readonly' => true, 'disabled' => true]); ?>

												</div>
											</div>
*/ ?>

											<!-- 2. STRING: name: string  required -->
											<div class="mb-3 form-group row text required">
												<label class="col-form-label col-md-2 pt-1 text-start text-md-end required" for="name"><?= __('Name') ?>:</label>
												<div class="col-md-9">
													<?= $this->Form->control('name', ['label' => __('Name'), 'class' => 'form-control', 'empty' => false, 'autofocus' => true]); ?>

												</div>
											</div>

											<!-- 2. STRING: phone: string  -->
											<div class="mb-3 form-group row text required">
												<label class="col-form-label col-md-2 pt-1 text-start text-md-end" for="phone"><?= __('Phone') ?>:</label>
												<div class="col-md-9">
													<?= $this->Form->control('phone', ['label' => __('Phone'), 'class' => 'form-control', 'empty' => true]); ?>

												</div>
											</div>

											<!-- 2. STRING: email: string  -->
											<div class="mb-3 form-group row text required">
												<label class="col-form-label col-md-2 pt-1 text-start text-md-end" for="email"><?= __('Email') ?>:</label>
												<div class="col-md-9">
													<?= $this->Form->control('email', ['label' => __('Email'), 'class' => 'form-control', 'empty' => true]); ?>

												</div>
											</div>

											<!-- 2. STRING: email: string  -->
											<div class="mb-3 form-group row text required">
												<label class="col-form-label col-md-2 pt-1 text-start text-md-end" for="email"><?= __('Address') ?>:</label>
												<div class="col-md-9">
													<?= $this->Form->control('address', ['label' => __('Address'), 'class' => 'form-control', 'empty' => true]); ?>

												</div>
											</div>

											<!-- 2. STRING: google_map_url: string  -->
											<div class="mb-3 form-group row text required">
												<label class="col-form-label col-md-2 pt-1 text-start text-md-end" for="google-map-url"><?= __('Google Map Url') ?>:</label>
												<div class="col-md-9">
													<?= $this->Form->control('google_map_url', ['label' => __('Google Map Url'), 'class' => 'form-control', 'empty' => true]); ?>

												</div>
											</div>

											<!-- 2. STRING: google_description: string  -->
											<div class="mb-3 form-group row text required">
												<label class="col-form-label col-md-2 pt-1 text-start text-md-end" for="google-description"><?= __('Google Description') ?>:</label>
												<div class="col-md-9">
													<?= $this->Form->control('google_description', ['label' => __('Google Description'), 'class' => 'form-control', 'empty' => true]); ?>

												</div>
											</div>

											<!-- 2. STRING: google_keywords: string  -->
											<div class="mb-3 form-group row text required">
												<label class="col-form-label col-md-2 pt-1 text-start text-md-end" for="google-keywords"><?= __('Google Keywords') ?>:</label>
												<div class="col-md-9">
													<?= $this->Form->control('google_keywords', ['label' => __('Google Keywords'), 'class' => 'form-control', 'empty' => true]); ?>

												</div>
											</div>

											<!-- 2. STRING: twitter_url: string  -->
											<div class="mb-3 form-group row text required">
												<label class="col-form-label col-md-2 pt-1 text-start text-md-end" for="twitter-url"><?= __('Twitter Url') ?>:</label>
												<div class="col-md-9">
													<?= $this->Form->control('twitter_url', ['label' => __('Twitter Url'), 'class' => 'form-control', 'empty' => true]); ?>

												</div>
											</div>

											<!-- 2. STRING: facebook_url: string  -->
											<div class="mb-3 form-group row text required">
												<label class="col-form-label col-md-2 pt-1 text-start text-md-end" for="facebook-url"><?= __('Facebook Url') ?>:</label>
												<div class="col-md-9">
													<?= $this->Form->control('facebook_url', ['label' => __('Facebook Url'), 'class' => 'form-control', 'empty' => true]); ?>

												</div>
											</div>

											<!-- 2. STRING: instagram_url: string  -->
											<div class="mb-3 form-group row text required">
												<label class="col-form-label col-md-2 pt-1 text-start text-md-end" for="instagram-url"><?= __('Instagram Url') ?>:</label>
												<div class="col-md-9">
													<?= $this->Form->control('instagram_url', ['label' => __('Instagram Url'), 'class' => 'form-control', 'empty' => true]); ?>

												</div>
											</div>

											<!-- 2. STRING: linkedin_url: string  -->
											<div class="mb-3 form-group row text required">
												<label class="col-form-label col-md-2 pt-1 text-start text-md-end" for="linkedin-url"><?= __('Linkedin Url') ?>:</label>
												<div class="col-md-9">
													<?= $this->Form->control('linkedin_url', ['label' => __('Linkedin Url'), 'class' => 'form-control', 'empty' => true]); ?>

												</div>
											</div>

											<!-- 2. STRING: about_us_title: string  -->
											<div class="mb-3 form-group row text required">
												<label class="col-form-label col-md-2 pt-1 text-start text-md-end" for="about-us-title"><?= __('About Us Title') ?>:</label>
												<div class="col-md-9">
													<?= $this->Form->control('about_us_title', ['label' => __('About Us Title'), 'class' => 'form-control', 'empty' => true]); ?>

												</div>
											</div>
											
											<!-- 2. STRING: about_us_body: string  -->
											<div class="mb-3 form-group row text required">
												<label class="col-form-label col-md-2 pt-1 text-start text-md-end" for="about-us-body"><?= __('About Us Body') ?>:</label>
												<div class="col-md-9">
													<?= $this->Form->control('about_us_body', ['label' => __('About Us Title'), 'class' => 'form-control', 'empty' => true]); ?>

												</div>
											</div>

											<!-- 2. STRING: main_title: string  -->
											<div class="mb-3 form-group row text required">
												<label class="col-form-label col-md-2 pt-1 text-start text-md-end" for="main-title"><?= __('Main Title') ?>:</label>
												<div class="col-md-9">
													<?= $this->Form->control('main_title', ['label' => __('Main Title'), 'class' => 'form-control', 'empty' => true]); ?>

												</div>
											</div>

											<hr>

											<!-- 2. STRING: main_body: string  -->
											<div class="mb-3 form-group row text required">
												<label class="col-form-label col-md-2 pt-1 text-start text-md-end" for="main-body"><?= __('Main Body') ?>:</label>
												<div class="col-md-9">
													<?= $this->Form->control('main_body', ['label' => __('Main Body'), 'class' => 'form-control', 'empty' => true]); ?>

												</div>
											</div>

											<!-- 2. STRING: main_button_title: string  -->
											<div class="mb-3 form-group row text required">
												<label class="col-form-label col-md-2 pt-1 text-start text-md-end" for="main-button-title"><?= __('Main Button Title') ?>:</label>
												<div class="col-md-9">
													<?= $this->Form->control('main_button_title', ['label' => __('Main Button Title'), 'class' => 'form-control', 'empty' => true]); ?>

												</div>
											</div>

											<!-- 2. STRING: main_button_link: string  -->
											<div class="mb-3 form-group row text required">
												<label class="col-form-label col-md-2 pt-1 text-start text-md-end" for="main-button-link"><?= __('Main Button Link') ?>:</label>
												<div class="col-md-9">
													<?= $this->Form->control('main_button_link', ['label' => __('Main Button Link'), 'class' => 'form-control', 'empty' => true]); ?>

												</div>
											</div>

											<hr>

											<!-- 2. STRING: our_services_title: string  -->
											<div class="mb-3 form-group row text required">
												<label class="col-form-label col-md-2 pt-1 text-start text-md-end" for="our-services-title"><?= __('Our Services Title') ?>:</label>
												<div class="col-md-9">
													<?= $this->Form->control('our_services_title', ['label' => __('Our Services Title'), 'class' => 'form-control', 'empty' => true]); ?>

												</div>
											</div>

											<!-- 2. STRING: our_services_body: string  -->
											<div class="mb-3 form-group row text required">
												<label class="col-form-label col-md-2 pt-1 text-start text-md-end" for="our-services-body"><?= __('Our Services Body') ?>:</label>
												<div class="col-md-9">
													<?= $this->Form->control('our_services_body', ['label' => __('Our Services Body'), 'class' => 'form-control', 'empty' => true]); ?>

												</div>
											</div>

											<!-- 2. STRING: our_customers_title: string  -->
											<div class="mb-3 form-group row text required">
												<label class="col-form-label col-md-2 pt-1 text-start text-md-end" for="our-customers-title"><?= __('Our Customers Title') ?>:</label>
												<div class="col-md-9">
													<?= $this->Form->control('our_customers_title', ['label' => __('Our Customers Title'), 'class' => 'form-control', 'empty' => true]); ?>

												</div>
											</div>

											<!-- 2. STRING: our_customers_body: string  -->
											<div class="mb-3 form-group row text required">
												<label class="col-form-label col-md-2 pt-1 text-start text-md-end" for="our-customers-body"><?= __('Our Customers Body') ?>:</label>
												<div class="col-md-9">
													<?= $this->Form->control('our_customers_body', ['label' => __('Our Customers Body'), 'class' => 'form-control', 'empty' => true]); ?>

												</div>
											</div>

											<!-- 2. STRING: features_title: string  -->
											<div class="mb-3 form-group row text required">
												<label class="col-form-label col-md-2 pt-1 text-start text-md-end" for="features-title"><?= __('Features Title') ?>:</label>
												<div class="col-md-9">
													<?= $this->Form->control('features_title', ['label' => __('Features Title'), 'class' => 'form-control', 'empty' => true]); ?>

												</div>
											</div>
											
											<!-- 2. STRING: email: string  -->
											<div class="mb-3 form-group row text required">
												<label class="col-form-label col-md-2 pt-1 text-start text-md-end" for="email"><?= __('Features body') ?>:</label>
												<div class="col-md-9">
													<?= $this->Form->control('features_body', ['label' => __('Features body'), 'class' => 'form-control', 'empty' => true]); ?>

												</div>
											</div>

											<!-- 2. STRING: features_subtitle_1: string  -->
											<div class="mb-3 form-group row text required">
												<label class="col-form-label col-md-2 pt-1 text-start text-md-end" for="features-subtitle-1"><?= __('Features Subtitle 1') ?>:</label>
												<div class="col-md-9">
													<?= $this->Form->control('features_subtitle_1', ['label' => __('Features Subtitle 1'), 'class' => 'form-control', 'empty' => true]); ?>

												</div>
											</div>

											<!-- 2. STRING: features_body_1: string  -->
											<div class="mb-3 form-group row text required">
												<label class="col-form-label col-md-2 pt-1 text-start text-md-end" for="features-body-1"><?= __('Features Body 1') ?>:</label>
												<div class="col-md-9">
													<?= $this->Form->control('features_body_1', ['label' => __('Features Body 1'), 'class' => 'form-control', 'empty' => true]); ?>

												</div>
											</div>

											<!-- 2. STRING: features_subtitle_2: string  -->
											<div class="mb-3 form-group row text required">
												<label class="col-form-label col-md-2 pt-1 text-start text-md-end" for="features-subtitle-2"><?= __('Features Subtitle 2') ?>:</label>
												<div class="col-md-9">
													<?= $this->Form->control('features_subtitle_2', ['label' => __('Features Subtitle 2'), 'class' => 'form-control', 'empty' => true]); ?>

												</div>
											</div>

											<!-- 2. STRING: features_body_2: string  -->
											<div class="mb-3 form-group row text required">
												<label class="col-form-label col-md-2 pt-1 text-start text-md-end" for="features-body-2"><?= __('Features Body 2') ?>:</label>
												<div class="col-md-9">
													<?= $this->Form->control('features_body_2', ['label' => __('Features Body 2'), 'class' => 'form-control', 'empty' => true]); ?>

												</div>
											</div>

											<!-- 2. STRING: features_subtitle_3: string  -->
											<div class="mb-3 form-group row text required">
												<label class="col-form-label col-md-2 pt-1 text-start text-md-end" for="features-subtitle-3"><?= __('Features Subtitle 3') ?>:</label>
												<div class="col-md-9">
													<?= $this->Form->control('features_subtitle_3', ['label' => __('Features Subtitle 3'), 'class' => 'form-control', 'empty' => true]); ?>

												</div>
											</div>

											<!-- 2. STRING: features_body_3: string  -->
											<div class="mb-3 form-group row text required">
												<label class="col-form-label col-md-2 pt-1 text-start text-md-end" for="features-body-3"><?= __('Features Body 3') ?>:</label>
												<div class="col-md-9">
													<?= $this->Form->control('features_body_3', ['label' => __('Features Body 3'), 'class' => 'form-control', 'empty' => true]); ?>

												</div>
											</div>

											<!-- 2. STRING: features_subtitle_4: string  -->
											<div class="mb-3 form-group row text required">
												<label class="col-form-label col-md-2 pt-1 text-start text-md-end" for="features-subtitle-4"><?= __('Features Subtitle 4') ?>:</label>
												<div class="col-md-9">
													<?= $this->Form->control('features_subtitle_4', ['label' => __('Features Subtitle 4'), 'class' => 'form-control', 'empty' => true]); ?>

												</div>
											</div>

											<!-- 2. STRING: features_body_4: string  -->
											<div class="mb-3 form-group row text required">
												<label class="col-form-label col-md-2 pt-1 text-start text-md-end" for="features-body-4"><?= __('Features Body 4') ?>:</label>
												<div class="col-md-9">
													<?= $this->Form->control('features_body_4', ['label' => __('Features Body 4'), 'class' => 'form-control', 'empty' => true]); ?>

												</div>
											</div>

											<!-- 2. STRING: partners_title: string  -->
											<div class="mb-3 form-group row text required">
												<label class="col-form-label col-md-2 pt-1 text-start text-md-end" for="partners-title"><?= __('Partners Title') ?>:</label>
												<div class="col-md-9">
													<?= $this->Form->control('partners_title', ['label' => __('Partners Title'), 'class' => 'form-control', 'empty' => true]); ?>

												</div>
											</div>

											<!-- 2. STRING: email: string  -->
											<div class="mb-3 form-group row text required">
												<label class="col-form-label col-md-2 pt-1 text-start text-md-end" for="email"><?= __('Partners body') ?>:</label>
												<div class="col-md-9">
													<?= $this->Form->control('partners_body', ['label' => __('Partners body'), 'class' => 'form-control', 'empty' => true]); ?>

												</div>
											</div>

										</div><!-- /.tabPanelMain -->
										
<?php /*										
										<!-- TabPanel: tabPanelAddress -->
										<!-- 10. TEXT: address: text  -->
										<div class="tab-pane fade" id="tabPanelAddress" role="tabpanel" aria-labelledby="tabAddress" tabindex="0">
											<div class="row mb-3">
												<div class="col-sm-12">
													<?= $this->Form->control('address', ['id' => 'address', 'label' => false, 'class' => 'summernote', 'empty' => true]); ?>

												</div>
											</div>
										</div><!-- /.TabPanel: tabPanelAddress -->
*/ ?>
<?php /*
										<!-- TabPanel: tabPanelAboutUsBody -->
										<!-- 10. TEXT: about_us_body: text  -->
										<div class="tab-pane fade" id="tabPanelAboutUsBody" role="tabpanel" aria-labelledby="tabAboutUsBody" tabindex="0">
											<div class="row mb-3">
												<div class="col-sm-12">
													<?= $this->Form->control('about_us_body', ['id' => 'about-us-body', 'label' => false, 'class' => 'summernote', 'empty' => true]); ?>

												</div>
											</div>
										</div><!-- /.TabPanel: tabPanelAboutUsBody -->

										<!-- TabPanel: tabPanelFeaturesBody -->
										<!-- 10. TEXT: features_body: text  -->
										<div class="tab-pane fade" id="tabPanelFeaturesBody" role="tabpanel" aria-labelledby="tabFeaturesBody" tabindex="0">
											<div class="row mb-3">
												<div class="col-sm-12">
													<?= $this->Form->control('features_body', ['id' => 'features-body', 'label' => false, 'class' => 'summernote', 'empty' => true]); ?>

												</div>
											</div>
										</div><!-- /.TabPanel: tabPanelFeaturesBody -->

										<!-- TabPanel: tabPanelPartnersBody -->
										<!-- 10. TEXT: partners_body: text  -->
										<div class="tab-pane fade" id="tabPanelPartnersBody" role="tabpanel" aria-labelledby="tabPartnersBody" tabindex="0">
											<div class="row mb-3">
												<div class="col-sm-12">
													<?= $this->Form->control('partners_body', ['id' => 'partners-body', 'label' => false, 'class' => 'summernote', 'empty' => true]); ?>

												</div>
											</div>
										</div><!-- /.TabPanel: tabPanelPartnersBody -->
*/ ?>

<?php /*
										<div class="tab-pane fade" id="tabPanelMore" role="tabpanel" aria-labelledby="tabMore" tabindex="0">
											<h3>More content come here...</h3>

										</div><!-- /.N.TAB -->
*/ ?>

									</div><!-- /.TAB PANEL -->
										
								</div>

								<div class="card-footer text-center">
									<?= $this->Form->button('<span class="btn-label"><i class="fa fa-save"></i></span>' . __('Save'), ["escapeTitle" => false, "type" => "submit", "class" => "btn btn-success me-4"]) ?>
									
									<?= $this->Html->link('<span class="btn-label"><i class="fa fa-arrow-up"></i></span>' . __("Cancel"),
										["controller" => "Abouts", "action" => "index", "_full" => true],
										["escape" => false, "role" => "button", "class" => "btn btn-outline-secondary"]
									); ?>
									
								</div>

							<?= $this->Form->end() ?>

						</div><!-- end card-->
                    </div>


				</div>			


<?php
	$this->Html->css(
		[
			"jeffAdmin5./assets/plugins/tempus-dominus-6.0.0/dist/css/tempus-dominus.min",
			"jeffAdmin5./assets/plugins/summernote-0.8.18-dist/summernote-lite.min",
			"jeffAdmin5./assets/plugins/bootstrap-select-main/docs/docs/dist/css/bootstrap-select.min",
			//"jeffAdmin5./assets/plugins/icheck-1.0.3/skins/all",

			// "jeffAdmin5./assets/plugins/select2-4.1.0-rc.0/dist/css/select2.min",	// If you want to use Select 2, but it's not finish!!!
			// "jeffAdmin5./assets/css/select2-bootstrap-5-theme.min",					// If you want to use Select 2, but it's not finish!!!
		],
		['block' => true]);


	$this->Html->script(
		[
			"jeffAdmin5./assets/js/popper",
			"jeffAdmin5./assets/plugins/tempus-dominus-6.0.0/dist/js/tempus-dominus.min",	// Must be loaded the popper.js !!
			"jeffAdmin5./assets/plugins/bootstrap-input-spinner-bs-5/src/bootstrap-input-spinner",
			"jeffAdmin5./assets/plugins/summernote-0.8.18-dist/summernote-lite.min",
			"jeffAdmin5./assets/plugins/summernote-0.8.18-dist/lang/summernote-hu-HU",
			//'jeffAdmin5./assets/plugins/jReadMore-master/dist/read-more.min',
			"jeffAdmin5./assets/plugins/bootstrap-select-main/docs/docs/dist/js/bootstrap-select.min",
			"jeffAdmin5./assets/plugins/bootstrap-select-main/docs/docs/dist/js/i18n/defaults-hu_HU.min",
			//"jeffAdmin5./assets/plugins/icheck-1.0.3/icheck.min",
			
			//'jeffAdmin5./assets/plugins/select2-4.1.0-rc.0/dist/js/select2.full.min',	// If you want to use Select 2, but it's not finish!!!
			//'jeffAdmin5./assets/plugins/select2-4.1.0-rc.0/dist/js/i18n/hu',			// If you want to use Select 2, but it's not finish!!!
		],
		['block' => 'scriptBottom']
	); ?>
		
<?php
	// SELECT: https://developer.snapappointments.com/bootstrap-select/examples/
?>

<?php $this->Html->scriptStart(['block' => 'javaScriptBottom']); ?>

	jeffAdminInitInputSpinner()
	jeffAdminInitSummerNote('about-us-body', 400, '<?= __("Here you can write the note") ?>...') // Init SummerNote for about_us_body.
	
<?php /*
	jeffAdminInitSummerNote('address', 400, '<?= __("Here you can write the note") ?>...') // Init SummerNote for address.
	jeffAdminInitSummerNote('features-body', 400, '<?= __("Here you can write the note") ?>...') // Init SummerNote for features_body.
	jeffAdminInitSummerNote('partners-body', 400, '<?= __("Here you can write the note") ?>...') // Init SummerNote for partners_body.
*/ ?>

	//jeffAdminInitICheck('icheckbox_flat-blue');

	$('#button-submit').click( function(){
		$('#main-form').submit();
	});			


<?php $this->Html->scriptEnd(['block' => 'javaScriptBottom']); ?>
