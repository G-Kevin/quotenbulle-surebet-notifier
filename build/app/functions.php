<?php 

$curl = curl_init();

$header = array(
			"Referer: https://www.quotenbulle.de/wp-login.php",
			"Origin: https://quotenbulle.de/",
			"Content-Type: application/x-www-form-urlencoded",
			"Cache-Control: no-cache",
			"Pragma: no-cache",
			"Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
			"User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_3) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.5 Safari/605.1.15"
		);

curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_3) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.5 Safari/605.1.15');
curl_setopt($curl, CURLOPT_AUTOREFERER, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curl, CURLOPT_COOKIESESSION, true);
curl_setopt($curl, CURLOPT_COOKIEFILE, 'cookies.txt');
curl_setopt($curl, CURLOPT_COOKIEJAR, 'cookies.txt');
//---------------- generic cURL settings end ----------------

// Login

$url = 'https://www.quotenbulle.de/wp-login.php';
curl_setopt($curl, CURLOPT_URL, $url);

$post = 'log=username&pwd=password&wp-submit=Log+In&redirect_to=https%3A%2F% mywordpress%2Fwp-admin%2F';
$post = "log=" . urlencode($qbName) . "&pwd=" . urlencode($qbPassword). "&wfls-email-verification=&redirect_to=". urlencode("https://www.quotenbulle.de/")."&action=wordfence_ls_authenticate&wp-submit=Log+In";
curl_setopt($curl, CURLOPT_POST, TRUE);
curl_setopt($curl, CURLOPT_POSTFIELDS, $post);
curl_exec($curl);

 ?>