<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//ESTE signo / HACE REFERENCIA AL CONTROLLER Home Y A SU METODO INDEX
$routes->get('/', 'MatriculaController::index');


