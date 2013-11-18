<?php
/**
 * Default class to resolve urls
 */
namespace Embed;

class UrlResolver {
	public static function resolve ($url) {
		$connection = curl_init();

		curl_setopt_array($connection, array(
			CURLOPT_URL => $url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_MAXREDIRS => 20,
			CURLOPT_CONNECTTIMEOUT => 10,
			CURLOPT_TIMEOUT => 10,
			CURLOPT_SSL_VERIFYPEER => false,
			CURLOPT_SSL_VERIFYHOST => false,
			CURLOPT_ENCODING => '',
			CURLOPT_AUTOREFERER => true,
			CURLOPT_USERAGENT => 'Embed PHP Library'
		));

		$content = curl_exec($connection);
		$result = curl_getinfo($connection);

		if ($content === false) {
			$result['error'] = curl_error($connection);
			$result['error_number'] = curl_errno($connection);
		}

		curl_close($connection);

		return [$content, $result];
	}
}