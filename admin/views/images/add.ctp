<?php 
echo $html->css('swfupload');
echo $javascript->link( array( 'swfupload/swfupload', 'swfupload/swfupload.queue', 'swfupload/fileprogress', 'swfupload/handlers' ) );
echo $javascript->codeBlock('
	var upload1;
	
	window.onload = function() {
		upload1 = new SWFUpload({ 	  
			// Backend Settings
			upload_url: "' .FULL_BASE_URL . $html->url(array('controller' => 'images', 'action' => 'upload',  'id' => $table.":".$id)) . '",
			post_params: {"'. Configure::read('Session.cookie') .'" : "' . $session->id() . '"},

			// File Upload Settings
			file_size_limit : "4096",	// 4MB
			file_types : "*.jpg;*.gif;*.png",
			file_types_description : "All Files",
			file_upload_limit : "10",
			file_queue_limit : "0",
	
			// Event Handler Settings (all my handlers are in the Handler.js file)
			file_dialog_start_handler : fileDialogStart,
			file_queued_handler : fileQueued,
			file_queue_error_handler : fileQueueError,
			file_dialog_complete_handler : fileDialogComplete,
			upload_start_handler : uploadStart,
			upload_progress_handler : uploadProgress,
			upload_error_handler : uploadError,
			upload_success_handler : uploadSuccess,
			upload_complete_handler : uploadComplete,
	
			// Button Settings
			button_image_url : "' . FULL_BASE_URL . $html->url('/img/ButtonUpload.png') . '",
			button_placeholder_id : "spanButtonPlaceholder1",
			button_width: 61,
			button_height: 22,
			
			// Flash Settings
			flash_url : "' . FULL_BASE_URL . $html->url('/files/swfupload.swf') . '",
			
	
			custom_settings : {
				progressTarget : "fsUploadProgress1",
				cancelButtonId : "btnCancel1"
			},

			debug: ' . ife(Configure::read() > 0, 'true', 'false') . '
		});

     }
');
?>	
<div class="grid_16" id="content">
	<!-- CONTENT TITLE -->
	<div class="grid_9">
	  <h1 class="content_edit"><?php __( 'Enviar Imagem' );?></h1>
	</div>
	<!-- CONTENT TITLE RIGHT BOX -->
	<div class="grid_6" id="eventbox"></div>
	<div class="clear"> </div>
	<!-- TEXT CONTENT OR ANY OTHER CONTENT START -->
	<div class="grid_15" id="textcontent">

		<?php 
			if($session->check('Message.flash')) {
				$session->flash();
			}
		?>
	     
		<form id="form1" action="index.php" method="post" enctype="multipart/form-data">
			<table>
				<tr valign="top">
					<td>
						<div>
							<div class="fieldset flash" id="fsUploadProgress1">
								<span class="legend">Escolha os Arquivos para Upload</span>
							</div>
							<div style="padding-left: 5px;">
								<span id="spanButtonPlaceholder1"></span>
								<input id="btnCancel1" type="button" value="Cancelar Uploads" onclick="cancelQueue(upload1);" disabled="disabled" style="margin-left: 2px; height: 22px; font-size: 8pt;" />
								<br />
							</div>
						</div>
					</td>
				</tr>
			</table>
		</form>
			
		<?php echo $html->link( __( '<span>Listar Imagens</span>', true ), array( 'action'=>'index' ), array( 'class'=>'button', 'title'=>'Listar Imagens' ),null, false ); ?>
			
		<div class="clear"> </div>
	</div>
</div>