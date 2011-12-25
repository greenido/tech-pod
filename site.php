<?php

$siteName = empty($_GET['siteName']) ? 'javaposse' : $_GET['siteName'];

// TODO - let the user control on this list
$siteList = array(
    'javaposee' => 'http://feeds.feedburner.com/javaposse',
    'twit'      => 'http://twit.tv/node/feed',
    '37'        => 'http://feeds.feedburner.com/37signals_podcast',
    'se'        => 'http://feeds.feedburner.com/se-radio',
    'nettuts'   => 'http://feeds.feedburner.com/nettuts'
);

$curSite = "http://feeds.feedburner.com/javaposse"; // default
foreach ($siteList as $key => $siteLink) {
  if ($siteName == $key) {
    $curSite = $siteLink;
    break;
  }
}

$cache = dirname(__FILE__) . "/cache/$siteName";
// Re-cache every three hours
if (filemtime($cache) < (time() - 10800)) {
  // Get from server
  if (!file_exists(dirname(__FILE__) . '/cache')) {
    mkdir(dirname(__FILE__) . '/cache', 0777);
  }
  // YQL query (SELECT * from feed ... ) // Split for readability
  $path = "http://query.yahooapis.com/v1/public/yql?q=";
  $path .= urlencode("SELECT * FROM feed WHERE url='{$curSite}'");
  $path .= "&format=json";

  // Call YQL, and if the query didn't fail, cache the returned data
  $feed = file_get_contents($path, true);

  // If something was returned, cache
  if (is_object($feed) && $feed->query->count) {
    $cachefile = fopen($cache, 'wb');
    fwrite($cachefile, $feed);
    fclose($cachefile);
  }
} else {
  // We already have local cache. Use that instead.
  $feed = file_get_contents($cache);
}

// Decode that shizzle
$feed = json_decode($feed);


// Include the view
include('views/site.tmpl.php');

