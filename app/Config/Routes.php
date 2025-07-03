<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/vista1', 'Home::index1');
$routes->get('/vista2', 'Home::index2');
$routes->get('/vista3', 'Home::index3');
$routes->get('/Suma', 'Suma::index');
$routes->post('/Suma/procesar','Suma::psumar');
$routes->get('/test', 'Home::test');

// Rutas para el carrito
$routes->get('carrito/agregar/(:num)', 'Carrito::agregar/$1');

// Rutas para productos
$routes->get('/zapatos/casuales', 'ControladorZapatos::index');
$routes->get('/zapatos/deportivos', 'ControladorZapatos::deportivos');
$routes->get('/vestidos/fiesta', 'ControladorVestido::index');
$routes->get('/vestidos/formales', 'ControladorVestido::formales');
$routes->get('/joyas/plata', 'ControladorCartera::index');
$routes->get('/joyas/oro', 'ControladorCartera::oro');
