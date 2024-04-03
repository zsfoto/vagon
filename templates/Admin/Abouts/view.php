<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\About $about
 */
use Cake\Core\Configure;

$prefix = strtolower( $this->request->getParam('prefix') ?? '' );
$controller = $this->request->getParam('controller');
$action = $this->request->getParam('action');

$global_config = (array) Configure::read('Theme.' . $prefix . '.config.template.view');
$local_config = [
	// #################################### More config params in: \JeffAdmin5\config\config.php ####################################
	//'show_related_tables'	=> false,
	//'show_id' 			=> false,	// for view form
	//'show_pos' 	 		=> false,	// for view form
	//'show_counters' 		=> false,	// for view form
	//'index_show_id' 		=> false,	// for related tables
	//'index_show_visible' 	=> false,	// for related tables
	//'index_show_counters'	=> false,	// for related tables
];
$config = array_merge($global_config, $local_config);
?>
				<div class="view row">
					<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
						<div class="card mb-3">

							<div class="card-header">
								<div class="float-start">
									<h3><i id="card-icon" class="fa fa-eye fa-spin"></i> <?= __('View') ?>: <?= __('About') ?></h3>
									<?= __('The data marked with <span class="fw-bold text-danger">*</span> must be provided!') ?>
								</div>
								<div class="float-end ms-5">
									<?= $this->Html->link('<span class="btn btn-outline-secondary mt-1 me-1"><i class="fa fa-times"></i></span>',
										["controller" => "Abouts", "action" => "index", "_full" => true],
										["escape" => false, "role" => "button"]
									) ?>
								</div>

								<div class="form-tab float-end">
									<ul class="nav nav-tabs mt-1" id="myTab" role="tablist">
										<li class="nav-item" role="presentation">
											<button class="nav-link active" id="tab-first" data-bs-toggle="tab" data-bs-target="#tabPanelMain" type="button" role="tab" aria-controls="tabPanelMain" aria-selected="true"><?= __('Basic data') ?></button>
										</li>

										<li class="nav-item" role="presentation">
											<button class="nav-link" id="tabAddress" data-bs-toggle="tab" data-bs-target="#tabPanelAddress" type="button" role="tab" aria-controls="tabPanelAddress" aria-selected="false"><?= __('Address') ?></button>
										</li>
										<li class="nav-item" role="presentation">
											<button class="nav-link" id="tabAboutUsBody" data-bs-toggle="tab" data-bs-target="#tabPanelAboutUsBody" type="button" role="tab" aria-controls="tabPanelAboutUsBody" aria-selected="false"><?= __('About Us Body') ?></button>
										</li>
										<li class="nav-item" role="presentation">
											<button class="nav-link" id="tabFeaturesBody" data-bs-toggle="tab" data-bs-target="#tabPanelFeaturesBody" type="button" role="tab" aria-controls="tabPanelFeaturesBody" aria-selected="false"><?= __('Features Body') ?></button>
										</li>
										<li class="nav-item" role="presentation">
											<button class="nav-link" id="tabPartnersBody" data-bs-toggle="tab" data-bs-target="#tabPanelPartnersBody" type="button" role="tab" aria-controls="tabPanelPartnersBody" aria-selected="false"><?= __('Partners Body') ?></button>
										</li>

<?php /*
										<li class="nav-item" role="presentation">
											<button class="nav-link" id="tab-more" data-bs-toggle="tab" data-bs-target="#tab-panel-more" type="button" role="tab" aria-controls="tab-panel-more" aria-selected="false"><?= __('More') ?></button>
										</li>
*/ ?>


									</ul>
								</div>

							</div><!-- /card header -->
							
							<div class="card-body">
								<form>
									<div class="tab-content" id="tabContent"><!-- T.1. -->
										
										<div class="tab-pane fade show active" id="tabPanelMain" role="tabpanel" aria-labelledby="tab-first" tabindex="0">
<?php if($config['show_id']){ ?>
											<div class="row"><!-- 3. -->
												<label class="col-sm-2 col-form-label p-1 text-start text-sm-end">#<?= __('id') ?>:</label>
												<div class="col-sm-10 p-1">
													<?= $about->id ?><!-- 0.a -->
												</div>
											</div>
<?php } ?>
											<div class="row"><!-- 2. -->
												<label class="col-sm-2 col-form-label p-1 text-start text-sm-end"><?= __('Lang') ?>:</label>
												<div class="col-sm-10 p-1">
													<?= h($about->lang) ?>

												</div>
											</div>
											<div class="row"><!-- 2. -->
												<label class="col-sm-2 col-form-label p-1 text-start text-sm-end"><?= __('Name') ?>:</label>
												<div class="col-sm-10 p-1">
													<?= h($about->name) ?>

												</div>
											</div>
											<div class="row"><!-- 2. -->
												<label class="col-sm-2 col-form-label p-1 text-start text-sm-end"><?= __('Phone') ?>:</label>
												<div class="col-sm-10 p-1">
													<?= h($about->phone) ?>

												</div>
											</div>
											<div class="row"><!-- 2. -->
												<label class="col-sm-2 col-form-label p-1 text-start text-sm-end"><?= __('Email') ?>:</label>
												<div class="col-sm-10 p-1">
													<?= h($about->email) ?>

												</div>
											</div>
											<div class="row"><!-- 2. -->
												<label class="col-sm-2 col-form-label p-1 text-start text-sm-end"><?= __('Google Map Url') ?>:</label>
												<div class="col-sm-10 p-1">
													<?= h($about->google_map_url) ?>

												</div>
											</div>
											<div class="row"><!-- 2. -->
												<label class="col-sm-2 col-form-label p-1 text-start text-sm-end"><?= __('Google Description') ?>:</label>
												<div class="col-sm-10 p-1">
													<?= h($about->google_description) ?>

												</div>
											</div>
											<div class="row"><!-- 2. -->
												<label class="col-sm-2 col-form-label p-1 text-start text-sm-end"><?= __('Google Keywords') ?>:</label>
												<div class="col-sm-10 p-1">
													<?= h($about->google_keywords) ?>

												</div>
											</div>
											<div class="row"><!-- 2. -->
												<label class="col-sm-2 col-form-label p-1 text-start text-sm-end"><?= __('Twitter Url') ?>:</label>
												<div class="col-sm-10 p-1">
													<?= h($about->twitter_url) ?>

												</div>
											</div>
											<div class="row"><!-- 2. -->
												<label class="col-sm-2 col-form-label p-1 text-start text-sm-end"><?= __('Facebook Url') ?>:</label>
												<div class="col-sm-10 p-1">
													<?= h($about->facebook_url) ?>

												</div>
											</div>
											<div class="row"><!-- 2. -->
												<label class="col-sm-2 col-form-label p-1 text-start text-sm-end"><?= __('Instagram Url') ?>:</label>
												<div class="col-sm-10 p-1">
													<?= h($about->instagram_url) ?>

												</div>
											</div>
											<div class="row"><!-- 2. -->
												<label class="col-sm-2 col-form-label p-1 text-start text-sm-end"><?= __('Linkedin Url') ?>:</label>
												<div class="col-sm-10 p-1">
													<?= h($about->linkedin_url) ?>

												</div>
											</div>
											<div class="row"><!-- 2. -->
												<label class="col-sm-2 col-form-label p-1 text-start text-sm-end"><?= __('About Us Title') ?>:</label>
												<div class="col-sm-10 p-1">
													<?= h($about->about_us_title) ?>

												</div>
											</div>
											<div class="row"><!-- 2. -->
												<label class="col-sm-2 col-form-label p-1 text-start text-sm-end"><?= __('Main Title') ?>:</label>
												<div class="col-sm-10 p-1">
													<?= h($about->main_title) ?>

												</div>
											</div>
											<div class="row"><!-- 2. -->
												<label class="col-sm-2 col-form-label p-1 text-start text-sm-end"><?= __('Main Body') ?>:</label>
												<div class="col-sm-10 p-1">
													<?= h($about->main_body) ?>

												</div>
											</div>
											<div class="row"><!-- 2. -->
												<label class="col-sm-2 col-form-label p-1 text-start text-sm-end"><?= __('Main Button Title') ?>:</label>
												<div class="col-sm-10 p-1">
													<?= h($about->main_button_title) ?>

												</div>
											</div>
											<div class="row"><!-- 2. -->
												<label class="col-sm-2 col-form-label p-1 text-start text-sm-end"><?= __('Main Button Link') ?>:</label>
												<div class="col-sm-10 p-1">
													<?= h($about->main_button_link) ?>

												</div>
											</div>
											<div class="row"><!-- 2. -->
												<label class="col-sm-2 col-form-label p-1 text-start text-sm-end"><?= __('Our Services Title') ?>:</label>
												<div class="col-sm-10 p-1">
													<?= h($about->our_services_title) ?>

												</div>
											</div>
											<div class="row"><!-- 2. -->
												<label class="col-sm-2 col-form-label p-1 text-start text-sm-end"><?= __('Our Services Body') ?>:</label>
												<div class="col-sm-10 p-1">
													<?= h($about->our_services_body) ?>

												</div>
											</div>
											<div class="row"><!-- 2. -->
												<label class="col-sm-2 col-form-label p-1 text-start text-sm-end"><?= __('Our Customers Title') ?>:</label>
												<div class="col-sm-10 p-1">
													<?= h($about->our_customers_title) ?>

												</div>
											</div>
											<div class="row"><!-- 2. -->
												<label class="col-sm-2 col-form-label p-1 text-start text-sm-end"><?= __('Our Customers Body') ?>:</label>
												<div class="col-sm-10 p-1">
													<?= h($about->our_customers_body) ?>

												</div>
											</div>
											<div class="row"><!-- 2. -->
												<label class="col-sm-2 col-form-label p-1 text-start text-sm-end"><?= __('Features Title') ?>:</label>
												<div class="col-sm-10 p-1">
													<?= h($about->features_title) ?>

												</div>
											</div>
											<div class="row"><!-- 2. -->
												<label class="col-sm-2 col-form-label p-1 text-start text-sm-end"><?= __('Features Subtitle 1') ?>:</label>
												<div class="col-sm-10 p-1">
													<?= h($about->features_subtitle_1) ?>

												</div>
											</div>
											<div class="row"><!-- 2. -->
												<label class="col-sm-2 col-form-label p-1 text-start text-sm-end"><?= __('Features Body 1') ?>:</label>
												<div class="col-sm-10 p-1">
													<?= h($about->features_body_1) ?>

												</div>
											</div>
											<div class="row"><!-- 2. -->
												<label class="col-sm-2 col-form-label p-1 text-start text-sm-end"><?= __('Features Subtitle 2') ?>:</label>
												<div class="col-sm-10 p-1">
													<?= h($about->features_subtitle_2) ?>

												</div>
											</div>
											<div class="row"><!-- 2. -->
												<label class="col-sm-2 col-form-label p-1 text-start text-sm-end"><?= __('Features Body 2') ?>:</label>
												<div class="col-sm-10 p-1">
													<?= h($about->features_body_2) ?>

												</div>
											</div>
											<div class="row"><!-- 2. -->
												<label class="col-sm-2 col-form-label p-1 text-start text-sm-end"><?= __('Features Subtitle 3') ?>:</label>
												<div class="col-sm-10 p-1">
													<?= h($about->features_subtitle_3) ?>

												</div>
											</div>
											<div class="row"><!-- 2. -->
												<label class="col-sm-2 col-form-label p-1 text-start text-sm-end"><?= __('Features Body 3') ?>:</label>
												<div class="col-sm-10 p-1">
													<?= h($about->features_body_3) ?>

												</div>
											</div>
											<div class="row"><!-- 2. -->
												<label class="col-sm-2 col-form-label p-1 text-start text-sm-end"><?= __('Features Subtitle 4') ?>:</label>
												<div class="col-sm-10 p-1">
													<?= h($about->features_subtitle_4) ?>

												</div>
											</div>
											<div class="row"><!-- 2. -->
												<label class="col-sm-2 col-form-label p-1 text-start text-sm-end"><?= __('Features Body 4') ?>:</label>
												<div class="col-sm-10 p-1">
													<?= h($about->features_body_4) ?>

												</div>
											</div>
											<div class="row"><!-- 2. -->
												<label class="col-sm-2 col-form-label p-1 text-start text-sm-end"><?= __('Partners Title') ?>:</label>
												<div class="col-sm-10 p-1">
													<?= h($about->partners_title) ?>

												</div>
											</div>
<?php /*
											<div class="row"><!-- 6. -->
												<label class="col-sm-2 col-form-label p-1 text-start text-sm-end"><?= __('Address') ?>:</label>
												<div class="col-sm-10 p-1">
													<?= $this->Text->autoParagraph(h($about->address)) ?>

												</div>
											</div>
*/ ?>
<?php /*
											<div class="row"><!-- 6. -->
												<label class="col-sm-2 col-form-label p-1 text-start text-sm-end"><?= __('About Us Body') ?>:</label>
												<div class="col-sm-10 p-1">
													<?= $this->Text->autoParagraph(h($about->about_us_body)) ?>

												</div>
											</div>
*/ ?>
<?php /*
											<div class="row"><!-- 6. -->
												<label class="col-sm-2 col-form-label p-1 text-start text-sm-end"><?= __('Features Body') ?>:</label>
												<div class="col-sm-10 p-1">
													<?= $this->Text->autoParagraph(h($about->features_body)) ?>

												</div>
											</div>
*/ ?>
<?php /*
											<div class="row"><!-- 6. -->
												<label class="col-sm-2 col-form-label p-1 text-start text-sm-end"><?= __('Partners Body') ?>:</label>
												<div class="col-sm-10 p-1">
													<?= $this->Text->autoParagraph(h($about->partners_body)) ?>

												</div>
											</div>
*/ ?>

										</div><!-- /.1.TAB -->
										
										<!-- TAB for: Address text field -->
										<div class="tab-pane fade" id="tabPanelAddress" role="tabpanel" aria-labelledby="tabAddress" tabindex="0">
											<div class="row">
												<div class="col-sm-12">
													<div class="row">
														<div id="readMoreAddress" class="col-sm-12 p-2 text read-more">
															<?= $this->Text->autoParagraph($about->address) ?>

														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- /.TAB for: Address text field-->
										
										<!-- TAB for: About Us Body text field -->
										<div class="tab-pane fade" id="tabPanelAboutUsBody" role="tabpanel" aria-labelledby="tabAboutUsBody" tabindex="0">
											<div class="row">
												<div class="col-sm-12">
													<div class="row">
														<div id="readMoreAbout Us Body" class="col-sm-12 p-2 text read-more">
															<?= $this->Text->autoParagraph($about->about_us_body) ?>

														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- /.TAB for: About Us Body text field-->
										
										<!-- TAB for: Features Body text field -->
										<div class="tab-pane fade" id="tabPanelFeaturesBody" role="tabpanel" aria-labelledby="tabFeaturesBody" tabindex="0">
											<div class="row">
												<div class="col-sm-12">
													<div class="row">
														<div id="readMoreFeatures Body" class="col-sm-12 p-2 text read-more">
															<?= $this->Text->autoParagraph($about->features_body) ?>

														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- /.TAB for: Features Body text field-->
										
										<!-- TAB for: Partners Body text field -->
										<div class="tab-pane fade" id="tabPanelPartnersBody" role="tabpanel" aria-labelledby="tabPartnersBody" tabindex="0">
											<div class="row">
												<div class="col-sm-12">
													<div class="row">
														<div id="readMorePartners Body" class="col-sm-12 p-2 text read-more">
															<?= $this->Text->autoParagraph($about->partners_body) ?>

														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- /.TAB for: Partners Body text field-->
										

<?php /*
											
										<div class="tab-pane fade" id="tab-panel-more" role="tabpanel" aria-labelledby="tab-more" tabindex="0">
											<div class="row"><!-- T.3. -->
												<div class="col-sm-12">
													<h3>Tab 3 content</h3>
													
												</div>
											</div>
										</div><!-- /.3.TAB -->
*/ ?>

									</div><!-- /.TAB PANEL -->

								</form>
							</div><!-- /card body -->
									
						    <div class="card-footer">
								<!--button type="submit" class="btn btn-outline-secondary">&larr;&nbsp;Vissza a listához</button-->
							</div><!-- /card footer -->

						</div><!-- end card-->
                    </div>

				</div>

<?php /*
	############################################################################################################################################################
	#################################################################                  #########################################################################
	#################################################################  Related tebles  #########################################################################
	#################################################################                  #########################################################################
	############################################################################################################################################################
*/ ?>
<?php if($config['show_related_tables']): ?>
<?php endif // $config['show_related_tables'] ?>

<?php
	$this->Html->css(
		[
			//// 'JeffAdmin5./assets/plugins/',
		],
		['block' => true]
	);

	$this->Html->script(
		[
			//// 'JeffAdmin5./assets/plugins/',
		],
		['block' => 'scriptBottom']
	);
?>

<?php $this->Html->scriptStart(['block' => 'javaScriptBottom']) ?>

<?php $this->Html->scriptEnd() ?>
