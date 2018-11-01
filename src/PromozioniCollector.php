<?php

/**
 * 
 */
class PromozioniCollector
  {
  /**
   *
   * @var \PromozioneInterface
   */
  protected $promozioni;
  
  /**
   * @param \PromozioneInterface $promo
   */
  public function addPromozione(\PromozioneInterface $promo)
    {
    $this->promozioni[] = $promo;
    }
  
  /**
   * 
   */
  public function getBestPromoForItem($item)
    {
    foreach ($this->promozioni as $promo)
      {
      }
    }
  }
