<?php
 $routes =
 [
    [
        'uri' => '/',
        'uri' => '/home',
        'controller' => 'Home',
        'action' => 'homePage',
        'name' => 'home',
        'method' => 'GET',
    ],
    [
        'uri' => '/chapitres',
        'controller' => 'Chapitre',
        'action' => 'ChapitrePage',
        'name' => 'chapitres',
        'method' => 'GET',
    ],
    [
        'uri' => '/Autobiographie',
        'controller' => 'Autobio',
        'action' => 'autobiographiePage',
        'name' => 'autobigraphie',
        'method' => 'GET',
    ],
    [
        'uri' => '/connection',
        'controller' => 'Connection',
        'action' => 'connectionPage',
        'name' => 'Connection',
        'method' => 'GET',
    ],
];
