<?php
 $routes =
 [
    [
        'uri' => '/',
        'controller' => 'Home',
        'action' => 'homePage',
        'name' => 'home',
        'method' => 'GET',
    ],
    [
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
        'name' => 'connection',
    ],
    [
        'uri' => '/contact',
        'controller' => 'Contact',
        'action' => 'contactPage',
        'name' => 'contact',

    ],
    [
        'uri' => '/post',
        'controller' => 'DisplayPost',
        'action' => 'displayPost',
        'name' => 'post',
        'method' => 'GET',
    ],
    [
        'uri' => '/administration',
        'controller' => 'Administration',
        'action' => 'administrationPage',
        'name' => 'administration',
        'method' => 'GET',
    ],
    [
        'uri' => '/listePost',
        'controller' => 'ListePost',
        'action' => 'listePost',
        'name' => 'listePost',
        'method' => 'GET',
    ],
    [
        'uri' => '/message',
        'controller' => 'MessagePost',
        'action' => 'listeMessagePage',
        'name' => 'messages',
    ],
    [
        'uri' => '/newPost',
        'controller' => 'NewPost',
        'action' => 'newPost',
        'name' => 'newPost',
        'method' => 'GET',
    ],
    [
        'uri' => '/commentaires',
        'controller' => 'ListeCommentaire',
        'action' => 'listeCommentairePage',
        'name' => 'commentaire',
        'method' => 'GET',
    ],
    [
        'uri' => '/modifierPost',
        'controller' => 'ModifierPost',
        'action' => 'modifierPost',
        'name' => 'modifier',
        'method' => 'GET',
    ],
];
