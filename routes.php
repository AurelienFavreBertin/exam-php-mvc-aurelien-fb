<?php

// Create Router instance
$router = new Router();


$router->get('',                    'PagesController@home' );

$router->get('conducteurs',             'ConducteursController@list');
$router->post('conducteurs/add',        'ConducteursController@save');
$router->get('conducteurs/add',         'ConducteursController@add');
$router->get('conducteurs/{id}/edit',   'ConducteursController@edit');     // Édition (affichage formulaire)
$router->post('conducteurs/{id}/edit',  'ConducteursController@update');   // Édition (traitement formulaire)
$router->get('conducteurs/{id}/delete', 'ConducteursController@delete');   // Suppression

$router->get('vehicules',             'VehiculesController@list');
$router->post('vehicules/add',        'VehiculesController@save');
$router->get('vehicules/add',         'VehiculesController@add');
$router->get('vehicules/{id}/edit',   'VehiculesController@edit');     // Édition (affichage formulaire)
$router->post('vehicules/{id}/edit',  'VehiculesController@update');   // Édition (traitement formulaire)
$router->get('vehicules/{id}/delete', 'VehiculesController@delete');   // Suppression

$router->get('associations',             'AssociationsController@list');
$router->post('associations/add',        'AssociationsController@save');
$router->get('associations/add',         'AssociationsController@add');
$router->get('associations/{id}/edit',   'AssociationsController@edit');     // Édition (affichage formulaire)
$router->post('associations/{id}/edit',  'AssociationsController@update');   // Édition (traitement formulaire)
$router->get('associations/{id}/delete', 'AssociationsController@delete');   // Suppression

// Run it!
$router->run();