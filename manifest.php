<?php
$latestDomain = "https://gpfa.duckspin.net/entry";

header('Content-Type: application/json');
echo json_encode([
  "short_name" => "Gapifa",
  "name" => "Gapifa Social Media",
  "start_url" => "$latestDomain/",
  "scope" => "$latestDomain/",
  "display" => "standalone",
  "background_color" => "#0C0C0C",
  "theme_color" => "#0C0C0C",
  "dir" => "rtl",
  "icons" => [
    ["src" => "$latestDomain/assets/files/defaults/pwa_icon-72x72.png", "type" => "image/png", "sizes" => "72x72"],
    ["src" => "$latestDomain/assets/files/defaults/pwa_icon-96x96.png", "type" => "image/png", "sizes" => "96x96"],
    ["src" => "$latestDomain/assets/files/defaults/pwa_icon-128x128.png", "type" => "image/png", "sizes" => "128x128"],
    ["src" => "$latestDomain/assets/files/defaults/pwa_icon-144x144.png", "type" => "image/png", "sizes" => "144x144"],
    ["src" => "$latestDomain/assets/files/defaults/pwa_icon-152x152.png", "type" => "image/png", "sizes" => "152x152"],
    ["src" => "$latestDomain/assets/files/defaults/pwa_icon-192x192.png", "type" => "image/png", "sizes" => "192x192"],
    ["src" => "$latestDomain/assets/files/defaults/pwa_icon-512x512.png", "type" => "image/png", "sizes" => "512x512"]
  ]
]);
