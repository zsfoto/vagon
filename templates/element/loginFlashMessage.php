
	<script>
		$(document).ready( function(){
	<?php
		//http://bootstrap-growl.remabledesigns.com/	
		$type = 'success';
		if(isset($_SESSION['Flash']['flash'])){
			foreach($_SESSION['Flash']['flash'] as $flash){
				switch($flash['element']){
					case "Flash/error":
						$type = 'danger';
						$title = __('Error');
						break;
					case "Flash/success":
						$type = 'success';
						$title = __('Success');
						break;
					case "Flash/warning":
						$type = 'warning';
						$title = __('Warning');
						break;
					case "Flash/primary":
						$type = 'primary';
						$title = __('Message');
						break;
						
					default:
						$type = 'default';
						$title = __('Message');
				}
	?>
			flashMessage('<?= $type ?>', '<?= $title ?>', '<?= $flash['message'] ?>');
	<?php
			}
		}
		$this->Flash->render();
		//$this->Flash->render('auth');
		
	?>

			function flashMessage(type, title, message){
				$.notify('<strong>'+title+':</strong><br>'+message+' ', {
					showProgressbar: true,
					allow_dismiss: false,
					progress: 5,
					allow_dismiss: true,
					newest_on_top: true,
					offset: 30,
					z_index: 9999,
					spacing: 10,
					delay: 2500,	//2000, 10000
					timer: 100,
					placement: {
						from: "top",
						align: "center"
					},				
					icon_type: 'class',
					template: '<div data-notify="container" class="col-xs-7 col-sm-7 alert alert-{0}" role="alert">' +
						'<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
						'<span data-notify="icon"></span> ' +
						'<span data-notify="title">{1}</span> ' +
						'<span data-notify="message">{2}</span>' +
						'<div class="progress" data-notify="progressbar">' +
							'<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
						'</div>' +
						'<a href="{3}" target="{4}" data-notify="url"></a>' +
					'</div>',
					
					type: type
				});
			};
			//------------------ /.FLASH --------------------

			//------------------- AJAX-szal való POST-hoz kell a token -----------------
			//https://stackoverflow.com/questions/51916680/csrf-token-mismatch-in-post-request-in-3-6-version
			$("#csrfToken").val(<?= json_encode($this->request->getParam('_csrfToken')) ?>);
			//----------------- /.AJAX-szal való POST-hoz kell a token -----------------
		});

	</script>
<?php /*
	if($m==4){ ?>
	<script type="text/javascript">
		
		if ($('.related-slider').length) {
			$('.related-slider').owlCarousel({
				autoPlay: 20000,
				slideSpeed: 300,
				navigation: true,
				pagination: false,
				singleItem: true,
				navigationText: ['<i class="fa fa-caret-left"></i>', '<i class="fa fa-caret-right"></i>']  
			});
		}
	</script>
	<?php }
	
	
*/ ?>