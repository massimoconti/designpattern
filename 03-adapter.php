<?php
require 'vendor/autoload.php';

$db = Db::getInstance();

$loader = new ScontiLoader($db);

$sconti = $loader->loadSconti();

$collector = new PromozioniCollector();

foreach ($sconti as $sconto)
  {
  $promo = new ScontoPromozioneAdapter($sconto);
  $collector->addPromozione($promo);
  }