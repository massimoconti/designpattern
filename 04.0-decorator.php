<?php
require 'vendor/autoload.php';

$db = Db::getInstance();

// please welcome ScontiLoader
$loader = new ScontiLoader($db);

$sconti = $loader->loadSconti();