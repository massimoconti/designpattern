<?php

/**
 * 
 */
class ScontoPromozioneAdapter implements PromozioneInterface
  {
  /**
   * @var Sconto;
   */
  private $sconto;
  
  function __construct(Sconto $sconto)
    {
    $this->sconto = $sconto;
    }

  /**
   * {@inheritDocs}
   */
  public function getPercBonus(): int
    {
    $floatval = $this->sconto->getPerc();
    return (int)$floatval;
    }
  }
