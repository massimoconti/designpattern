<?php

/**
 * Dipendenze: Db, Memcached, ScontiLoader, ScontiLoaderInterface
 */
class ScontiLoaderMemcachedExended extends ScontiLoader
  {
  private $memcached;
  
  /**
   * NOTA: Costruttore modificato, richiede aggiornamento del client
   * 
   * @param Db $db
   */
  public function __construct(Db $db, \Memcached $memcached)
    {
    parent::__construct($db);
    $this->memcached = $memcached;
    }
  
  // NOTA: definire questo metodo romperebbe il funzionamento della classe sottostante
  //protected function getRawData();
    
  /**
   * {@inheritDocs}
   */
  public function loadSconti()
    {
    $key = 'sconti';
    
    $collection = $this->memcached->get($key);
    
    if ($this->memcached->getResultCode() != \Memcached::MEMCACHED_SUCCESS)
      {
      $collection = parent::loadSconti();
      $this->memcached->set($key, $collection);
      }
      
    return $collection;
    }
  }
