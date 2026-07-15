<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('academics', 'Home::academics');

$routes->get('about', 'Home::about');
$routes->get('admission', 'Home::admission');
$routes->get('gallery', 'Home::gallery');
$routes->get('blog', 'Home::blog');
$routes->get('blog/detail/(:num)', 'Home::blogDetail/$1');
$routes->get('contact', 'Home::contact');
$routes->get('program', 'Home::program');
$routes->get('teachers', 'Home::teachers');
$routes->get('how-to-apply', 'Home::howToApply');
$routes->get('tuition-fee', 'Home::tuitionFee');