<?php

// Create Router instance
$router = new Router();


$router->get('',                    'PagesController@home' );

$router->get('student',             'studentsController@list');
$router->get('student/add',         'studentsController@add');
$router->post('student/add',        'studentsController@save');

$router->get('cours',               'coursController@list');
$router->get('cours/add',           'coursController@add');
$router->post('cours/add',          'coursController@save');

$router->get('registration',        'registrationController@list');
$router->get('registration/add',    'registrationController@add');
$router->post('registration/add',   'registrationController@save');

// Run it!
$router->run();