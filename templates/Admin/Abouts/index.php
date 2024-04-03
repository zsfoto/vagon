<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\About> $abouts
 */
use Cake\Core\Configure;

$session = $this->getRequest()->getSession();
$prefix = strtolower( $this->request->getParam('prefix') ?? '' );
$controller = $this->request->getParam('controller');
$action = $this->request->getParam('action');

$layoutAboutsLastId = -1;
if($session->check('Layout.Abouts.LastId')){
	$layoutAboutsLastId = $session->read('Layout.Abouts.LastId');
}

$global_config = (array) Configure::read('Theme.' . $prefix . '.config.template.index');
$local_config = [
	'show_id' 			=> true,
	'show_pos' 			=> false,
	'show_counters'		=> false,
	'show_button_view'	=> false,
	'action_db_click'	=> 'edit',	// none, edit or view
	// ... more config params in: \JeffAdmin5\config\config.php
];
$config = array_merge($global_config, $local_config);
?>
				<div class="abouts index row">
						
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<div class="card">
							<div class="card-header">
							
								<div class="float-start">
									<h3><i id="card-icon" class="fa fa-table fa-spin"></i> <?= __('Table') ?>: <?= __('Abouts') ?></h3>
									<div><?php
										if($config['action_db_click'] == 'edit'){
																		echo __('Double clik to edit row');
										}
										if($config['action_db_click'] == 'view'){
																		echo __('Double clik to view row');
										}
									?></div>
								</div>
								
								<div class="float-end">
									<!-- Paginator page links -->
									<?= $this->element('JeffAdmin5.paginator') ?>
									<!-- /.Pginator page links -->
								</div>
								
							</div>

<?php ####################################################################################################################################################### ?>
<?php ###################### CARD BODY ###################################################################################################################### ?>
<?php ####################################################################################################################################################### ?>

							<div class="card-body p-0 p-1">
								
								<table class="table table-responsive-xl table-hover table-striped mb-0" style="">
									<thead class="thead-info">
										<tr>
											<th class="row-id-anchor"></th>
<?php if($config['show_id']){ ?>
											<th class="number id"><?= $this->Paginator->sort('id') ?></th>
<?php } ?>
											<th class="string name"><?= $this->Paginator->sort('name') ?></th><!-- H.1. -->
											<th class="string phone"><?= $this->Paginator->sort('phone') ?></th><!-- H.1. -->
											<th class="string email"><?= $this->Paginator->sort('email') ?></th><!-- H.1. -->
											<th class="string google-map-url"><?= $this->Paginator->sort('google_map_url') ?></th><!-- H.1. -->
											<th class="string google-description"><?= $this->Paginator->sort('google_description') ?></th><!-- H.1. -->
											<th class="string google-keywords"><?= $this->Paginator->sort('google_keywords') ?></th><!-- H.1. -->
											<th class="string twitter-url"><?= $this->Paginator->sort('twitter_url') ?></th><!-- H.1. -->
											<th class="string facebook-url"><?= $this->Paginator->sort('facebook_url') ?></th><!-- H.1. -->
											<th class="string instagram-url"><?= $this->Paginator->sort('instagram_url') ?></th><!-- H.1. -->
											<th class="string linkedin-url"><?= $this->Paginator->sort('linkedin_url') ?></th><!-- H.1. -->
											<th class="string about-us-title"><?= $this->Paginator->sort('about_us_title') ?></th><!-- H.1. -->
											<th class="string main-title"><?= $this->Paginator->sort('main_title') ?></th><!-- H.1. -->
											<th class="string main-body"><?= $this->Paginator->sort('main_body') ?></th><!-- H.1. -->
											<th class="string main-button-title"><?= $this->Paginator->sort('main_button_title') ?></th><!-- H.1. -->
											<th class="string main-button-link"><?= $this->Paginator->sort('main_button_link') ?></th><!-- H.1. -->
											<th class="string our-services-title"><?= $this->Paginator->sort('our_services_title') ?></th><!-- H.1. -->
											<th class="string our-services-body"><?= $this->Paginator->sort('our_services_body') ?></th><!-- H.1. -->
											<th class="string our-customers-title"><?= $this->Paginator->sort('our_customers_title') ?></th><!-- H.1. -->
											<th class="string our-customers-body"><?= $this->Paginator->sort('our_customers_body') ?></th><!-- H.1. -->
											<th class="string features-title"><?= $this->Paginator->sort('features_title') ?></th><!-- H.1. -->
											<th class="string features-subtitle-1"><?= $this->Paginator->sort('features_subtitle_1') ?></th><!-- H.1. -->
											<th class="string features-body-1"><?= $this->Paginator->sort('features_body_1') ?></th><!-- H.1. -->
											<th class="string features-subtitle-2"><?= $this->Paginator->sort('features_subtitle_2') ?></th><!-- H.1. -->
											<th class="string features-body-2"><?= $this->Paginator->sort('features_body_2') ?></th><!-- H.1. -->
											<th class="string features-subtitle-3"><?= $this->Paginator->sort('features_subtitle_3') ?></th><!-- H.1. -->
											<th class="string features-body-3"><?= $this->Paginator->sort('features_body_3') ?></th><!-- H.1. -->
											<th class="string features-subtitle-4"><?= $this->Paginator->sort('features_subtitle_4') ?></th><!-- H.1. -->
											<th class="string features-body-4"><?= $this->Paginator->sort('features_body_4') ?></th><!-- H.1. -->
											<th class="string partners-title"><?= $this->Paginator->sort('partners_title') ?></th><!-- H.1. -->
<?php if($config['show_created'] || $config['show_modified']){ ?>

											<th class="datetime created modified">
												<?php 
													if($config['show_created']){ 
														echo $this->Paginator->sort('created');
													}
													if($config['show_created'] && $config['show_modified']){
														echo "&nbsp;/&nbsp;";
													}
													if($config['show_modified']){
														echo $this->Paginator->sort('modified');
													} ?>

											</th>
<?php } ?>
<?php if($config['show_button_view'] || $config['show_button_edit'] || $config['show_button_delete'] ){ ?>
											<th class="actions"><?= __('Actions') ?></th>
<?php } ?>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($abouts as $about): ?>
<?php
	//$classLastVisited = ' class="last-visited"';	// later...
	//$classLastVisited = '';
?>

										<tr row-id="<?= $about->id ?>"<?php if($about->id == $layoutAboutsLastId){ echo 'class="table-tr-last-id"'; } ?>" prefix="<?= $prefix ?>" controller="<?= $controller ?>" action="<?= $action ?>" aria-expanded="true">
											<td class="row-id-anchor" value="<?= $about->id ?>"><a name="<?= $about->id ?>" class="anchor"></a></td>
<?php if($config['show_id']){ ?>
											<td class="number id" value="<?= $about->id ?>"><?= h($about->id) ?><a name="<?= $about->id ?>"></a></td>
<?php } ?>
											<td class="string name" value="<?= $about->name ?>"><?= h($about->name) ?></td>
											<td class="string phone" value="<?= $about->phone ?>"><?= h($about->phone) ?></td>
											<td class="string email" value="<?= $about->email ?>"><?= h($about->email) ?></td>
											<td class="string google-map-url" value="<?= $about->google_map_url ?>"><?= h($about->google_map_url) ?></td>
											<td class="string google-description" value="<?= $about->google_description ?>"><?= h($about->google_description) ?></td>
											<td class="string google-keywords" value="<?= $about->google_keywords ?>"><?= h($about->google_keywords) ?></td>
											<td class="string twitter-url" value="<?= $about->twitter_url ?>"><?= h($about->twitter_url) ?></td>
											<td class="string facebook-url" value="<?= $about->facebook_url ?>"><?= h($about->facebook_url) ?></td>
											<td class="string instagram-url" value="<?= $about->instagram_url ?>"><?= h($about->instagram_url) ?></td>
											<td class="string linkedin-url" value="<?= $about->linkedin_url ?>"><?= h($about->linkedin_url) ?></td>
											<td class="string about-us-title" value="<?= $about->about_us_title ?>"><?= h($about->about_us_title) ?></td>
											<td class="string main-title" value="<?= $about->main_title ?>"><?= h($about->main_title) ?></td>
											<td class="string main-body" value="<?= $about->main_body ?>"><?= h($about->main_body) ?></td>
											<td class="string main-button-title" value="<?= $about->main_button_title ?>"><?= h($about->main_button_title) ?></td>
											<td class="string main-button-link" value="<?= $about->main_button_link ?>"><?= h($about->main_button_link) ?></td>
											<td class="string our-services-title" value="<?= $about->our_services_title ?>"><?= h($about->our_services_title) ?></td>
											<td class="string our-services-body" value="<?= $about->our_services_body ?>"><?= h($about->our_services_body) ?></td>
											<td class="string our-customers-title" value="<?= $about->our_customers_title ?>"><?= h($about->our_customers_title) ?></td>
											<td class="string our-customers-body" value="<?= $about->our_customers_body ?>"><?= h($about->our_customers_body) ?></td>
											<td class="string features-title" value="<?= $about->features_title ?>"><?= h($about->features_title) ?></td>
											<td class="string features-subtitle-1" value="<?= $about->features_subtitle_1 ?>"><?= h($about->features_subtitle_1) ?></td>
											<td class="string features-body-1" value="<?= $about->features_body_1 ?>"><?= h($about->features_body_1) ?></td>
											<td class="string features-subtitle-2" value="<?= $about->features_subtitle_2 ?>"><?= h($about->features_subtitle_2) ?></td>
											<td class="string features-body-2" value="<?= $about->features_body_2 ?>"><?= h($about->features_body_2) ?></td>
											<td class="string features-subtitle-3" value="<?= $about->features_subtitle_3 ?>"><?= h($about->features_subtitle_3) ?></td>
											<td class="string features-body-3" value="<?= $about->features_body_3 ?>"><?= h($about->features_body_3) ?></td>
											<td class="string features-subtitle-4" value="<?= $about->features_subtitle_4 ?>"><?= h($about->features_subtitle_4) ?></td>
											<td class="string features-body-4" value="<?= $about->features_body_4 ?>"><?= h($about->features_body_4) ?></td>
											<td class="string partners-title" value="<?= $about->partners_title ?>"><?= h($about->partners_title) ?></td>
<?php if($config['show_created'] || $config['show_modified']){ ?>
											<td class="datetime">
<?php if($config['show_created']){ ?>
												<span class="fw-bold"><?= h($about->created) ?></span>
<?php } ?>
<?php if($config['show_created'] && $config['show_modified']){ ?>
												<br>
<?php } ?>
<?php if($config['show_modified']){ ?>
												<span class="fw-normal"><?= h($about->modified) ?></span>
<?php } ?>
											</td>
<?php } ?>
<?php if($config['show_button_view'] || $config['show_button_edit'] || $config['show_button_delete'] ){ ?>

											<td class="actions">
<?php if($config['show_button_view']){ ?>
												<?= $this->Html->link('<i class="fa fa-eye"></i>', ['action' => 'view', $about->id], ['escape' => false, 'role' => 'button', 'class' => 'btn btn-warning btn-sm', 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => __('View this item'), 'data-original-title' => __('View this item')]) ?>
<?php } ?>

<?php if($config['show_button_edit']){ ?>
												<?= $this->Html->link('<i class="fa fa-edit"></i>', ['action' => 'edit', $about->id], ['escape' => false, 'role' => 'button', 'class' => 'btn btn-primary btn-sm', 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => __('Edit this item'), 'data-original-title' => __('Edit this item')]) ?>
<?php } ?>

<?php if($config['show_button_delete']){ ?>
												<?= $this->Form->postLink('', ['action' => 'delete', $about->id], ['class'=>'hide-postlink index-delete-button-class']) ?>
												<a href="javascript:;" class="btn btn-sm btn-danger postlink-delete" data-bs-tooltip="tooltip" data-bs-placement="top" title="<?= __("Delete this record!") ?>" text="<?= h($about->name) ?>" subText="<?= __("You will not be able to revert this!") ?>" confirmButtonText="<?= __("Yes, delete it!") ?>" cancelButtonText="<?= __("Cancel") ?>"><i class="fa fa-minus"></i></a>

<?php } ?>

											</td>
<?php } ?>
										</tr>
										<?php endforeach; ?>

									</tbody>
								</table>

							</div>
							<div class="card-footer text-center">
								<div class="float-start">
									<?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?>
								</div>								
								<div class="float-end mb-1">							
									<?= $this->element('jeffAdmin5.paginator') ?>
									
								</div>								
							</div>
						</div><!-- end card-->					
					</div>

				</div>			

	<?php
	if(isset($config['index_show_actions']) && $config['index_show_actions'] && isset($config['index_enable_delete']) && $config['index_enable_delete']){ 
		$this->Html->script(
			[
				'JeffAdmin5./assets/plugins/swettalert2/dist/sweetalert2.all.min',
			],
			['block' => 'scriptBottom']
		);
	}	
	?>

<?php $this->Html->scriptStart(['block' => 'javaScriptBottom']); ?>

	$(document).ready( function(){
		$('tr').dblclick( function(){
			let id = $(this).attr("row-id")
			window.location.href = '<?= $this->Url->build(['controller' => $controller, 'action' => $config['action_db_click']]) ?>/' + id;
		})
		
	})
<?php $this->Html->scriptEnd(); ?>



