<?php

/**
 * 
 */
class IngredientiBerlino implements IngredientiPizzaInterface
  {
  public function createFormaggio(): \Formaggio
    {
    return new Emmentaler();
    }

  public function createImpasto(): \Impasto
    {
    return new PastaMadre();
    }

  public function createSalsa(): \Salsa
    {
    return new Ketchup();
    }
  }
