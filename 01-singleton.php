<?php
require 'vendor/autoload.php';

function a(){
  $db1 = Db::getInstance();
  $db1->query();
}

function b(){
  $db2 = Db::getInstance();
  $db2->query();
}
