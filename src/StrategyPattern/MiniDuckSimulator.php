<?php

use StrategyPattern\Duck\MallardDuck;

require __DIR__ . '/../../vendor/autoload.php';

$mallard = new MallardDuck();

$mallard->performQuack();
echo "\n";
$mallard->performFly();
echo "\n";