<?php


require '../vendor/autoload.php';
require '../config/route.php';

$router = new Core\Router\Router($_GET['url']);

//$router->get('/', function () {echo 'Homepage'; });
//$router->get('/posts', function () {echo 'tous les articles'; });
//$router->get('/posts/:slug-id', function ($id, $slug) use ($router) {echo $router->url('posts.show', ['id' => 1, 'slug' => 'salut-les-gens']); }, 'posts.show')->with('id', '[0-9]+')->with('slug', '([a-z/-0-9]+)');
//$router->get('/posts/:id', 'Post#show');
//$router->post('/posts/:id', function ($id) {echo 'Poster l\'articles'.$id.'<pre>'.print_r($_POST, true).'</pre>'; });
//
foreach ($routes as $route) {
    if (empty($route['method']) || $route['method'] == 'GET') {
        $router->get($route['uri'], $route['controller'].'#'.$route['action'], $route['name']);
    }
    if (empty($route['method']) || $route['method'] == 'POST') {
        $router->get($route['uri'], $route['controller'].'#'.$route['action'], $route['name']);
    }
}

$router->run();
