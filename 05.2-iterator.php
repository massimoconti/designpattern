<?php
require 'vendor/autoload.php';

$db = Db::getInstance();

$loader = new ScontiLoader($db);

$sconti = $loader->loadSconti();

$iterator = new ScontiIteratorAggregated($sconti);
$iterator = new ScontoPromozioneAdapterIterator($iterator);

/* @var $sconto \PromozioneInterface */
foreach ($iterator as $promozione)
  {
  
  }