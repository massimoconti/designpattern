<?php
require 'vendor/autoload.php';

$db = Db::getInstance();

$loader = new ScontiLoader($db);

$sconti = $loader->loadSconti();

$iterator = new ScontiIteratorAggregated($sconti);
$iterator = new ScontoPromozioneAdapterIterator($iterator);
$soglia_sconto = 50;
$iterator = new PromozioniFilterIterator($iterator, $soglia_sconto);

/* @var $sconto \PromozioneInterface */
foreach ($iterator as $promozione)
  {
  // solo $promozioni >= 50% di sconto
  }