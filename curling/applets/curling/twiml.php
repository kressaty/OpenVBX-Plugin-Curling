<?php

	$response = new Response();
	$url = AppletInstance::getValue('url');
	$next = AppletInstance::getDropZoneUrl('next');
	$fallback = AppletInstance::getDropZoneUrl('fallback');
	


	$curl_handle=curl_init();
	curl_setopt($curl_handle,CURLOPT_URL,$url);
	curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
	curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
	$result = curl_exec($curl_handle);
	curl_close($curl_handle);
	
	if (empty($result))
	{
		$response->addSay('that didnt work');
	   $response->addRedirect($fallback);
	   $response->Respond();
	}
	else
	{
		$response->addSay($result);
	    $response->addRedirect($next);
	    $response->Respond();
	}

?>