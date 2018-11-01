<?php

class Db
{

  /**
   * @static
   * @var self
   */
  private static $instance;

  /**
   *@return self
   */
  public static function getInstance($dsn)
  {
    if (null === static::$instance)
      static::$instance = new static($dsn);

    return static::$instance;
  }
  
  /**
   *
   */
  private function __constructor()
  {
    // init
  }

  /**
   *
   */
  public function query($sql)
  {

  }
  
  // other methods
}
