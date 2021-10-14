<?php

include 'vendor/autoload.php';
header('Content-Type: image/png');
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
echo file_get_contents("30_97256.png");
ob_end_flush();
App\Counter::run();
exit;