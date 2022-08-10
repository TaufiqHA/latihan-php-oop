<?php 

require_once "data/Person.php";

$person = new Person("Taufiq", null);
$person->name = "rahma";
$person->sayHello(null);

$person1 = new person("taufiq", null);
$person1->name = "rahma";
$person1->sayHello("taufiq");