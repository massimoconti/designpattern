<?php
require 'vendor/autoload.php';

$db = Db::getInstance();

$loader = new ScontiLoader($db);

$sconti = $loader->loadSconti();