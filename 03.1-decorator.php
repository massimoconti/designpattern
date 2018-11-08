<?php
require 'vendor/autoload.php';

$db = Db::getInstance();
$memcached = new Memcached();

// modifico il costruttore
$loader = new ScontiLoaderMemcachedExended($db, $memcached);

$sconti = $loader->loadSconti();
