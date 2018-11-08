<?php


/**
 *
 */
interface IngredientiPizzaInterface
  {
  public function createFormaggio(): Formaggio;
  
  public function createSalsa(): Salsa;
  
  public function createImpasto(): Impasto;
  }
