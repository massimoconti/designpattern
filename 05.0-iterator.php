<?php
require 'vendor/autoload.php';

$db = Db::getInstance();
$loader = new ScontiLoader($db);
$sconti = $loader->loadSconti();

$iterator = new ScontiIterator($sconti);

/* @var $sconto Sconto */
foreach ($iterator as $sconto)
  {
  
  }