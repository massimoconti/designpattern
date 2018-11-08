<?php

/**
 * 
 */
class PizzeriaNapoli extends PizzeriaAbstract
  {
  public function creaPizza(string $type): Pizza
    {
    $ingredienti = new IngredientiNapoli();
    
    if ($type == "basic")
      $pizza = new PizzaMargherita($ingredienti);
    else if ($type == "verdure")
      $pizza = new PizzaZucchine($ingredienti);
    else if ($type == "formaggio")
      $pizza = new PizzaBufala($ingredienti);

    return $pizza;
    }
  }
