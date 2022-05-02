<?php

require "/var/www/model/routing/IndexRouting.php";

$uri = print_r($_SERVER["REQUEST_URI"], PHP_URL_PASS);

$urlExplode = explode("/", $uri);



$pageView = new IndexRouting();
$pageView->pageDisplay();

