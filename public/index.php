<?php
 require '../vendor/autoload.php';

 //use App\Controller\HomeController;

 //HomeController::homePageAction();

 $router = new Core\Router($_GET['url']);

 $router->get('/posts', function () { echo 'tous les articles'; });
 $router->get('/posts/id', function ($id) { echo 'Afficher article'.$id; });
