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

$router->get('registration',        'RegistrationController@list');
$router->get('registration/add',    'RegistrationController@add');
$router->post('registration/add',   'RegistrationController@save');

// Run it!
$router->run();