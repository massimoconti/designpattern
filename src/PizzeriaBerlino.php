<?php

/**
 * 
 */
class PizzeriaBerlino extends PizzeriaAbstract
  {
  public function creaPizza(string $type): Pizza
    {
    $ingredienti = new IngredientiBerlino();
    
    if ($type == "basic")
      $pizza = new PizzaWurstel($ingredienti);
    else if ($type == "verdure")
      $pizza = new PizzaCrauti($ingredienti);
    else if ($type == "formaggio")
      $pizza = new PizzaEmmentaler($ingredienti);

    return $pizza;
    }
  }
