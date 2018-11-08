<?php

/**
 * 
 */
abstract class Pizza
  {
  /**
   *
   * @var IngredientiPizzaInterface 
   */
  protected $ingredienti;
  
  public function __construct(IngredientiPizzaInterface $ingredienti)
    {
    $this->ingredienti = $ingredienti;
    }
  
  public function prepara()
    {
    $this->salsa = $this->ingredienti->createSalsa();
    $this->formaggio = $this->ingredienti->createFormaggio();
    $this->impasto = $this->ingredienti->createImpasto();
    }
  
  public function inforna(){}
  
  public function taglia(){}
  
  public function inscatola(){}
  }
