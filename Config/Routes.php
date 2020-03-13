<?php

$routes->group('entry', ['namespace' => 'Meinlib\Entry\Controllers'], function($routes)
{
    $routes->get('/', 'Entry::index');
});