<?php
require 'vendor/autoload.php';

function ordina(string $type): Pizza
  {
  // varia
  if ($type == "basic")
    $pizza = new PizzaMargherita();
  else if ($type == "verdure")
    $pizza = new PizzaVerdure();
  else if ($type == "formaggio")
    $pizza = new PizzaGorgonzola();
  
  // non varia
  $pizza->prepara();
  $pizza->inforna();
  $pizza->taglia();
  $pizza->inscatola();
  
  return $pizza;
  }
  
$pizza = ordina('verdure');