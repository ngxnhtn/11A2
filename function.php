<?php 

function request($url)
{
	$ch = curl_init();
	$options = array(
		CURLOPT_URL            => $url,
		CURLOPT_RETURNTRANSFER => TRUE,
		CURLOPT_HEADER         => FALSE,
		CURLOPT_FOLLOWLOCATION => TRUE,
		CURLOPT_ENCODING       => '',
		CURLOPT_USERAGENT      => 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.87 Safari/537.36',
		CURLOPT_AUTOREFERER    => TRUE,
		CURLOPT_CONNECTTIMEOUT => 15,
		CURLOPT_TIMEOUT        => 15,
		CURLOPT_MAXREDIRS      => 5,
		CURLOPT_SSL_VERIFYHOST => 2,
		CURLOPT_SSL_VERIFYPEER => 0
	);
	curl_setopt_array($ch, $options);
	$response = curl_exec($ch);
	curl_close($ch);
	return $response;
};


?>