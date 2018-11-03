<?php

/**
 * 
 */
class ScontiIterator implements IteratorAggregate
  {
  /**
   * @var array
   */
  protected $sconti;
  
  /**
   * @var int
   */
  protected $position = 0;
  
  
  public function __construct(array $sconti)
    {
    $this->sconti = $sconti;
    }

  /**
   * @return \Sconto
   */
  public function current(): \Sconto
    {
    return $this->sconti[$this->position];
    }

  public function key(): int
    {
    return $this->position;
    }

  public function next(): void
    {
    $this->position++;
    }

  public function rewind(): void
    {
    $this->position = 0;
    }

  public function valid(): bool
    {
    return array_key_exists($this->position, $this->sconti);
    }
  }
