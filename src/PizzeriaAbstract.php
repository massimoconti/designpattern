<?php

/**
 * 
 */
abstract class PizzeriaAbstract
  { 
  /**
   * 
   * @param string $type
   * @return Pizza
   */
  abstract public function creaPizza(string $type): Pizza;
  
  /**
   * 
   * @param string $type
   * @return Pizza
   */
  public function ordina(string $type): Pizza
    {
    $pizza = $this->creaPizza($type);

    $pizza->prepara();
    $pizza->inforna();
    $pizza->taglia();
    $pizza->inscatola();

    return $pizza;
    }
  }
