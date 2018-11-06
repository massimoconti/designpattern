<?php
require 'vendor/autoload.php';

$result = range(0, 10);
echo '$result is '.gettype($result).PHP_EOL;

function xrange($start, $limit)
{
  for ($i = $start; $i <= $limit; $i++)
    yield $i;
}

$result_generator = xrange(0, 10);
echo '$result_generator is '.gettype($result_generator).': '.get_class($result_generator).PHP_EOL;

foreach ($result_generator as $value)
  echo $value.PHP_EOL;

// questo produrrà un fatal 
//foreach ($result_generator as $value)
//  echo $value.PHP_EOL;