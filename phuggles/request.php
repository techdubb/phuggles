<?php

include 'settings.php';
	
class Request
{
	/**
    * Handle GET requests
    */
    function get($url, $params = array()) {
		$params['token'] = PUBLIC_TOKEN;
		$query_str = http_build_query($params);
		$request_url = API_URL . $url . '?' . $query_str;

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $request_url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$resp = curl_exec($ch);
		
		$status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);
		
		return json_decode($resp, true);
	}
	
	/**
    * Handle POST requests
    */
	function post($url, $params) {
		$params['token'] = PRIVATE_TOKEN;
		$query_str = http_build_query($params);
		$request_url = API_URL . $url;

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $request_url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
 		curl_setopt($ch, CURLOPT_POSTFIELDS, $query_str);
		$resp = curl_exec($ch);
		
		//$status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);
		
		return json_decode($resp, true);
	}
	
	/**
    * Handle DELETE requests
    */
	function delete($url) {
		$params = array('token' => PRIVATE_TOKEN);
		$query_str = http_build_query($params);
		$request_url = API_URL . $url;

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $request_url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $query_str);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
		$resp = curl_exec($ch);
		
		$status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);
		
		return json_decode($resp, true);
	}
	
}

?>
