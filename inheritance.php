<?php 

require_once __DIR__  . "/data/Manager.php";

$manager = new Manager();
$manager->name = "Rahmawati";
$manager->sayHello("Taufiq");

$vicePresident = new vicePresident();
$vicePresident->name = "Taufiq Hidayah Abdullah";
$vicePresident->sayHello("Rahma");