<?php 

// get env variables

$qbName = getenv('USERNAME');
$qbPassword = getenv('USERNAME');
$dbUsername = getenv('MYSQL_USER');
$dbPassword = getenv('MYSQL_ROOTPW');

require_once('functions.php');


// read Buchmacher data

// crawl Quotensucher per Buchmacher

$url = 'https://www.quotenbulle.de/tools/';
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, FALSE);
$analyzeContent = curl_exec($curl);

require_once('footer.php');

 ?>