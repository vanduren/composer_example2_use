<?php
// autoload zorgt voor het vinden van alle classes 
// in jouw composer installed packages
require 'vendor/autoload.php';
// gebruik de namespace en de class name
use RekenMachine\RekenMachine;
// maak nieuw object met behulp van class
$testRekenMachine = new RekenMachine();
// test method optellen
echo ($testRekenMachine->Optellen(4, 7));

echo "<br>";
// test method vermenigvuldigen (enkel in versie v1.1.0)
echo ($testRekenMachine->Vermenigvuldigen(4, 7));
