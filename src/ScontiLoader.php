<?php

/**
 * 
 */
class ScontiLoader implements ScontiLoaderInterface
  {
  /**
   *
   * @var Db
   */
  private $db;
  
  /**
   * 
   * @param Db $db
   */
  public function __construct(Db $db)
    {
    $this->db = $db;
    }
    
  protected function getRawData(): array
    {
    $sql = 'Query to get them all';
    return (array)$this->db->query($sql);
    }

  /**
   * {@inheritDocs}
   */
  public function loadSconti(): array
    {
    $collection = [];
    foreach ($this->getRawData() as $row)
      $collection[] = new Sconto($row);
    
    return $collection;
    }
  }
