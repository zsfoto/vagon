<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Photo $photo
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
									<h3><i id="card-icon" class="fa fa-eye fa-spin"></i> <?= __('View') ?>: <?= __('Photo') ?></h3>
									<?= __('The data marked with <span class="fw-bold text-danger">*</span> must be provided!') ?>
								</div>
								<div class="float-end ms-5">
									<?= $this->Html->link('<span class="btn btn-outline-secondary mt-1 me-1"><i class="fa fa-times"></i></span>',
										["controller" => "Photos", "action" => "index", "_full" => true],
										["escape" => false, "role" => "button"]
									) ?>
								</div>

								<div class="form-tab float-end">
									<ul class="nav nav-tabs mt-1" id="myTab" role="tablist">
										<li class="nav-item" role="presentation">
											<button class="nav-link active" id="tab-first" data-bs-toggle="tab" data-bs-target="#tabPanelMain" type="button" role="tab" aria-controls="tabPanelMain" aria-selected="true"><?= __('Basic data') ?></button>
										</li>

										<li class="nav-item" role="presentation">
											<button class="nav-link" id="tabBody" data-bs-toggle="tab" data-bs-target="#tabPanelBody" type="button" role="tab" aria-controls="tabPanelBody" aria-selected="false"><?= __('Body') ?></button>
										</li>

<?php /*
										<li class="nav-item" role="presentation">
											<button class="nav-link" id="tab-more" data-bs-toggle="tab" data-bs-target="#tab-panel-more" type="button" role="tab" aria-controls="tab-panel-more" aria-selected="false"><?= __('More') ?></button>
										</li>
*/ ?>

										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><?= __('Related tables') ?></a>
											<ul class="dropdown-menu">
<?php if (!empty($photo->photocategories)) : ?>
												<li><?= $this->Html->link(__('Photocategories') . '...', ['controller' => 'Photocategories', 'action' => 'index', 'parent', 'photo', $photo->id], ['class' => 'dropdown-item']) ?></li>
<?php endif ?>
<?php if (!empty($photo->tests)) : ?>
												<li><?= $this->Html->link(__('Tests') . '...', ['controller' => 'Tests', 'action' => 'index', 'parent', 'photo', $photo->id], ['class' => 'dropdown-item']) ?></li>
<?php endif ?>
											</ul>
										</li>

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
													<?= $photo->id ?><!-- 0.a -->
												</div>
											</div>
<?php } ?>
											<div class="row"><!-- 2. -->
												<label class="col-sm-2 col-form-label p-1 text-start text-sm-end"><?= __('Lang') ?>:</label>
												<div class="col-sm-10 p-1">
													<?= h($photo->lang) ?>

												</div>
											</div>
											<div class="row"><!-- 2. -->
												<label class="col-sm-2 col-form-label p-1 text-start text-sm-end"><?= __('Name') ?>:</label>
												<div class="col-sm-10 p-1">
													<?= h($photo->name) ?>

												</div>
											</div>
<?php /*
											<div class="row"><!-- 6. -->
												<label class="col-sm-2 col-form-label p-1 text-start text-sm-end"><?= __('Body') ?>:</label>
												<div class="col-sm-10 p-1">
													<?= $this->Text->autoParagraph(h($photo->body)) ?>

												</div>
											</div>
*/ ?>
<?php if($config['show_counters']){ ?>
											<div class="row"><!-- counter helper -->
												<label class="col-sm-2 col-form-label p-1 text-start text-sm-end"><?= __('Photocategory Count') ?>:</label>
												<div class="col-sm-10 p-1">
													<?= $this->Number->format($photo->photocategory_count) ?><!-- 3.b -->
												</div>
											</div>
<?php } ?>


										</div><!-- /.1.TAB -->
										
										<!-- TAB for: Body text field -->
										<div class="tab-pane fade" id="tabPanelBody" role="tabpanel" aria-labelledby="tabBody" tabindex="0">
											<div class="row">
												<div class="col-sm-12">
													<div class="row">
														<div id="readMoreBody" class="col-sm-12 p-2 text read-more">
															<?= $this->Text->autoParagraph($photo->body) ?>

														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- /.TAB for: Body text field-->
										

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
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<div class="card mb-3">

							<div class="card-header">
							
								<div class="float-start">
									<h3><i class="fa fa-table"></i> <?= __('Related tables') ?></h3>
									<?= __('Here you can see the latest records related to the above item.') ?>
								</div>

								<div class="form-tab float-end">
									<nav>
										<div class="nav nav-tabs mt-1" id="nav-tab" role="tablist">
<?php if (!empty($photo->photocategories)): ?>
											<button class="nav-link active" id="nav-photocategories-tab" data-bs-toggle="tab" data-bs-target="#nav-photocategories" type="button" role="tab" aria-controls="nav-photocategories" aria-selected="true">
												<?= __('Photocategories') ?>
											</button>
<?php endif ?>
<?php if (!empty($photo->tests)): ?>
											<button class="nav-link" id="nav-tests-tab" data-bs-toggle="tab" data-bs-target="#nav-tests" type="button" role="tab" aria-controls="nav-tests" aria-selected="true">
												<?= __('Tests') ?>
											</button>
<?php endif ?>
										</div>
									</nav>
								</div>

							</div><!-- /card header -->
								
							<div class="card-body p-1 pb-0">

								<div class="tab-content" id="nav-tabContent">

<?php if (!empty($photo->photocategories)): ?>

									<div class="tab-pane fade show active p-0" id="nav-photocategories" role="tabpanel" aria-labelledby="nav-photocategories-tab" tabindex="0">

										<table class="table table-responsive-xl table-hover table-striped" style="">
											<thead class="thead-info">
												<tr>
<?php if($config['index_show_id']){ ?>
													<th class="number id"><?= __('Id') ?></th>
<?php } ?>
													<th class="please-change-type lang"><?= __('Lang') ?></th>
													<th class="string name"><?= __('Name') ?></th>
<?php if($config['index_show_visible']){ ?>
													<th class="boolean visible"><?= __('Visible') ?></th>
<?php } ?>
<?php if($config['index_show_pos']){ ?>
													<th class="number pos"><?= __('Pos') ?></th>
<?php } ?>
<?php if($config['index_show_counters']){ ?>
													<th class="number photo-count"><?= __('Photo Count') ?></th>
<?php } ?>
<?php if($config['index_show_created']){ ?>
													<th class="datetime created"><?= __('Created') ?></th>
<?php } ?>
<?php if($config['index_show_modified']){ ?>
													<th class="datetime modified"><?= __('Modified') ?></th>
<?php } ?>
													<th class="actions"><?= __('Actions') ?></th>
												</tr>
											</thead>
											<tbody>
												<?php foreach ($photo->photocategories as $photocategories) : ?>

												<tr>
<?php if($config['index_show_id']){ ?>
													<td class="number id" value="<?= $photocategories->id ?>"><?= h($photocategories->id) ?></td>
<?php } ?>
													<td class="please-change-type lang" value="<?= $photocategories->lang ?>"><?= h($photocategories->lang) ?></td>
													<td class="string name" value="<?= $photocategories->name ?>"><?= h($photocategories->name) ?></td>
<?php if($config['index_show_visible']){ ?>
													<td class="boolean visible" value="<?= $photocategories->visible ?>"><?= h($photocategories->visible) ?></td>
<?php } ?>
<?php if($config['index_show_pos']){ ?>
													<td class="number pos" value="<?= $photocategories->pos ?>"><?= h($photocategories->pos) ?></td>
<?php } ?>
<?php if($config['index_show_counters']){ ?>
													<td class="number photo-count" value="<?= $photocategories->photo_count ?>"><?= h($photocategories->photo_count) ?></td>
<?php } ?>
<?php if($config['index_show_created']){ ?>
													<td class="datetime created" value="<?= $photocategories->created ?>"><?= h($photocategories->created) ?></td>
<?php } ?>
<?php if($config['index_show_modified']){ ?>
													<td class="datetime modified" value="<?= $photocategories->modified ?>"><?= h($photocategories->modified) ?></td>
<?php } ?>
													<td class="actions">
														<?= $this->Html->link('<i class="fa fa-eye"></i>', ['controller' => 'Photocategories', 'action' => 'view', $photocategories->id], ["escape" => false, "role" => "button",  "class" => "btn btn-warning btn-sm", "data-toggle" => "tooltip", "data-placement" => "top", "title" => __('View this item'), "data-original-title" => ""]) ?><!-- view button -->
														<?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'Photocategories', 'action' => 'edit', $photocategories->id], ["escape" => false, "role" => "button", "class" => "btn btn-primary btn-sm", "data-toggle" => "tooltip", "data-placement" => "top", "title" => __('Edit this item'), "data-original-title" => ""]) ?><!-- edit button -->
														<?= $this->Form->postLink('<i class="fa fa-times"></i>', ['controller' => 'Photocategories', 'action' => 'delete', $photocategories->id], ["escape" => false, "role" => "button", "class" => "btn btn-danger btn-sm", "data-toggle" =>"tooltip", "data-placement" => "top", "title" => __('Delete this item'), "data-original-title" => "", "confirm" => __("Are you sure you want to delete # {0}?", $photocategories->id)]) ?><!-- delete button -->
													</td>
												</tr>
												<?php endforeach ?>

											</tbody>
										</table>

									</div><!-- /tab pane -->
<?php endif ?>
<?php if (!empty($photo->tests)): ?>

									<div class="tab-pane fade p-0" id="nav-tests" role="tabpanel" aria-labelledby="nav-tests-tab" tabindex="0">

										<table class="table table-responsive-xl table-hover table-striped" style="">
											<thead class="thead-info">
												<tr>
<?php if($config['index_show_id']){ ?>
													<th class="number id"><?= __('Id') ?></th>
<?php } ?>
													<th class="please-change-type photocategories-id"><?= __('Photocategories Id') ?></th>
													<th class="please-change-type photo-id"><?= __('Photo Id') ?></th>
													<th class="string name"><?= __('Name') ?></th>
													<th class="please-change-type szam"><?= __('Szam') ?></th>
													<th class="please-change-type logikai"><?= __('Logikai') ?></th>
													<th class="please-change-type datumido"><?= __('Datumido') ?></th>
													<th class="please-change-type datum"><?= __('Datum') ?></th>
													<th class="please-change-type ido"><?= __('Ido') ?></th>
													<th class="please-change-type szoveg2"><?= __('Szoveg2') ?></th>
													<th class="please-change-type szam2"><?= __('Szam2') ?></th>
													<th class="please-change-type datumido2"><?= __('Datumido2') ?></th>
													<th class="please-change-type datum2"><?= __('Datum2') ?></th>
													<th class="please-change-type ido2"><?= __('Ido2') ?></th>
													<th class="please-change-type logikai2"><?= __('Logikai2') ?></th>
<?php if($config['index_show_created']){ ?>
													<th class="datetime created"><?= __('Created') ?></th>
<?php } ?>
<?php if($config['index_show_modified']){ ?>
													<th class="datetime modified"><?= __('Modified') ?></th>
<?php } ?>
													<th class="actions"><?= __('Actions') ?></th>
												</tr>
											</thead>
											<tbody>
												<?php foreach ($photo->tests as $tests) : ?>

												<tr>
<?php if($config['index_show_id']){ ?>
													<td class="number id" value="<?= $tests->id ?>"><?= h($tests->id) ?></td>
<?php } ?>
													<td class="please-change-type photocategories-id" value="<?= $tests->photocategories_id ?>"><?= h($tests->photocategories_id) ?></td>
													<td class="please-change-type photo-id" value="<?= $tests->photo_id ?>"><?= h($tests->photo_id) ?></td>
													<td class="string name" value="<?= $tests->name ?>"><?= h($tests->name) ?></td>
													<td class="please-change-type szam" value="<?= $tests->szam ?>"><?= h($tests->szam) ?></td>
													<td class="please-change-type logikai" value="<?= $tests->logikai ?>"><?= h($tests->logikai) ?></td>
													<td class="please-change-type datumido" value="<?= $tests->datumido ?>"><?= h($tests->datumido) ?></td>
													<td class="please-change-type datum" value="<?= $tests->datum ?>"><?= h($tests->datum) ?></td>
													<td class="please-change-type ido" value="<?= $tests->ido ?>"><?= h($tests->ido) ?></td>
													<td class="please-change-type szoveg2" value="<?= $tests->szoveg2 ?>"><?= h($tests->szoveg2) ?></td>
													<td class="please-change-type szam2" value="<?= $tests->szam2 ?>"><?= h($tests->szam2) ?></td>
													<td class="please-change-type datumido2" value="<?= $tests->datumido2 ?>"><?= h($tests->datumido2) ?></td>
													<td class="please-change-type datum2" value="<?= $tests->datum2 ?>"><?= h($tests->datum2) ?></td>
													<td class="please-change-type ido2" value="<?= $tests->ido2 ?>"><?= h($tests->ido2) ?></td>
													<td class="please-change-type logikai2" value="<?= $tests->logikai2 ?>"><?= h($tests->logikai2) ?></td>
<?php if($config['index_show_created']){ ?>
													<td class="datetime created" value="<?= $tests->created ?>"><?= h($tests->created) ?></td>
<?php } ?>
<?php if($config['index_show_modified']){ ?>
													<td class="datetime modified" value="<?= $tests->modified ?>"><?= h($tests->modified) ?></td>
<?php } ?>
													<td class="actions">
														<?= $this->Html->link('<i class="fa fa-eye"></i>', ['controller' => 'Tests', 'action' => 'view', $tests->id], ["escape" => false, "role" => "button",  "class" => "btn btn-warning btn-sm", "data-toggle" => "tooltip", "data-placement" => "top", "title" => __('View this item'), "data-original-title" => ""]) ?><!-- view button -->
														<?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'Tests', 'action' => 'edit', $tests->id], ["escape" => false, "role" => "button", "class" => "btn btn-primary btn-sm", "data-toggle" => "tooltip", "data-placement" => "top", "title" => __('Edit this item'), "data-original-title" => ""]) ?><!-- edit button -->
														<?= $this->Form->postLink('<i class="fa fa-times"></i>', ['controller' => 'Tests', 'action' => 'delete', $tests->id], ["escape" => false, "role" => "button", "class" => "btn btn-danger btn-sm", "data-toggle" =>"tooltip", "data-placement" => "top", "title" => __('Delete this item'), "data-original-title" => "", "confirm" => __("Are you sure you want to delete # {0}?", $tests->id)]) ?><!-- delete button -->
													</td>
												</tr>
												<?php endforeach ?>

											</tbody>
										</table>

									</div><!-- /tab pane -->
<?php endif ?>

								</div><!-- /tab content -->

							</div><!-- /card body -->

						    <div class="card-footer">
								<!-- Bottom text! -->
							</div><!-- /card footer -->
							
						</div><!-- end card -->
                    </div><!-- end col -->
				</div><!-- end row -->
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
