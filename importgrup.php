<?php 

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\one\{Conflict as conflict1, sample, dummy};
use function Helper\{helpMe};

$conflict = new conflict1;
$dummy = new dummy();
$sample = new sample();

helpMe();