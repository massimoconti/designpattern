<?php
require 'vendor/autoload.php';

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();
$routes->add('hello', new Route('/hello/{name}'));

$sf = new SymfonyOrchestrate($routes);
$sf->play();
