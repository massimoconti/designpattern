<?php

/**
 * Dipendenze: ScontiLoaderInterface, Memcached
 */
class ScontiLoaderMemcachedDecorator implements ScontiLoaderInterface
  {
  private $original;
  private $memcached;


  public function __construct(ScontiLoaderInterface $original, Memcached $memcached)
    {
    $this->original = $original;
    $this->memcached = $memcached;
    }
    
  /**
   * {@inheritDocs}
   */
  public function loadSconti(): array
    {
    $key = 'sconti';
    
    $collection = $this->memcached->get($key);
    
    if ($this->memcached->getResultCode() != \Memcached::MEMCACHED_SUCCESS)
      {
      $collection = $this->original->loadSconti();
      $this->memcached->set($key, $collection);
      }
      
    return $collection;
    }
  }
