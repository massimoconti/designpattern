<?php
require 'vendor/autoload.php';

$db = Db::getInstance();
$memcached = new Memcached();

$loader = new ScontiLoader($db);
$loader = new ScontiLoaderMemcachedDecorator($loader, $memcached);

$sconti = $loader->loadSconti();