<?php

/**
 * 
 */
class ScontiIteratorAggregated implements IteratorAggregate
  {
  /**
   * @var array
   */
  protected $sconti;
  
  
  public function __construct(array $sconti)
    {
    $this->sconti = $sconti;
    }

  /**
   * {@inheritDocs}
   */
  public function getIterator(): Traversable
    {
    return new \ArrayIterator($this->sconti);
    }
  }
