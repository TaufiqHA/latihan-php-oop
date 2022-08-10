<?php 

require_once __DIR__ . "/data/Conflict.php";
require_once __DIR__ . "/data/Helper.php";

$conflict1 = new Data\one\Conflict();
$conflict2 = new Data\two\Conflict();

echo Helper\APPLICATION . PHP_EOL;
Helper\helpMe();