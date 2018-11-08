<?php
require 'vendor/autoload.php';

$db = Db::getInstance();

// introducing ScontiLoader
$loader = new ScontiLoader($db);

$sconti = $loader->loadSconti();