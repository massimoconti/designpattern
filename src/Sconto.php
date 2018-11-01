<?php

/**
 * 
 */
class Sconto
  {
  protected $row;
  
  public function __construct(array $row)
    {
    $this->row = $row;
    }
    
  public function getPerc(): float
    {
    return round($this->row['perc'], 2);
    }
  }
