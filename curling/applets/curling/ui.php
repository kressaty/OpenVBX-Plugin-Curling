<?php $url = AppletInstance::getValue('url');?>
<div class="vbx-applet curling">
	<h2 class="settings-title">Query a webpage...</h2>
	<div class="vbx-applet-fieldset">
		<p>This applet will perform a GET request to the URL you specify below and read back the text to the user. Remember: the applet will read back anything returned in the request, including a header (so don't output one!).<br /></p>
		<fieldset class="vbx-input-container input">
		<h3>Query URL:</h3>
		<br />
		<div class="vbx-full-pane">
			<input class="curling_url medium" name="url" value="<?php echo $url;?>"/>
			<!--<a href="#" onclick="return false" class="normal-button" id="curling_url_test"><span>Test URL Query</span></a>-->
			<br />
		</div>
		</fieldset>
		<div id="curl_result"></div>
		<h3>After reading the result...</h3>
		<br />
		<div class="vbx-full-pane">
			<?php echo AppletUI::dropZone('next'); ?>
		</div>
	</div>
	
	<div class="more-settings">
		<h3>If it doesn't work...</h3>
	    <br />
		<div class="vbx-full-pane">
	        <?php echo AppletUI::DropZone('fallback'); ?>
		</div>
	</div>
</div>