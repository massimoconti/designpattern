<?php
require 'vendor/autoload.php';

$naples = new PizzeriaNapoli();
$pizza = $naples->ordina('formaggio'); // pizza bufala

$berlino = new PizzeriaBerlino();
$pizza = $berlino->ordina('formaggio'); // pizza emmentaler