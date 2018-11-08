<?php

/**
 * 
 */
class IngredientiNapoli implements IngredientiPizzaInterface
  {
  public function createFormaggio(): \Formaggio
    {
    return new Bufala();
    }

  public function createImpasto(): \Impasto
    {
    return new DoppioImpasto();
    }

  public function createSalsa(): \Salsa
    {
    return new Pummaro();
    }
  }
