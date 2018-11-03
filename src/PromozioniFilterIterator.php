<?php

/**
 * 
 */
class PromozioniFilterIterator extends FilterIterator
  {
  protected $soglia_sconto;
  
  public function __construct(\Iterator $iterator, int $soglia_sconto)
    {
    parent::__construct($iterator);
    
    $this->soglia_sconto = $soglia_sconto;
    }
    
  /**
   * {@inheritDoc}
   */
  public function accept(): bool
    {
    $current = $this->current();
    
    if (!$current instanceof PromozioneInterface)
      throw new \Exception('not valid item');
    
    return $current->getPercBonus() >= $this->soglia_sconto;
    }
  }
