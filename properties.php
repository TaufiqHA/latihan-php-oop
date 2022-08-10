<?php 

require_once "data/Person.php";

$person = new Person("Rahma", null);
$person->name = "Taufiq";
$person->address = "Malakaji";
$person->country = "Indonesia";

var_dump($person);

echo "Nama : $person->name" . PHP_EOL;
echo "Alamat : $person->address" . PHP_EOL;
echo "Negara : $person->country" . PHP_EOL;

$person2 = new person("Taufiq", "Malakaji");
$person2->name = "Rahma";
$person2->address = "Tonrorita";
$person2->country = "Indonesia";

echo "Nama : $person2->name" . PHP_EOL;
echo "Alamat : $person2->address" . PHP_EOL;
echo "Negara : $person2->country" . PHP_EOL;

$person3 = new person("unknown", null);
$person3->name;
$person3->address;
$person3->country;

echo "Nama : $person3->name" . PHP_EOL;
echo "Alamat : $person3->address" . PHP_EOL;
echo "Negara : $person3->country" . PHP_EOL;