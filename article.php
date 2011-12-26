<?php

$siteName = $_GET['siteName'];
$curSite = $_GET['curSite'];
$origLink = $_GET['origLink'];

$path = "http://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20feed%20where%20url%3D'{$curSite}'%20AND%20link%3D%22" .
          urlencode($origLink) . "%22&format=json";
//

error_log("---- path: $path \n link=$origLink");


$feed = json_decode(file_get_contents($path));
$feed = $feed->query->results->item;


include('views/article.tmpl.php'); 
