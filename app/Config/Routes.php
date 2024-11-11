<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('index/(:any)', 'Redirecciones_route::vista_index/$1');
$routes->get('vista_registrar_invitados/(:any)/(:any)', 'Redirecciones_route::vista_registrar_invitados/$1/$2');
$routes->get('vista_registrar_empresas/(:any)/(:any)', 'Redirecciones_route::vista_registrar_empresas/$1/$2');


$routes->post('/consultar_direccion_evento', 'Consultas_base_de_datos::consultar_direccion_evento');
$routes->post('/consultar_existencia_invitado', 'Consultas_base_de_datos::consultar_existencia_invitado');
$routes->post('/consultar_existencia_empresa', 'Consultas_base_de_datos::consultar_existencia_empresa');