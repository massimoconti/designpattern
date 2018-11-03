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
  
  }
