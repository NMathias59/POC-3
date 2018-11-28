<?php


require '/vendor/autoload.php';

use App\Controller\HomeController;

$yolo = new HomeController();
$home = $yolo->homePageAction();
echo $home;
