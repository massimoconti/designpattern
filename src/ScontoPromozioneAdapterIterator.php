<?php

/**
 * 
 */
class ScontoPromozioneAdapterIterator extends IteratorIterator
  {
  
  public function current(): PromozioneInterface
    {
    /* @var $current Sconto */
    $current = $this->current();
    
    return new ScontoPromozioneAdapter($current);
    }
  
  }
