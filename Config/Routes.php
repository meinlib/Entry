<?php

$routes->group('entry', ['namespace' => 'Mein\Entry\Controllers'], function($routes)
{
    $routes->get('/', 'Entry::index');
});